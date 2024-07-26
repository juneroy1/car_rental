<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DispatcherModel;

class DispatcherController extends Controller
{
    //
    public function dispatcher(){
        return view('dispatcher.create');
    }

    public function dispatcherSubmit(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'phone_no' => 'required',
            'permit' => 'required',
        ]);

        $create = new DispatcherModel;
        $create->name = $request->name;
        $create->phone_no = $request->phone_no;
        $create->permit = $request->permit;
        $create->save();

        return redirect('/dispatcher');
    }
}
