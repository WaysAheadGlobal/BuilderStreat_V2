<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

use App\Models\User;
use App\Models\SellerDetail;

class DashboardController extends Controller
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
            // $totalRFQ       =
            $totalBuyers    = User::where('role', 'buyer')->count();
        	$totalSellers   = User::where('role', 'seller')->count();
            $approvedSeller = User::where('role', 'seller')
                                    ->where('approved', '1')
                                    ->count();
            $rejectedSeller = User::where('role', 'seller')
                                    ->where('approved', '0')
                                    ->count();
        	return view('admin.dashboard', compact('totalBuyers', 'totalSellers', 'approvedSeller', 'rejectedSeller'));
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function sellerRequest(){
        try{
            $sellers = User::where('role', 'seller')->get();
            return view('admin.seller-requests', compact('sellers'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function approveSeller(Request $request){
        try{
            $result = User::where('id', $request->id)->update(['approved' => $request->status]);
            if($result){
                return response()->json(['success' => true, 'message' => 'Seller approved successfully!']);
            }else{
                return response()->json(['success' => false, 'message' => 'Oops! Something went wrong!']);
            }
            return $request->all();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



}
