<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Services\Logger;
use App;

class DashboardController extends Controller
{
    public function dashboard() {
        $logger = new Logger(env('DASH_LOG'));
        try {
            $users = app(UserService::class)->allUser()->paginate(10);
            return view('admin.dashboard',['users' => $users]);
        } catch(\Exception $e) {
            $logger->log('dashboard', $e->getMessage());
        }
    }

    public function dashboardYajra(Request $request) {
        $logger = new Logger(env('DASH_LOG'));
        try {
            if ($request->ajax()) {
                $usersQuery = app(UserService::class)->allUser();
                return datatables()->of($usersQuery)
                    ->addColumn('actions', function ($item) {
                        switch ($item->role_id) {
                            case ADMIN_ROLE:
                                return '';
                            case USER_ROLE:
                                return '<a href="'.route('delete.user', ['id' => $item->id]).'">Delete</a>';
                        }
                    })
                    ->rawColumns(['actions'])
                    ->make(true);
            } else {
                return view('admin.dashboard-yajra');
            }

        } catch(\Exception $e) {
            $logger->log('dashboard', $e->getMessage());
        }
    }
}
