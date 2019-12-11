<?php
/**
 * Created by PhpStorm.
 * User: asha
 * Date: 12/10/19
 * Time: 3:59 PM
 */

namespace App\Http\Repositories;

use App\Models\User;

class UserRepo
{
    public function allUser()
    {
        $usersQuery = User::query();
        return $usersQuery;
    }

    public function deleteUser($id)
    {
        $success = User::where(['id' => $id])->delete();
        return $success;
    }
}
