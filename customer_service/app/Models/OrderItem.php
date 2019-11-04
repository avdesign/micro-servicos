<?php

namespace App\Models;

use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use Uuid;

    public $incrementing = false;
    protected $keyType = "string";

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'discount',
        'qty',
        'total'
    ];

    protected $casts = [
        'qty' => 'int',
        'total' => 'float'
    ];

    public function product()
    {
        $this->belongsTo(Product::class);
    }

    public function order()
    {
        $this->belongsTo(Order::class);
    }
}
