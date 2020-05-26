<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpController extends Controller
{
     public function index()
    {
        return view('up');
    }




    public function uploadimg (Request $request)

{
   if($request->hasFile('image')){
		$filename = $request->image->getClientOriginalName();
/*
         if(auth()->user()->img){
         	Storage::delete('/public/images/'.auth()->user()->img);
         }

*/
	
	
	$request->image->storeAs('images',$filename,'public');

	auth()->user()->update(['img'=> $filename]);



/*session()->put('message','Image Uploaded successfully');
	return redirect()->back();*/






	$request->session()->flash('message','Image Uploaded successfully');
	return redirect()->back();//success message
}
    $request->session()->flash('message','Image not Uploaded');

	return redirect()->back();//error message
}



protected function deleteOldImage($image)
{
	if(auth()->user()->img){
         	Storage::delete('/public/images/'. auth()->user()->img);
         }
}





/*
{
	$request->image->store('images','public');
	return 'uploded';
}
//

{
	if($request->hasFile('image')){
		$filename = $request->images->getClientOriginalName();
	
	
	$request->image->storeAs('images',$filename,'public');

	//User::find(1)->update(['img'=> $filename]);
}
    
	return redirect()->back();
}
*/


}
