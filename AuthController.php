<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    function getData()
    {   
        return Users::all();
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $users = new Users;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();
        $request->session()->put('users', $request->input('name'));
        return redirect('login');

    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $users= Users::where("email", $request->input('email'))->get();

        if ($users->isEmpty()) {
            return redirect('login')->withErrors([
                'login' => 'Email not found.',
            ]);
        }
        
        if($users[0]->password == $request->input('password'))
        {
            $request->session()->put('users', $request->input('name'));
            return redirect('homepage');
        }
        else
        {
            return redirect('login')->withErrors([
                'login' => 'Invalid email or password.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
