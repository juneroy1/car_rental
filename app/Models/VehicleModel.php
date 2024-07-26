<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $fillable = ['name','plate_no', 'vehicle_type', 'date_acquired', 'year_model', 'vehicle_status', 'capacity', 'is_air_conditioned', 'description', 'image', 'price'];
    protected $table = 'vehicles';
}
