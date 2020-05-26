<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
   public function index()
    {
        return view('reservation');
    }


     public function send(Request $request)
      {  

          $data = array();
       $data['name'] = $request->name;
       $data['phone'] = $request->phone;
       $data['email'] = $request->email;
       $data['dateandtime'] = $request->dateandtime ;
       //$data['date_and_time '] = $request->dateandtime;
       $data['message'] = $request->message;
      // $data['status'] = false;

      $product = DB::table('reservations')->insert($data);
      // return redirect()->route('home')->with('success','message is send');

       return redirect()->back()->with('success','reservation request is send successfully');

      	/*
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'dateandtime' => 'required'
        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->email = $request->email;
        $reservation->date_and_time = $request->dateandtime;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        //Toastr::success('Reservation request sent successfully. we will confirm to you shortly','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();*/
    }
}
