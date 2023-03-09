<?php
namespace App\Http\Controllers;

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
    public function calendar() {
        return view('pages/calendar');
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
}