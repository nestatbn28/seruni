<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use AuthenticatesUsers;
    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:user')->except('postLogout');
    }
    public function postLogin(Request $request)
    {

        if (auth()->guard('user')->attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return redirect()->intended();
        } else {
            $this->incrementLoginAttempts($request);

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }
    public function postLogout()
    {
        auth()->guard('user')->logout();
        session()->flush();

        return redirect()->route('user.login');
    }
}
