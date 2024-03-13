<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\StoreRetailerRequest;

use DB;
use App\Models\User;

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
        	$retailer = User::where('role', 'retailer')
        						->orderby('id', 'desc')
        						->get();
        	return view('admin.retailer.index', compact('retailer'));
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function create(){
    	try{
    		return view('admin.retailer.create');
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function save(StoreRetailerRequest $request){
    	try{
    		$email = $request->name."@lottery.com";
    		$data = array(
    			'name'       => $request->name,
    			'email'      => $email,
    			// 'password'   => Hash::make((rand(100000000,100))),
                'password'   => Hash::make($email),
    			'code'       => $request->code,
    			'address'    => $request->address,
    			'phone1'     => $request->phone1,
    			'role'       => 'retailer'  
    		);
    		$result = User::create($data);
    		if($result->id){
    			return redirect()->route('admin.retailer.list')->with('success', 'Retailer added successfully!');
    		}else{
    			return back()->with('error', 'Oops! Something went wrong!');
    		}
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function updateStatus($id, $status){
        try{
            $stockist = User::find($id);
            if($status == '1'){
                $stockist->status = '0';
            }else{
                $stockist->status = '1';
            }
            $stockist->save();
            return back()->with('success', 'Status updated succesfully!');
        }catch(\Exception $e){
            return $e->getMesasge();
        }
    }

    public function edit($id){
        try{
            $retailer = User::find($id);
            return view('admin.retailer.edit', compact('retailer'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function update(Request $request){
        try{
            $data = array(
                'name'       => $request->name,
                'code'       => $request->code,
                'address'    => $request->address,
                'phone1'     => $request->phone1,
            );
            // dd($data);
            $result = User::where('id', $request->id)->update($data);
            if($result){
                return redirect()->route('admin.retailer.list')->with('success', 'Retailer updated successfully!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }




}
