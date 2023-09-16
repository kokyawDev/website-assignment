<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\Browsershot\Browsershot;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
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

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Str::uuid()->toString();
            $model->order_number = 'ORD-' . '-' . sprintf('%04d', (self::max('id') + 1));
        });
    }

    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function invoice()
    {
        try {
            $content = view('invoice', ['order' => $this])->render();

            return Browsershot::html($content)->format('A5')->pdf();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
