<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTrasactionModel extends Model
{
    use HasFactory;
     protected $fillable = ['date_request', 'client_name', 'client_address', 'client_phone_no', 'no_of_days', 'contract', 'count'];
    protected $table = 'booking_transactions';


    //  public function manager()
    // {
    //     return $this->belongsTo(User::class, 'team_manager');
    // }
    public function driver()
    {
        return $this->belongsTo(DriversModel::class, 'drivers_id');
    }
     public function vehicle()
    {
        return $this->belongsTo(VehicleModel::class, 'vehicle_id');
    }
}
