<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restoraunts extends Model
{
    use HasFactory;
    protected $fillable = ['rest_category_id', 'name', 'address', 'phone', 'email'];

    protected function rest_category()
    {
        return $this->belongsTo(rest_category::class);
    }
}
