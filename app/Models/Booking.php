<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'register_id',
        'car_id',
        'picking_up_date',
        'dropping_off_date',
    ];
    protected $primaryKey ='booking_id';
}
