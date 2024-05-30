<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class LoginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'id' => 'required|int',
            'password' => 'required|string'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('main');
        }
        return back()->withErrors([
            'id' => 'The provided credentials do not match our records.',
        ])->onlyInput('id');
    }
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    public function page()
    {
        return view('munkafolyamat');
    }
}
