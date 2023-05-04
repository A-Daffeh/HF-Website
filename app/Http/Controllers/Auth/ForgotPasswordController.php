<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use App\Models\User;
use Sentinel;
use Reminder;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    // public function forgot(Request $request) {
    //     $user = User::whereEmail($request->email)->first();

    //     if ($user == null) {
    //         return redirect()->back()->with(['error' => 'Email not exists']);
    //     }
    //     $this->sendEmail($user, $reminder->code);

    //     return redirect()->back()->with(['success' => 'Reset code sent to your email.']);
    // }

    
}
