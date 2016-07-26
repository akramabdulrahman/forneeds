<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Mailers\MailVerificationMailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailVerificationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function sendVerification(Request $request, MailVerificationMailer $mailer) {
        $user = Auth::user();
        $mailer->sendEmailConfirmationTo($user);
        session()->flash('message', trans('flashmessages.mail_sent', ['email' => $user->email]));
        return redirect()->back();//->with(array('message', trans('flashmessages.mail_sent', ['email' => $user->email])));
    }

    /**
     * Confirm a user's email address.
     *
     * @param  string $token
     * @return mixed
     */
    public function confirmEmail($token) {
        User::whereToken($token)->firstOrFail()->confirmEmail();
        session()->flash('message', 'You are now confirmed.');
        return redirect('/');
    }

}
