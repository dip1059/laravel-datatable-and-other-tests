<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Services\AuthService;
use Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginGet() {
        return view('guest.login');
    }

    public function loginPost(LoginRequest $req) {
        try {
            $success = app(AuthService::class)->login($req);

            if ($success && Auth::user()->role_id == 1) {
                return redirect()->route('admin.dashboard');
            } else if ($success && Auth::user()->role_id == 2) {
                return redirect()->route('user.dashboard');
            } else {
                return redirect()->back()->with(['fail' => 'Wrong credentials']);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
