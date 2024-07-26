<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriversModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone_no', 'age', 'years_of_experience', 'license_no', 'status', 'image'];
    protected $table = 'drivers';
}
