<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // baru

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('login1');
    }
    public function proses_login(Request $request)
    {
        request()->validate([
        'username' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'editor') {
                return redirect()->intended('editor');
            }
            return redirect('/');
        }
        return redirect('login1')->withSuccess('Oppes! Silahkan Cek Inputanmu');
    }
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login1');
    }
}
