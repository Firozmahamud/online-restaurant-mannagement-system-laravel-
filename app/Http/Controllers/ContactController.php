<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
       $data = array();
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['subject'] = $request->subject;
       $data['message'] = $request->message;

      $product = DB::table('contacts')->insert($data);
      // return redirect()->route('home')->with('success','message is send');

       return redirect()->back()->with('success','message is send successfully');
    }


}



/*
contact::create($request->all());
 return redirect()->back();


//

$this->validate($request,[

        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required',

       ]);
       
       $contact =new contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->subject = $request->subject;
       $contact->message = $request->message;
       $contact->save();

      // toastr::success('your message sucessfully send','sucess',["positionClass"=>"toast-top-right"]);
       
       return redirect()->back();
*/