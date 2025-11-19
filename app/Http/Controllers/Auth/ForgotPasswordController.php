<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function show()
    {
        return view('auth.forgot-password');
    }

    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // Contoh: set password sementara 123456
            $user->password = Hash::make('123456');
            $user->save();

            return back()->with('status', 'Password sementara sudah direset. Gunakan "123456" untuk login.');
        }

        return back()->withErrors(['email' => 'Email tidak ditemukan']);
    }
}
