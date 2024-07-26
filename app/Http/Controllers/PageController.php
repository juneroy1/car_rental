<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleModel;

class PageController extends Controller
{
    //
    public function welcome(){
          $user = auth()->user();
        $vehicles = VehicleModel::
         join('users', 'users.id', '=', 'vehicles.user_id')
         ->select('vehicles.*', 'users.email')
         ->get();
        return view('welcome',[
            'vehicles' => $vehicles,
            'user' => $user
        ]);
    }
}
