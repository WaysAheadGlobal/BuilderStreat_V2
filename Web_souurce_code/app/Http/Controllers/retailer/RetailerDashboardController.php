<?php

namespace App\Http\Controllers\retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;

class RetailerDashboardController extends Controller
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
        	$data = auth()->user();
        	return view('retailer.index', compact('data'));
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
