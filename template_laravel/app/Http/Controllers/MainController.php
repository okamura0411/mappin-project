<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Report;

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
        // form1からのデータを受け取る
        $station = $request->input('station');
        $place = $request->input('place');
        $xNum = $request->input('Xnum');
        $yNum = $request->input('Ynum');
        $detail = $request->input('detail');
        $quantity = $request->input('quantity');
        $whose = $request->input('whose');
        $action = $request->input('action');
        $remarks = $request->input('remarks');
        
        $filePaths = [];
        if($request->hasFile('file')) {
            foreach($request->file('file') as $file) {
                $path = $file->store('public');
                $filePaths[] = $path;
            }
        }

        // ファイルのパスをデータベースに保存する
        $report = new Report();
        $report->station = $station;
        $report->place = $place;
        $report->x_num = $xNum;
        $report->y_num = $yNum;
        $report->detail = $detail;
        $report->quantity = $quantity;
        $report->whose = $whose;
        $report->action = $action;
        $report->remarks = $remarks;
        $report->file_paths = implode(',', $filePaths);
        $report->save();

        return redirect('/');
    }
}