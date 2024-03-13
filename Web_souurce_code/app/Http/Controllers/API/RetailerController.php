<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class RetailerController extends Controller
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
        	return response()->json(['success' => true, 'message' => 'This page is authencticated for retailer!'], 200);
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function randomNumbers(){
        try{
            $digits = '';
            $numbers = range(0,9);
            shuffle($numbers);
            for($i = 0; $i < 2; $i++){
                global $digits;
                $digits .= $numbers[$i];
            }
            return response()->json(['success' => true, 'message' => 'Number generated successfully!', 'data' => $digits], 200);
        }catch(\Exception $e){
            return $r->getMessage();
        }
    }




}
