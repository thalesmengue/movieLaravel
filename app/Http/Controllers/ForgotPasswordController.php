<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view("forgot_password");
    }

    public function sendResetPasswordEmail(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPasswordForm($token)
    {
        $tokenExists = DB::table('password_resets')
            ->where([
                'email' => request()->query("email")
            ])
            ->exists();

        $databaseToken = DB::table('password_resets')
            ->where([
                'email' => request()->query("email")
            ])
            ->first();

        if (!$tokenExists || !Hash::check($token, $databaseToken->token)) {
            return redirect()->route("password.request")->with("message", "token inexistente ou inválido");
        }

        return view("reset_password");
    }

    public function resetUserPassword(ResetPasswordRequest $request)
    {
        User::query()->where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect()->route("login.view");
    }
}
