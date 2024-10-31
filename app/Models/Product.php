<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Product.php
    protected $fillable = ['name', 'price', 'stock', 'service_id'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
