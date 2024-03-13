<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\LotteryNumber;

use DB;

class LotteryNumberController extends Controller
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
        	
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function storeNumbers(Request $request){
    	try{
            $digits = '';
            $numbers = range(0,9);
            shuffle($numbers);
            for($i = 0; $i < 2; $i++){
                global $digits;
                $digits .= $numbers[$i];
            }

    		$data = array(
    			'numbers' => $digits,
    			'time'    => date('H:i'),
    			'date'    => date('Y-m-d')
    		);
    		$result = LotteryNumber::create($data);
    		if($result->id){
    			return response()->json(['success' => true, 'data' => $result->id]);
    		}else{
    			return response()->json(['success' => false, 'data' => []]);
    		}
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function getLotteryNumbers(){
        try{
            $currentDate = date('Y-m-d');
            $number  = [];
            $numbers = LotteryNumber::where('date', $currentDate)->get();
            foreach ($numbers as $key => $value) {
                $numbers[$key]['time'] = ltrim(date('h:i', strtotime($value['time'])), "0");
            }
            return response()->json(['success' => true, 'data' => $numbers]);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



}
