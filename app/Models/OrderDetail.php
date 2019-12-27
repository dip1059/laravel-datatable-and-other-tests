<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Order;

class OrderDetail extends Model
{
    use SoftDeletes;
    protected $fillable = ['order_id'];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
