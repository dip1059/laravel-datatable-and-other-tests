<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/10/19
 * Time: 3:59 PM
 */

namespace App\Http\Services;

use App\Http\Repositories\UserRepo;

class UserService
{
    public function allUser() {
        $usersQuery = app(UserRepo::class)->allUser();
        return $usersQuery;
    }

    public function deleteUser($id) {
        $success = app(UserRepo::class)->deleteUser($id);
        return $success;
    }
}
