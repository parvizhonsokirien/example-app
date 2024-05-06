<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'restoraunt_id', 'name', 'surname', 'phone'];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function restoraunt()
    {
        return $this->belongsTo(Restoraunt::class);
    }

}
