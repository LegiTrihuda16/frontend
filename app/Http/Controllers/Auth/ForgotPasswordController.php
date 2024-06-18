<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['username' => 'required|string']);

        // Fetch user by username and send reset link to their email
        $user = \App\Models\User::where('username', $request->username)->first();

        if ($user) {
            $status = Password::sendResetLink(['email' => $user->email]);

            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['username' => __($status)]);
        }

        return back()->withErrors(['username' => 'Username not found']);
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'username' => 'required|string',
            'password' => 'required|min:8|confirmed',
        ]);

        // Fetch user by username
        $user = \App\Models\User::where('username', $request->username)->first();

        if ($user) {
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->password = Hash::make($password);
                    $user->save();
                }
            );

            return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['username' => [__($status)]]);
        }

        return back()->withErrors(['username' => 'Username not found']);
    }
}
