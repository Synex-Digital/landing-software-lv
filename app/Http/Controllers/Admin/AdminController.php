<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function profile()
    { $setting = Setting::first();
        return view('dashboard.pages.profile',[
            'setting' => $setting
        ]);
    }
    public function profile_update(Request $request){
        // dd($request->all());
      $validator = Validator::make($request->all(), [
          'email' => 'required|email|unique:users,email,'.auth()->user()->id,
            'current_password' => $request->password ? 'required' : 'nullable',
            'password' => $request->password ? 'required' : 'nullable',
            'password_confirmation' => $request->password ? 'required|same:password' : 'nullable',
      ]);
      if($validator->fails()){
        flash()->option('position', 'top-right')->error($validator->errors()->first());
        return back();
      }

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $uploaded_image = $request->file('profile');
        $ext = $uploaded_image?->getClientOriginalExtension();
        $filename = 'PROFILE_' . time() . '.' . $ext;
        if($uploaded_image){
            if($user->profile){
                unlink(public_path('uploads/profile/'.$user->profile));
            }
        }
        $uploaded_image ? $user->profile = $filename : '';
        $uploaded_image?->move(public_path('uploads/profile'), $filename);
        if($request->password && $request->current_password){
            if(!Hash::check($request->current_password, $user->password)){
                flash()->option('position', 'top-right')->error('Current password not matched');
                return back();
            }
            $user->password =  Hash::make($request->password);
        }
        $user->save();
        flash()->option('position', 'top-right')->success('Profile updated successfully');
        return back();

    }

    public function login()
    {
        if(!Auth::check()){
            $setting = Setting::first();
            return view('dashboard.auth.login',[
                'setting' => $setting
            ]);
        }else{
            return redirect('/');
        }

    }
    public function login_check(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);
                flash()->option('position', 'top-right')->success('Login successfully');
                return redirect('/');
            }else{
                return back()->with('error', 'Credentials not matched');
            }
        }else{
            return back()->with('error', 'Credentials not found');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
