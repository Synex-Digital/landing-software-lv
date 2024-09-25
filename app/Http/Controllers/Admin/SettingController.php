<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('dashboard.pages.settings',[
            'settings' => $setting
        ]);
    }
}
