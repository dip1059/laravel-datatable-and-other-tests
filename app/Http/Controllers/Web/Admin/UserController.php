<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UserService;

class UserController extends Controller
{
    public function deleteUser($id) {
        $success = app(UserService::class)->deleteUser($id);
        if ($success) {
            return redirect()->back()->with(['success' => 'User deleted successfully.']);
        } else {
            return redirect()->back()->with(['fail' => 'Some error occurred.']);
        }
    }
}
