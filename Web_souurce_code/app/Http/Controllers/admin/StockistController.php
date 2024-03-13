<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\StoreStockistRequest;

use DB;
use App\Models\User;

class StockistController extends Controller
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
        	$stockist = User::where('role', 'stockist')
        						// ->where('status', '1')
        						->orderby('id', 'desc')
        						->get();
        	return view('admin.stockist.index', compact('stockist'));
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function create(){
    	try{
    		return view('admin.stockist.create');
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function save(StoreStockistRequest $request){
    	try{
    		$email = $request->username."@lottery.com";
    		$data = array(
    			'name'       => $request->name,
    			'email'      => $email,
    			'password'   => Hash::make($request->password),
    			'code'       => $request->code,
    			'login_name' => $request->username,
    			'address'    => $request->address,
    			'city'       => $request->city,
    			'phone1'     => $request->phone1,
    			'phone2'     => $request->phone2,
    			'role'       => 'stockist'  
    		);
    		$result = User::create($data);
    		if($result->id){
    			return redirect()->route('admin.stockist.list')->with('success', 'Stockist added succesfully!');
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
            $stockist = User::find($id);
            return view('admin.stockist.edit', compact('stockist'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function update(Request $request){
        try{
            $data = array(
                'name'       => $request->name,
                // 'email'      => $request->email,
                'code'       => $request->code,
                'login_name' => $request->username,
                'address'    => $request->address,
                'city'       => $request->city,
                'phone1'     => $request->phone1,
                'phone2'     => $request->phone2,
            );
            $result = User::where('id', $request->id)->update($data);
            if($result){
                return redirect()->route('admin.stockist.list')->with('success', 'Stockist updated succesfully!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }




}
