<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingTrasactionModel;
use App\Models\DispatcherModel;
use App\Models\VehicleModel;
use App\Models\DriversModel;
use App\Models\User;
class BookingTransactionsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function books(){
        $user = auth()->user();

         $books = BookingTrasactionModel::all();
         return view('booking_trasaction.books',[
            'book' => $books,
            'user' => $user,
        ]);
    }
    public function bookDelete($id){
        $book = BookingTrasactionModel::find($id);
        $book->delete();

        return redirect('/manage-bookings');
    }
    public function bookEdit($id){
        $user = auth()->user();
        $book = BookingTrasactionModel::find($id);
        // get all the vehicles available
        $vehicles = VehicleModel::where('is_maintenance', '0')->get();

        // get all drivers available
        $drivers = DriversModel::where('is_maintenance', '0')->get();

        // get all dispatchers available
        $dispatchers = User::where('is_admin', '1')
        ->get();
        
        return view('booking_trasaction.updatebook',[
            'book' => $book,
            'user' => $user,
            'vehicles' => $vehicles,
            'drivers' => $drivers,
            'dispatchers' => $dispatchers,
        ]);
    }
    public function manageBookings(){
         $user = auth()->user();
        if ($user->is_admin == 1) {
            $bookings = BookingTrasactionModel::orderBy('id', 'DESC')->get();
        }else{
            $bookings = BookingTrasactionModel::where('dispatcher_id', $user->id)->orderBy('id', 'DESC')->get();
        }
        return view('book_now.booking_list',[
            'bookings' => $bookings,
            'user' => $user,
        ]);
    }

    public function bookNowSubmit(Request $request){
         $user = auth()->user();
        $this->validate($request, [
            'client_name' => 'required',
            'client_email' => 'required',
            'client_phone_no' => 'required',
            'client_address' => 'required',
            'drivers_id' => 'required',
            'vehicle_id' => 'required',
            'pickup_location' => 'required',
            'date_pick_up' => 'required',
            'time_pick_up' => 'required',
            'return_location' => 'required',
            'date_return' => 'required',
            'time_return' => 'required',
        ]);

        $create = new BookingTrasactionModel;
        $create->date_request = new \DateTime();
        $create->client_name = $request->client_name;
        $create->client_email = $request->client_email;
        $create->client_phone_no = $request->client_phone_no;
        $create->client_address = $request->client_address;
        $create->drivers_id = $request->drivers_id;
        $create->dispatcher_id = $user->id;
        $create->vehicle_id = $request->vehicle_id;
        $create->pickup_location = $request->pickup_location;
        $create->date_pick_up = $request->date_pick_up;
        $create->time_pick_up = $request->time_pick_up;
        $create->return_location = $request->return_location;
        $create->date_return = $request->date_return;
        $create->time_return = $request->time_return;
        $create->save();

        return redirect('/manage-bookings');
    }
    public function bookNow($id){
       
        $vehicle = VehicleModel::find($id);
    //    $drivers = DriversModel::where('is_maintenance', '0')->get();
    //    $drivers = DriversModel::where('is_maintenance', '0')->get();
    $drivers = \DB::table('drivers')
        ->whereExists(function ($query) {
            $query->select(\DB::raw(1))
                    ->from('users')
                    ->whereRaw('drivers.user_id = users.id');
        })
        ->get();
        // if (!$vehicle) {
        //    return abort(403, 'Unauthorized action.');
        // }
        // dd('dadada');
        return view('book_now.book_now',[
            'vehicle' => $vehicle,
            'drivers' => $drivers
        ]);
    }
    public function book(){
        // get all the vehicles available
        $vehicles = VehicleModel::where('is_maintenance', '0')->get();

        // get all drivers available
        $drivers = DriversModel::where('is_maintenance', '0')->get();

        // get all dispatchers available
          $dispatchers = User::where('is_admin', '1')
        ->get();
        return view('booking_trasaction.createbook',[
            'vehicles' => $vehicles,
            'drivers' => $drivers,
            'dispatchers' => $dispatchers,
        ]);
    }
    public function  bookUpdate(Request $request, $id){
         $user = auth()->user();
        
        $this->validate($request, [
            'client_name' => 'required',
            'client_email' => 'required',
            'client_phone_no' => 'required',
            'client_address' => 'required',
            'drivers_id' => 'required',
            'vehicle_id' => 'required',
            'pickup_location' => 'required',
            'date_pick_up' => 'required',
            'time_pick_up' => 'required',
            'return_location' => 'required',
            'date_return' => 'required',
            'time_return' => 'required',
        ]);

        $create =  BookingTrasactionModel::find($id);
       
        $create->date_request = new \DateTime();
        $create->client_name = $request->client_name;
        $create->client_email = $request->client_email;
        $create->client_phone_no = $request->client_phone_no;
        $create->client_address = $request->client_address;
        $create->drivers_id = $request->drivers_id;
        $create->dispatcher_id = $user->id;
        $create->vehicle_id = $request->vehicle_id;
        $create->pickup_location = $request->pickup_location;
        $create->date_pick_up = $request->date_pick_up;
        $create->time_pick_up = $request->time_pick_up;
        $create->return_location = $request->return_location;
        $create->date_return = $request->date_return;
        $create->time_return = $request->time_return;
        $create->save();

        return redirect('/book/'.$id)->with('success', 'successfully updated!');;
    }
    public function bookSubmit(Request $request){
         $user = auth()->user();
        
        $this->validate($request, [
            'client_name' => 'required',
            'client_email' => 'required',
            'client_phone_no' => 'required',
            'client_address' => 'required',
            'drivers_id' => 'required',
            'vehicle_id' => 'required',
            'pickup_location' => 'required',
            'date_pick_up' => 'required',
            'time_pick_up' => 'required',
            'return_location' => 'required',
            'date_return' => 'required',
            'time_return' => 'required',
        ]);

        $create = new BookingTrasactionModel;
        $create->date_request = new \DateTime();
        $create->client_name = $request->client_name;
        $create->client_email = $request->client_email;
        $create->client_phone_no = $request->client_phone_no;
        $create->client_address = $request->client_address;
        $create->drivers_id = $request->drivers_id;
        $create->dispatcher_id = $user->id;
        $create->vehicle_id = $request->vehicle_id;
        $create->pickup_location = $request->pickup_location;
        $create->date_pick_up = $request->date_pick_up;
        $create->time_pick_up = $request->time_pick_up;
        $create->return_location = $request->return_location;
        $create->date_return = $request->date_return;
        $create->time_return = $request->time_return;
        $create->save();

        return redirect('/');
    }
}
