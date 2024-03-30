<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
          'Carname',
          'models',
          'rate',
          'location',
          'photo',
    ];
    protected $primaryKey = 'car_id';
   
}
