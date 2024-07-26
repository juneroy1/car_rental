<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriversModel;

class DriversController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function driver(){
        return view('driver.create');
    }

    public function driverSubmit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'phone_no' => 'required',
            'age' => 'required',
            'years_of_experience' => 'required',
            'license_no' => 'required',
            'image' => 'required',
        ]);

        $create = new DriversModel;
        $create->name = $request->name;
        $create->phone_no = $request->phone_no;
        $create->age = $request->age;
        $create->years_of_experience = $request->years_of_experience;
        $create->license_no = $request->license_no;
        $create->is_maintenance = $request->is_maintenance?  $request->is_maintenance: '0';
        $create->image = $request->image;
        $create->save();

        return redirect('/driver');
    }
}
