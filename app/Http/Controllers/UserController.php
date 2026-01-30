<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // nampilin halaman login admin
    public function showHalamanLogin()
    {
        return view('admin.login');
    }

    // handle login
    public function login(Request $request)
    {
        // validate
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->withErrors([
                'username' => 'Username tidak ada atau password salah!'
            ]);
        }

        Session::put('admin_login', true);
        Session::put('admin_id', $admin->user_id);
        Session::put('admin_username', $admin->username);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
