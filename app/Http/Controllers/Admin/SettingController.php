<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('dashboard.pages.settings',[
            'settings' => $setting
        ]);
    }
    public function update(Request $request){
        $validate = Validator::make($request->all(), [
            'web_name'  => 'required',
            'domain'    => 'required',
        ]);

        if ($validate->fails()) {
            foreach($validate->errors()->all() as $error) {
                flash()->position('top-right')->error($error);
            } return back();
        }

        $setting = Setting::first();
        if($request->hasFile('web_logo')){
            if($setting->web_logo){
                unlink(public_path('uploads/web/'.$setting->web_logo));
            }
            $file = $request->file('web_logo');
            $file->move(public_path('uploads/web/'), $file->getClientOriginalName());
            $setting->web_logo = $file->getClientOriginalName();
        }
        if($request->hasFile('web_fav')){
            if($setting->web_favicon){
                unlink(public_path('uploads/web/'.$setting->web_favicon));
            }
            $file = $request->file('web_fav');
            $file->move(public_path('uploads/web/'), $file->getClientOriginalName());
            $setting->web_fav = $file->getClientOriginalName();
        }
        $setting->web_name = $request->web_name;
        $setting->domain = $request->domain;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->save();
        flash()->position('top-right')->success('Settings Updated Successfully');
        return back();

    }

}
