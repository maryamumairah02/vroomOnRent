<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public $table = "vehicles";
    
    protected $fillable = [
        'vehicle_type',
        'vehicle_brand',
        'plate_number',
        'rental_id',
    ];
  
}
