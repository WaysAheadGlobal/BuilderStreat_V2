<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\SellerLoginRequest;
use App\Http\Requests\SellerRegisterRequest;

use App\Models\RFQ;
use App\Models\User;
use App\Models\Message;
use App\Models\SellerDetail;
use App\Models\Notification;
use App\Models\SubscriptionPlan;
use App\Models\BuyerDetail;
use App\Models\Post;
use App\Models\TransactionDetail;
use DB;
use Auth;

class SellerDashboardController extends Controller
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
            $posts = Post::where('user_id', auth()->user()->id)->get();
        	return view('seller.dashboard', compact('posts'));
        }catch(\Exception $e){
        	return $e->getMessage();
        }
    }

    public function createPost(){
        try{
            return view('seller.create-post');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function createMessage(){
        try{

            $senderDetails = Message::where('receiver_id', auth()->user()->id)->orderby('id', 'desc')->first();
            $senderId = $senderDetails->sender_id;
            $messages = Message::select('messages.*', 'users.id as senderId', 'users.name as userName')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->where('messages.sender_id', $senderId)
                                ->orWhere('messages.receiver_id', $senderId)
                                ->where('messages.sender_id', auth()->user()->id)
                                ->orderby('id', 'asc')
                                ->get();
            // $messages2 = Message::select('messages.sender_id', 'users.id as senderId', 'users.name as userName')->join('users', 'messages.sender_id', '=', 'users.id')
                                // ->where('messages.receiver_id', auth()->user()->id)
                                // ->groupBy('messages.sender_id')
                                // ->first();

            $senders = Message::select('messages.sender_id', 'users.id as senderId', 'users.name as userName')->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->groupBy('messages.sender_id')
                                ->get();
                                // print_r($messages2);
                                // die;
            return view('seller.create-message', compact('senders', 'messages'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function getProfile(){
        try{
            $sellerDetails = User::with('sellerDetails')
                                ->where('id', auth()->user()->id)
                                ->where('status', '1')
                                ->first();
            return view('seller.get-profile', compact('sellerDetails'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function editProfile(){
        try{
            $sellerDetails = User::with('sellerDetails')
                                ->where('id', auth()->user()->id)
                                ->where('status', '1')
                                ->first();
            return view('seller.edit-profile', compact('sellerDetails'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function allRfq(){
        try{
            $rfqs = RFQ::with('getUser')->orderby('id', 'desc')->paginate(10);
            return view('seller.all-rfq', compact('rfqs'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function rfqDetails(){
        try{
            return view('seller.rfq-details');
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function sellerPayment(){
        try{
            $result1 = User::where('id', auth()->user()->id)->where('paid','paid')->first();
            $result2 = SellerDetail::where('user_id', $result1->id)->first();
            // dd($result2);
            $results=DB::table('transaction_details')->select('transaction_details.user_id','transaction_details.card_type','transaction_details.plan_id','subscription_plans.id','subscription_plans.plan_validity','subscription_plans.price')->join('subscription_plans', 'transaction_details.plan_id', '=', 'subscription_plans.id')->where('transaction_details.user_id',$result1->id)->get();
            // dd($results);
            return view('seller.payment-history',compact('results','result2'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function subscriptionHistory(){
        try{
            $result1 = User::where('id', auth()->user()->id)->where('paid','paid')->first();
            // dd($result);
            $results=DB::table('transaction_details')->select('transaction_details.user_id','transaction_details.plan_id','subscription_plans.id','subscription_plans.plan_validity','subscription_plans.price')->join('subscription_plans', 'transaction_details.plan_id', '=', 'subscription_plans.id')->where('transaction_details.user_id',$result1->id)->get();
            // dd($results);
            return view('seller.suscription-history',compact('results'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function notification(){
        try{
            $notification = Notification::where('receiver_id', auth()->user()->id)
                            ->get();
            return view('seller.notification', compact('notification'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function subcriptionPlan(){
        try{
            $plans = SubscriptionPlan::where('status', '1')
                                        ->where('valid_for', '!=', 'buyer')
                                        ->get();
            return view('seller.subcription-plan', compact('plans'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function sellerPayments($id){
        try{

            return view('seller.seller-payment', compact('id'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function updateProfile(Request $request){
        try{
            $data = array(
                'name'  => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            );
            $details = array(
                'company' => $request->company
            );
            $user = User::where('id', auth()->user()->id)->update($data);
            if($user){
                $result = SellerDetail::where('id', $request->dId)->where('user_id', auth()->user()->id)->update($details);
            }
            if($result){
                return back()->with('success', 'Seller profile updated successfully!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function approveRFQ(Request $request){
        try{
            $data = User::getSellerCompanyName();
            $companyName = $data->companyName;
            $result = RFQ::where('id', $request->id)->update(['bid_status' => $request->status]);
            if($result){
                $res = Notification::create([
                    'message'     => "You have recieved reply of your RFQ from $companyName.",
                    'sender_id'   => auth()->user()->id,
                    'receiver_id' => $request->userId
                ]);
                if($res->id){
                    return response()->json(['success' => true, 'message' => 'Seller approved successfully!']);
                }else{
                   return response()->json(['success' => false, 'message' => 'sending notification failed']);
                }
            }else{
                return response()->json(['success' => false, 'message' => 'Oops! Something went wrong!']);
            }
            return $request->all();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function chat($id){
        try{
            $messages = Message::select('messages.*', 'users.id as senderId', 'users.name as userName')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->where('messages.sender_id', base64_decode($id))
                                ->orWhere('messages.receiver_id', base64_decode($id))
                                ->where('messages.sender_id', auth()->user()->id)
                                ->orderby('id', 'asc')
                                ->get();

            $senders = Message::select('messages.sender_id', 'users.id as senderId', 'users.name as userName')->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->groupBy('messages.sender_id')
                                ->get();
            $messages2 = User::select('users.id','users.name as userName')
                                ->where('users.id',base64_decode($id))
                                ->first();


            $senderId = base64_decode($id);
            $smstry = array(
                    'is_read'   => '1',
                );
            $smsupdate = Message::where('receiver_id', auth()->user()->id)->where('sender_id',base64_decode($id))->update($smstry);
            return view('seller.create-message', compact('senders', 'messages', 'senderId','messages2'));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function sendChatMessage(Request $request){
        try{
            $imagePath = public_path('images/posts');
            $images = [];
            $data = array(
                'sender_id'   => auth()->user()->id,
                'receiver_id' => $request->senderId,
                'message'     => $request->message,
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
            if($result->id){
                return response()->json(['success' => true, 'message' => 'Chat saved successfully', 'data' => $result->id]);
            }else{
                return response()->json(['success' => false, 'message' => 'Oops! Something went wrong!', 'data' => []]);
            }
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

            // dd($data );
            $result = TransactionDetail::create($data);
            if($result->id){
                $payment  = User::where('id', auth()->user()->id)->update(['member_ship_id' => $result->id, 'paid' => 'paid']);
                if($payment){
                    return redirect()->route('seller.dashboard')->with('success', 'Your paument has been success');
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


    public function rcreateMessage(){
        try{
            $result2 = Message::select('messages.sender_id','users.id as userId', 'users.name')
                                ->join('users', 'messages.sender_id', '=', 'users.id')
                                ->where('messages.receiver_id', auth()->user()->id)
                                ->groupBy('messages.sender_id')
                                ->get();
            return view('seller.message',compact('result2'));


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
                                return view('seller.chat',compact('result2','messages','name'));

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



}

