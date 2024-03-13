<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\BuyerLoginRequest;

use App\Models\User;
use App\Models\BuyerDetail;
use App\Models\RFQ;
use App\Models\Post;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Wishlists;
use App\Models\SubscriptionPlan;
use App\Models\TransactionDetail;
use App\Models\ProductBid;
use DB;
use Auth;



class BuyerDashboardController extends Controller
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
            $details = DB::table('posts')->where('status','1')->get();

        	return view('buyer.dashboard',compact('details'));

        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }
     public function createMessage(){
        try{
            $result2 = Message::select('messages.sender_id','users.id as userId', 'users.name')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->groupBy('messages.sender_id')
                                ->get();
            return view('buyer.message',compact('result2'));


        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function buyerSellerChat($id){
        try{
            $result2 = Message::select('messages.sender_id', 'users.id', 'users.name')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->groupBy('messages.sender_id')
                                ->get();

             // $senderDetails = Message::where('receiver_id', auth()->user()->id)->first();
            $messages = Message::select('messages.*','users.id as senderId', 'users.name as userName')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->where('messages.sender_id', $id)
                                ->orWhere('messages.receiver_id', $id)
                                ->where('messages.sender_id', auth()->user()->id)
                                ->orderby('id', 'asc')
                                ->get();
            $name = User::where('id', $id)->where('status', '1')->first();
            $datas = array(
                    'is_read'   => '1',
                );
            $smsupdate = Message::where('receiver_id', auth()->user()->id)->where('sender_id',$id)->update($datas);
                                return view('buyer.chat',compact('result2','messages','name'));

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function buyerchatsms(Request $request){
        try{
            $imagePath = public_path('images/posts');
            $images = [];
            $data = array(
            'receiver_id' =>$request->sender_id,
            'message'    => $request->sms,
            'sender_id'=>auth()->user()->id,
            );
            if($request->hasFile('img')){
                $files = $request->file('img');
                foreach($files as $file){
                    $name = time().rand().'.'.$file->getClientOriginalExtension();
                    $file->move($imagePath, $name);
                    $images[]=$name;
                }
            }
            $data['file'] = implode("|",$images);
            $result = Message::create($data);
        //     return $request->all();

        //     $result=Message::insert([
        //     'receiver_id' =>$request->sender_id,
        //     'message'    => $request->messages,
        //     'sender_id'=>auth()->user()->id,
        // ]);

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function getProfile(){
    	try{
            $result = User::where('id', auth()->user()->id)->where('status', '1')->first();
            $detail = BuyerDetail::where('user_id', auth()->user()->id)->first();

            return view('buyer.profile', compact('result','detail'));
            // return view('buyer.profile');

    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function editProfile(){
    	try{
            $result = User::where('id', auth()->user()->id)->where('status', '1')->first();
            $detail = BuyerDetail::where('user_id', auth()->user()->id)->first();
            return view('buyer.edit-profile', compact('result','detail'));
            // return view('buyer.edit-profile');

    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function editProfileSave(Request $request){
        try{

            $data = array(
                'name'   => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,

            );
            $result = User::where('id', auth()->user()->id)->update($data);
            $detail = array(
                'user_id'=> auth()->user()->id,
                'user_name'   => $request->name,
                'company_name' => $request->company,
                'country' => $request->country,
                'state'=>$request->state,
                'address' => $request->address,
                'zipcode'    => $request->zipcode,
            );
           // $detail->save();
            $details= BuyerDetail::insert($detail);
            if($details){
                $detail = array(
                   // 'user_id'=> auth()->user()->id,
                    'user_name'   => $request->name,
                    'company_name' => $request->company,
                    'country' => $request->country,
                    'state'=>$request->state,
                    'address' => $request->address,
                    'zipcode'    => $request->zipcode,
                );
           $res = BuyerDetail::where('user_id', auth()->user()->id)->update($detail);

                //return back()->with('success', 'Buyer profile updated successfully!');
            }
            if($result){
                return back()->with('success', 'Buyer profile updated successfully!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }


           /// $deatils = BuyerDetail::where('user_id', auth()->user()->id)->update($detail);

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


    public function wishList(){
    	try{
            // $deatils = Wishlists::where('buyer_id', auth()->user()->id)->first();

            $deatils2 = DB::table('posts')->select('posts.id','posts.file','posts.product_name','posts.serial_number','users.name','posts.price')->join('wishlists', 'posts.id', '=', 'wishlists.post_id')->join('users', 'users.id', '=', 'posts.user_id')->where('wishlists.buyer_id', auth()->user()->id)->get();
            // print_r($deatils2);
            // die;
          return view('buyer.wishlist',compact('deatils2'));
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }
    public function byerAddWishlist($id){
        try{
            $deatil = Wishlists::where('buyer_id', auth()->user()->id)->where('post_id',$id)->get();
            $deatils=count($deatil);
            if(count($deatil) > 0 ){
                return back()->with('success', 'This Product is already in your wishlist');
            }
            else{
            $result=Wishlists::insert([
            'buyer_id' => auth()->user()->id,
            'post_id'    => $id,]);
            return back()->with('success', 'Your Product Is Added In Wishlist');
        }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function byerRemoveWishlist($id){
        try{
            $detail=DB::table('wishlists')->where('post_id', $id)->where('buyer_id', auth()->user()->id)->delete();
            return back()->with('success', 'Your Wishlist Product Has been removed');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }



    public function subscriptionHistory(){
    	try{
            $result1 = User::where('id', auth()->user()->id)->where('paid','paid')->first();
            // dd($result);
            $results=DB::table('transaction_details')->select('transaction_details.user_id','transaction_details.plan_id','subscription_plans.id','subscription_plans.plan_validity','subscription_plans.price')->join('subscription_plans', 'transaction_details.plan_id', '=', 'subscription_plans.id')->where('transaction_details.user_id',$result1->id)->get();
            // dd($result);
            return view('buyer.subscription-history',compact('results'));
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }

    public function paymentHistory(){
    	try{
            $result1 = User::where('id', auth()->user()->id)->where('paid','paid')->first();
            $result2 = BuyerDetail::where('user_id', $result1->id)->first();
            // dd($result2);
            $results=DB::table('transaction_details')->select('transaction_details.user_id','transaction_details.card_type','transaction_details.plan_id','subscription_plans.id','subscription_plans.plan_validity','subscription_plans.price')->join('subscription_plans', 'transaction_details.plan_id', '=', 'subscription_plans.id')->where('transaction_details.user_id',$result1->id)->get();
            // dd($results);
            return view('buyer.payment-history',compact('results','result2'));

    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }
    public function allRfq(){
        try{
            // $rfqs = RFQ::where('user_id', auth()->user()->id)->join('', 'users.id', '=', 'posts.user_id')->orderby('id', 'desc')->paginate(10);
            $rfqs=DB::table('rfqs')->select('rfqs.*','seller_details.company as com')->join('posts', 'rfqs.product', '=', 'posts.product_name')->join('users', 'posts.user_id', '=', 'users.id')->join('seller_details', 'users.id', '=', 'seller_details.user_id')->where('rfqs.user_id', auth()->user()->id)->get();

          return view('buyer.rfq',compact('rfqs'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function orderhistory(){
        try{
          return view('buyer.order-history');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
     public function notification(){
        try{
            $notification = Notification::where('receiver_id', auth()->user()->id)->get();
          return view('buyer.notification',compact('notification'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function subscriptionSelection(){
        try{
            $suscription = SubscriptionPlan::where('status', '1')
                                        ->where('valid_for', '!=', 'seller')
                                        ->get();

          return view('buyer.subscription-selection',compact('suscription'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function buyerPayment($id){
        try{

          return view('buyer.payment', compact('id'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function payments(Request $request){
        try{
            $data = array(
                'user_id' => auth()->user()->id,
                'card_type' =>$request->card_type,
                'card_number' =>$request->card_number,
                'card_valid_month' =>$request->card_valid_month,
                'card_valid_year' =>$request->card_valid_year,
                'card_cvv' =>$request->card_cvv,
                'card_holder_name' =>$request->card_holder_name,

                'plan_id' =>$request->pId
            );
            // dd($data);
            $result = TransactionDetail::create($data);
            if($result->id){
                $payment  = User::where('id', auth()->user()->id)->update(['member_ship_id' => $result->id, 'paid' => 'paid']);
                if($payment){
                    return redirect()->route('buyer.dashboard')->with('success', 'Your payment has been success');
                }else{
                    return back()->success('error', 'Something went wrong!');
                }
            }else{
                return back()->success('error', 'Payment failed!');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function buyerproductdetails($id){
        try{
            $detail=Post::find($id);


            $result = User::where('id',$detail->user_id)->first();
          return view('buyer.product-details',compact('detail','result'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function createRfq(){
        try{
            $ids = [];
            $result = User::where('id', auth()->user()->id)->where('status', '1')->first();
            $result2 = BuyerDetail::where('user_id', auth()->user()->id)->first();
            $result4 = RFQ::select('rfqs.user_id','rfqs.product','posts.product_name','posts.id as pID')
                                ->join('posts', 'rfqs.product', '=', 'posts.product_name')
                                ->where('rfqs.user_id', auth()->user()->id)
                                ->get();
            foreach($result4 as $rIds){
                $ids[] = $rIds['pID'];
            }

            $result3 = Post::whereNotIn('id',$ids)->get();
             // dd($result3);
            return view('buyer.create-rfq', compact('result','result2','result3'));
          // return view('buyer.create-rfq');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function rfqDetail($id){
        try{
            $rfq = RFQ::where('id',$id)->first();

            $user = User::select('users.*')
                                ->where('users.id',$rfq->user_id)
                                ->first();
         $detail = BuyerDetail::where('user_id', $rfq->user_id)->first();
         $post = Post::where('product_name', $rfq->product)->first();

            // print_r($post);

            // die;
            return view('seller.rfq-details',compact('rfq','user','detail','post'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function buyersubcriptionPlan(){

        try{
            return view('buyer.subscription-plan');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function buyershipping(Request $request){
        try{
            $deatil = BuyerDetail::where('user_id', auth()->user()->id)->get();
            $deatils=count($deatil);

            if(count($deatil) > 0 ){
                $data = array(
                    'user_name'    => $request->user_name,
                    'company_name' => $request->company,
                    'country' => $request->country,
                    'state'=>$request->state,
                    'address' => $request->address,
                    'zipcode'    => $request->zipcode,
                );
                $result = BuyerDetail::where('user_id', auth()->user()->id)->update($data);
                // return $result;

                if($result->id){
                // return back()->with('success', 'buyer profile updated successfully!');
                return response()->json(['success' => true, 'message' => 'success']);
            }else{
                // return back()->with('error', 'Oops! Something went wrong!');
                return response()->json(['false' => true, 'message' => 'failed']);
            }

            }else{
            $result=BuyerDetail::insert([
            'user_id' => auth()->user()->id,
            'user_name'    => $request->user_name,
            'company_name' => $request->company,
            'country' => $request->country,
            'state'=>$request->state,
            'address' => $request->address,
            'zipcode'    => $request->zipcode,]);

            // $result = BuyerDetail::($data);
            // $result = $data->save();
            if($result->id){
                // return back()->with('success', 'buyer profile updated successfully!');
                return response()->json(['success' => true, 'message' => 'success']);
            }else{
                // return back()->with('error', 'Oops! Something went wrong!');
                return response()->json(['false' => true, 'message' => 'failed']);
            }
        }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function buyeCreateRfq(Request $request){
        try{
            $name = $request->name;
            $com = $request->com;
            $quantity = $request->quantity;
            $length = (count($name));
            $result3 = Post::where('product_name', $name)->first();
            $result2 = BuyerDetail::where('user_id', auth()->user()->id)->first();


            for ($i=0; $i < $length; $i++) {
                $result=RFQ::insert([
                'user_id' => auth()->user()->id,
               'product' => $name[$i],
               'condition_of_materials' => $com[$i],
               'quantity'=>$quantity[$i],
               'shipping_reference' => $request->shipping_preference,
               'pickup_faculty'    => $request->pick_up_facility,
               'additional_details'    => $request->additional_detail,
               'broadcast'    => $request->broadcast,
           ]);
                $notification=Notification::insert([
            'sender_id' => auth()->user()->id,
            'receiver_id'    => $result3->user_id,
            'message' => "You have received a RFQ from ".$result2->company_name." for ".$name[$i] ,]);

            }


            return back()->with('success', 'RFQ added');

            // $result = BuyerDetail::where('user_id', auth()->user()->id)->update($data);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function getVendor(Request $request){
        try{
            $data= $request->all();
            $query = $data['query'];
            $output = DB::table('users')->where('name', 'LIKE', '%'.$query.'%')->where('role', 'seller')->get();
            return response()->json(['result'   => $output]);
            }catch(\Exception $e){
                return $e->getMessage();
            }
    }
    public function buyerProfileImage(Request $request){
        try{

            $path = 'images/users';
           $file = $request->file('admin_image');
           $new_name = 'UIMG_'.date('Ymd').uniqid().'.jpg';

           //Upload new image
           $upload = $file->move(public_path($path), $new_name);

           if( !$upload ){
               return response()->json(['status'=>0,'msg'=>'Something went wrong, upload new picture failed.']);
           }else{
               //Get Old picture
               // $oldPicture = BuyerDetail::find(Auth::user()->id)->getAttributes()['image'];

               // if( $oldPicture != '' ){
               //     if( \File::exists(public_path($path.$oldPicture))){
               //         \File::delete(public_path($path.$oldPicture));
               //     }
               // }

               //Update DB
               $update = $result = BuyerDetail::where('user_id', auth()->user()->id)->update(['image'=>$new_name]);



               if( !$upload ){
                   return response()->json(['status'=>0,'msg'=>'Something went wrong, updating picture in db failed.']);
               }else{
                   return response()->json(['status'=>1,'msg'=>'Your profile picture has been updated successfully']);
               }
           }
            }
            catch(\Exception $e){
                return $e->getMessage();
            }
    }
    public function buyerProductSearch(Request $request){
        try{
            $name = $request->name;
            $vendor = $request->vendor;
            $vendor_name = User::where('name', 'LIKE', '%'.$vendor.'%')->where('status', '1')->first();
           // print_r($result);
           // die;

            if($name = $request->name){
                $result = Post::where('product_name', 'LIKE', '%'.$name.'%')->get();

            }elseif($vendor = $request->vendor){
                $result = Post::where('user_id',$vendor_name->id)->get();
            }
            elseif($name = $request->name && $vendor = $request->vendor ){
             $result = Post::where('product_name', 'LIKE', '%'.$name.'%')->where('user_id',$vendor_name->id)->get();
            }else{

            }
            // dd($result);
            // return response()->json(['result'   => $output]);
            return view('buyer.search',compact('result'));

            }catch(\Exception $e){
                return $e->getMessage();
            }
    }
    public function productsAllGet(){
        try{

            $result = Post::where('status', '1')->get();
            // dd($result);
            return response()->json(['result'   => $result]);
            return view('buyer.search',compact('result'));

            }catch(\Exception $e){
                return $e->getMessage();
            }
    }
    public function bidPrice(Request $request){
        try{
            // $inputsall= $request->all();
            // dd($data);

            $deatil = ProductBid::where('buyer_id', auth()->user()->id)->where('product_id',$request->product_id )->get();
            $deatils=count($deatil);
            // dd($deatils);
            if(count($deatil) > 0 ){
                $data = array(
                    'bid_amount'    => $request->bid_price,
                );
                $result = ProductBid::where('buyer_id', auth()->user()->id)->update($data);
                return back()->with('success', 'You have already added your Bid Price and your bid price is updated .');
            }
            else{
            $result=ProductBid::insert([
            'buyer_id' => auth()->user()->id,
            'product_id'    => $request->product_id,
            'seller_id' => $request->seller_id,
            'bid_amount' => $request->bid_price,]);
             $notification=Notification::insert([
            'sender_id' => auth()->user()->id,
            'receiver_id'    => $result3->user_id,
            'message' => "You have received a RFQ from ".$result2->company_name,]);

            return back()->with('success', 'Bid Price added');
        }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }


}
