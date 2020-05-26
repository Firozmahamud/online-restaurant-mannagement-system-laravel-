<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HomeRequest;
use Validator;

class EditController extends Controller
{
    public function index()
    {

    	
       return view('edit');
    } 
public function update($id, Request $req){
$data = array();
$data['name'] = $req->name;
$data['email'] = $req->email;
$data['password'] = $req->password;

if($data->save()){
			return redirect()->route('profile');
		}else{
			return redirect()->route('edit', $id);
		}
//Auth::user() = DB::table('users')->where('id',$id)->insert($data);



}



    /*
 public function Edit($id)
    {

    	$user = DB::table('users')->where('id',$id)->first();

        return view('edit',compact('user'));
        //return view('edit');
    }*/

  /*  public function index($id){
	
		
		$user = User::find($id);
		return view('edit', $user);
	}

	public function update($id, Request $req){
		$user = User::find($id);
		$user->name = $req->name;
		$user->email = $req->email;
		$user->password = $req->password;

		if($user->save()){
			return redirect()->route('profile');
		}else{
			return redirect()->route('edit', $id);
		}
	}*/


}
