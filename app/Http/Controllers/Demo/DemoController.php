<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
    // public function demoFun(){
    //     echo "Hello Abir";
    // }

    // public function uploadImage()
    // {
    // //    $image = Storage::get('Autumn.jpg');
    // //    dd($image);
    //     $image_link = Storage::disk('local')->get('test/Golden_Retriever_Puppies.jpg');
    //     dd($image_link);
    // }

    public function login(){
        return view('Auth.login');
    }

    public function register(){
        return view('Auth.registration');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password)
        ]);

        return redirect('/login');
    }
    
    public function signin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
