<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleModel;

class VehicleController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function vehicle(){
        return view('vehicle.create');
    }

    public function vehicleSubmit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'plate_no' => 'required',
            'vehicle_type' => 'required',
            'date_acquired' => 'required',
            'year_model' => 'required',
            'capacity' => 'required',
        ]);

        $create = new VehicleModel;
        $create->name = $request->name;
        $create->description = $request->description;
        $create->is_air_conditioned = $request->is_air_conditioned;
        $create->image = $request->image;
        $create->price = $request->price;
        $create->plate_no = $request->plate_no;
        $create->vehicle_type = $request->vehicle_type;
        $create->date_acquired = $request->date_acquired;
        $create->year_model = $request->year_model;
        $create->is_maintenance = $request->is_maintenance ?$request->is_maintenance: '0' ;
        $create->capacity = $request->capacity;
        $create->save();

        return redirect('/vehicle');
    }
}
