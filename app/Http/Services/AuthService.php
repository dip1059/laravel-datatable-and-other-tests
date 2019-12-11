<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/9/19
 * Time: 6:19 PM
 */

namespace App\Http\Services;


use Illuminate\Support\Facades\Request;
use Auth;
use Hash;
use App\Http\Repositories\AuthRepo;

class AuthService
{
    public function login($req)
    {
        try {
            $credentials = $req->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return true;
            } else {
                return false;
            }
        } catch(\Exception $e) {
            dd($e);
        }
    }
}
