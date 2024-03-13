<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\SellerLoginRequest;
use App\Http\Requests\SellerRegisterRequest;

use App\Models\User;
use App\Models\SellerDetail;
use DB;
use Auth;

class SellerLoginController extends Controller
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
        	return view('seller.login');
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function sellerLogin(SellerLoginRequest $request){
    	try{
    		$input = $request->all();
            $user_given_otp = $request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'};
            $user = User::where('phone', $request->phone)
                            ->where('status', '1')
                            ->where('approved', '1')
                            ->first();
            if($user != null){
                $verifiedUser = User::where('phone', $request->phone)
                        ->where('otp', $user_given_otp)
                        ->where('role', $request->role)
                        ->first();
                if($verifiedUser != null){
                    Auth::login($verifiedUser);
                    // return redirect()->route('seller.dashboard')->with('success', 'Retailer logged in');
                    if(auth()->user()->paid == 'paid'){
                        return redirect()->route('seller.dashboard')->with('success', 'Seller logged in');
                    }else{
                        return redirect()->route('seller.subcription')->with('success', 'Retailer logged in');
                    }
                }else{
                    return back()->with('error','Oops! Mobile number OR OTP is not matched!');
                }
            }else{
                return back()->with('error','Oops! Invalid mobile number OR inactive account!');
            }
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function register(){
        try{
            return view('seller.registration');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function sellerRegister(SellerRegisterRequest $request){
        try{
            $data = [];
            $details = [];
            $user = new User();
            if($request->file('documents')){
                $file= $request->file('documents');
                $filename= date('YmdHi').'.'.$file->getClientOriginalExtension();
                $file-> move(public_path('images/seller'), $filename);
                $details['image']= $filename; 
            }
            $data = array(
                'name'   => $request->name,
                'email'  => $request->email,
                'phone'  => $request->phone,
                'role'   => $request->role,
                'otp'    => '1234'
            );
            $result = $user->create($data);
            if($result->id){
                $details['user_id'] = $result->id;
                $details['company'] = $request->company;
                $res = SellerDetail::create($details);
                if($res->id){
                    return back()->with('success', 'We have Successfully submitted your request for registration');
                }else{
                    return back()->with('error', 'Oops! Something went wrong!');
                }
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function dashboard(){
        try{
            dd(auth()->user()->name);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function logout(Request $request){
        try{
            auth()->logout();
            return redirect()->route('seller.register');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



}
