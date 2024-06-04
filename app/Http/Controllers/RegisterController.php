<?php

namespace App\Http\Controllers;

use App\Models\ModelAdmin;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:50'],
            'password' => ['required', 'string', 'max:225', 'min:8'],
            'username' => ['required', 'string', 'max:50'],
        ]);

        $admin= ModelAdmin::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username,
        ]);

        return redirect()->route('login')->with('success', 'Register berhasil silahkan login');
    }
    public function showRegistrationForm()
    {
        return view('admin.register');
    }
}
