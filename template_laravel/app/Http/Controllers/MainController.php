<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller {
    public function dashboardV1() {
        return view('pages/dashboard-v1');
    }
    public function dashboardV2() {
        return view('pages/dashboard-v2');
    }
    public function dashboardV3() {
        return view('pages/dashboard-v3');
    }
    public function formDropzone() {
        return view('pages/form-dropzone');
    }
    public function emailTemplateSystem() {
        return view('pages/system');
    }

    public function galleryV1() {
        return view('pages/gallery-v1');
    }
    public function loginV3() {
        return view('pages/login-v3');
    }
    public function registerV3() {
        return view('pages/register-v3');
    }
    public function Dropzone() {
        return view('pages/dropzone');
    }

    public function store(Request $request)
    {
        // フォームデータを取得する
        $station = $request->input('station');
        $place = $request->input('place');
        $Xnum = $request->input('Xnum');
        $Ynum = $request->input('Ynum');
        $detail = $request->input('detail');
        $quantity = $request->input('quantity');
        $whose = $request->input('whose');
        $action = $request->input('action');
        $remarks = $request->input('remarks');

      // アップロードされたファイルを保存する
        $fileNames = [];
        foreach ($request->file('file') as $file) {
            // ファイル名をUTF-8に変換する
            $fileName = mb_convert_encoding($file->getClientOriginalName(), 'UTF-8', 'auto');
            // ファイルをstorage/app/public/に保存する
            $filePath = $file->storeAs('public', $fileName);
            // 保存されたファイルのパスを配列に追加する
            $fileNames[] = $fileName;
        }

        // フォームデータとファイル名をテキストファイルに保存する
        $data = "station:{$station},place:{$place},Xnum:{$Xnum},Ynum:{$Ynum},detail:{$detail},quantity:{$quantity},whose:{$whose},action:{$action},remarks:{$remarks},filename:" . implode(',', $fileNames);
        Storage::append('sample.txt', $data);

        
        // リダイレクト先を設定する
        return redirect('/home');
    }
}