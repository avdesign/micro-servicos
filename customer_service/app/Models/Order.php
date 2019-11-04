<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Uuid;

    public $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        'id',
        'customer_id',
        'status',
        'discount',
        'total',
        'order_date'
    ];


    protected $casts = [
        'discount' => 'float',
        'total' => 'float',
        'order_date' => 'date'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem2::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
