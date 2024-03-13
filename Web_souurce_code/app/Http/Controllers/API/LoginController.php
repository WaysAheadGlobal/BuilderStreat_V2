<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\TokenRepository;
use Laravel\Passport\RefreshTokenRepository;

use DB;

class LoginController extends Controller
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

    public function login(Request $request){
    	try{
    		$input = $request->all();
    		   
	        $validate_data = [
	            'code' => 'required',
	            'password' => 'required',
	        ];

	   		$validator = Validator::make($input, $validate_data);
	        if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please see errors parameter for all errors.',
                    'errors' => $validator->errors()
                ]);
            }

	        if(auth()->attempt(array('code' => $input['code'], 'password' => $input['password'], 'role' => 'retailer'))){
	            if (auth()->user()->role == 'retailer') {
	        		$token = auth()->user()->createToken('passport_token')->accessToken;
	                return response()->json([
                        'success' => true,
                        'message' => 'Retailer login succesfully, Use token to authenticate.',
                        'token' => $token
                    ], 200);
	            }else{
	                return response()->json([
		                'success' => false,
		                'message' => 'User role not matched.'
		            ], 401);
	            }
	        }else{
	            return response()->json([
                    'success' => false,
                    'message' => 'User authentication failed.'
                ], 404);
	        }
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function logout(){
        $access_token = auth()->user()->token();

        // logout from only current device
        $tokenRepository = app(TokenRepository::class);
        $tokenRepository->revokeAccessToken($access_token->id);

        // use this method to logout from all devices
        // $refreshTokenRepository = app(RefreshTokenRepository::class);
        // $refreshTokenRepository->revokeRefreshTokensByAccessTokenId($$access_token->id);

        return response()->json([
            'success' => true,
            'message' => 'User logout successfully.'
        ], 200);
    }



}
