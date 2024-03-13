<?php

namespace App\Http\Controllers\retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;

class ReatilerLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        try{
        	return view('retailer.login');
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function postLogin(Request $request){
    	try{
    		$input = $request->all();
    		   
	        $this->validate($request, [
	            'code' => 'required',
	            'password' => 'required',
	        ]);
	   		// dd($input);
	        if(auth()->attempt(array('code' => $input['code'], 'password' => $input['password'], 'role' => 'retailer'))){
	            if (auth()->user()->role == 'retailer') {
	                return redirect()->route('retailer.dashboard')->with('success', 'Retailer logged in');
	            }else{
	                return "User role not found";
	            }
	        }else{
	            return back()->with('error','Code And Password Are Wrong.');
	        }
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function logout(Request $request){
        try{
            auth()->logout();
            return redirect()->route('retaler.login');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



}
