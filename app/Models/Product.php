<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function latest_price()
    {
        return $this->hasOne(Price::class)->orderBy('effdate', 'desc');
    }
}
