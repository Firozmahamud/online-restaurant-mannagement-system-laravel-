<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Illuminate\Support\Facades\DB;

class ReservationhistoryController extends Controller
{
    public function index()
    {   $product = DB::table('reservations')->get();

        return view('reservationhistory',compact('product'));
    }


     public function Delete($id){
     	$data = DB:: table ('reservations')->where('id',$id)->first();
     	$product = DB:: table('reservations')->where('id',$id)->delete();
     	return redirect()->back();

     }
}
