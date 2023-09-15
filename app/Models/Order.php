<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'status',
        'total_price',
        'payment_method',
        'payment_status',
        'shipping_method',
        'shipping_status',
        'shipping_address',
        'order_note'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
        });
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }
}
