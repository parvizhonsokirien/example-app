<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillable = ['category_food_id', 'restoraunt_id', 'name', 'price', 'image', 'description', 'time', 'is_active'];

    protected function foodCategory()
    {
        return $this->belongsTo(foodCategory::class);
    }

    protected function restoraunt()
    {
        return $this->belongsTo(restoraunts::class);
    }

}
