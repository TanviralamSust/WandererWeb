<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = array
        (
            'email' => 'required',
            'password' => 'required'
        );
        $allInput = $request->all();
        $validation = \Validator::make($allInput, $rules);
        // dd($allInput);
        // user lock after multiple wrong attempts // this throttle lock ---Added By Masi
        if ($validation->fails()) {
            return redirect()->route('login')
                ->withInput()
                ->withErrors($validation);
        }

        // check user is enabled to login end
        if (Auth::attempt(['email' => $allInput['email'], 'password' => $allInput['password'], 'type' => 'agent'])) {
            return redirect()->to('/agentlogin');
        } elseif (Auth::attempt(['email' => $allInput['email'], 'password' => $allInput['password'], 'type' => 'renter'])) {
            return redirect()->to('/renterlogin');
        }

        return redirect()->route('login')
            ->withInput()
            ->withErrors('Error in Email Address or Password.');


    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
