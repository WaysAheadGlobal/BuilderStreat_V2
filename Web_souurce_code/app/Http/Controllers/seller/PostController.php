<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\CreatePostRequest;

use App\Models\User;
use App\Models\SellerDetail;
use App\Models\Post;

use DB;
use Auth;

class PostController extends Controller
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

    public function saveList(CreatePostRequest $request){
    	try{
            // dd($request->file('img'));
            $imagePath = public_path('images/posts');
            $images = [];
            $data = array(
                'user_id'               => auth()->user()->id,
                'product_name'          => $request->product_name,
                'brand_name'            => $request->brand_name,
                'modal_number'          => $request->modal_number,
                'serial_number'         => $request->serial_number,
                'quantity'              => $request->quantity,
                'unit'                  => $request->unit,
                'sources'               => $request->source,
                'condtion_of_material'  => $request->condition_of_material,
                'discount'              => $request->discount,
                'offer'                 => $request->offer,
                'pick_up_facility'      => $request->pickup_faculty,
                'hours_of_operations'   => $request->hours_of_operation,
                'availabilite_date'     => $request->availability,
                'price'                 => $request->price,
                'providing_transport'   => $request->transport,
                'availability'          => $request->price_availability,
                'negotiable'            => $request->negotiable,
                'bid'                   => $request->bid
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
            $result = Post::create($data);
            if($result->id){
                return back()->with('success', 'Post created successfully!');
            }else{
                return back()->with('error', 'Oops! Something went wrong!');
            }
    	}catch(\Exception $e){
    		return $e->getMessage();
    	}
    }



}
