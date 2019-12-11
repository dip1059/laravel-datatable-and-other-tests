<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/9/19
 * Time: 7:24 PM
 */

namespace App\Http\Repositories;

use App\Models\User;


class AuthRepo
{
    public function login($req) {
        $user = User::where(['email' => $req->email])->first();
        return $user;
    }
}
