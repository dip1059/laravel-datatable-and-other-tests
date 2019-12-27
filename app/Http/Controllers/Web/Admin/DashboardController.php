<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use App\Http\Services\Logger;
use App;
use App\Models\User;
use App\Models\OrderDetail;
use App\Models\Order;

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

    public function relationTest() {
        $user3 = User::with('orders.orderDetails')->where(['id' => 3])->first();
        $data['user3'] = $user3;

        $orderDetail3 = OrderDetail::with('order.user')->where(['id' => 5])->first();
        $data['orderDetail3'] = $orderDetail3;

        $order3 = Order::with(['user', 'orderDetails'])->where(['id' => 3])->first();
        $data['order3'] = $order3;

        dd($data);
    }
}
