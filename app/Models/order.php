<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['booking_id', 'food_id', 'client_id', 'quantity', 'order_datetime', 'status'];

    protected function booking()
    {
        return $this->belongsTo(booking::class);
    }

    protected function food()
    {
        return $this->belongsTo(food::class);
    }

    protected function client()
    {
        return $this->belongsTo(client::class);
    }

}
