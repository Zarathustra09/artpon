<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service',
        'product',
        'color',
        'theme',
        'event_type',
        'date',
        'message',
        'delivery_option',
        'delivery_address',
        'status',
    ];

    /**
     * Get the user that owns the booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the service associated with the booking.
     */
    public function service()
    {
        return $this->belongsTo(Service::class, 'service');
    }

    /**
     * Get the product associated with the booking.
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
