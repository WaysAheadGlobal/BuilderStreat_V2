<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BuyerLoginRequest;
use App\Http\Requests\BuyerRegistrationRequest;

use App\Models\User;
use DB;
use Auth;



class BuyerLoginController extends Controller
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
        	return view('buyer.register');
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }
     public function buyerRegistration(BuyerRegistrationRequest $request){
        try{

                $user = new User();

                $user->otp   = '1234';
                $user->name  = $request->name;
                $user->email = $request->email;
                $user->phone = $request->phone;
                $user->role  = $request->buyer;

                $result = $user->save();
                if($result){
                    return back()->with('success', 'Buyer Registration successfully');
                }else{
                    return back()->with('error', 'Oops! Something went wrong!');
                }

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
   public function buyerLogin(Request $request){
        try{
            $input = $request->all();
           // dd($input);
            $user_given_otp = $request->{'otp1'}.$request->{'otp2'}.$request->{'otp3'}.$request->{'otp4'};
            $user = User::where('phone', $request->phone)->first();
            if($user != null){
                $verifiedUser = User::where('phone', $request->phone)
                        ->where('otp', $user_given_otp)
                        ->where('role', $request->buyer)
                        ->first();
                if($verifiedUser != null){
                    Auth::login($verifiedUser);
                    if(auth()->user()->paid == 'paid'){
                        return redirect()->route('buyer.dashboard')->with('success', 'Buyer logged in');
                    }else{
                        return redirect()->route('buyer.subscription')->with('success', 'Buyer logged in');
                    }
                    // return redirect()->route('buyer.register')->with('success', 'Buyer logged in');
                }else{
                    return back()->with('error','Oops! Mobile number OR OTP is not matched!');
                }
            }else{
                return back()->with('error','Oops! No user exist with this number!');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


    public function register(){
        try{
            return view('buyer.registration');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function logout(Request $request){
        try{
            auth()->logout();
            return redirect()->route('buyer.register');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



}
