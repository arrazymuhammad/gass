<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    function login(){
    	return view('auth.login');
    }

    function loginProcess(){
    	if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
    		return redirect('newsfeed');
    	}
    	return back()->with('error', "Login Gagal");
    }

    function signUp(){
    	return view('auth.sign-up');
    }

    function signUpProcess()
    {
    	$user = User::where('email', request('email'))->first();
    	if($user) return back()->with("error", "Email Pernah Didaftarkan");
    	$user = new User;
    	$user->fullname = request('fullname');
    	$user->email = request('email');
    	$user->password = request('password');
    	$user->is_praktisi = 0;
    	$user->photo = 'assets/images/default.png';
    	$user->save();

    	Auth::login($user);

    	return redirect("newsfeed");
    }
    function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
