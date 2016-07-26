<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Contracts\Factory as Socialite;

class SocialAuthController extends Controller {

    public function __construct(Socialite $socialite) {

        $this->middleware('guest');

        $this->socialite = $socialite;
    }

    /**
     * checks for provider service support
     *
     * @param $provider
     * @return User
     */
    public function getSocialAuth($provider = null) {
        if (!config("services.{$provider}"))
            abort('404'); //just to handle providers that doesn't exist

        return $this->socialite->with($provider)->redirect();
    }

    /**
     * accepts provider callback
     *
     * @param $provider
     * @return User
     */
    public function getSocialAuthCallback($provider = null) {
        try {
            $user = $this->socialite->with($provider)->user();
        } catch (Exception $e) {
            return redirect('login/' . $provider);
        }
        $authUser = $this->findOrCreateUser($user, $provider);

        Auth::login($authUser, true);

        return redirect('/');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $User
     * @param $provider
     * @return User
     */
    private function findOrCreateUser($User, $provider) {
        $authUser = User::where($provider . '_id', $User->id)->first();

        if ($authUser) {
            return $authUser;
        }

        $authUser = User::where('email', $User->email)->first();

        if ($authUser) {

            $authUser->update([
                $provider . '_id' => $User->id,
                $provider . '_token' => $User->token
            ]);

            return $authUser;
        }
        return User::create([
                    'name' => $User->getName(),
                    'email' => $User->email,
                    $provider . '_id' => $User->id,
                    $provider . '_token' => $User->token,
        ]);
    }

}
