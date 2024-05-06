<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $fillable = ['restoraunt_id', 'name', 'number', 'description', 'capacity'];

    protected function restiraunt()
    {
        return $this->belongsTo(restoraunts::class);
    }
}
