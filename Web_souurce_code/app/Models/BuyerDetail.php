<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerDetail extends Model
{
    
        
    protected $table = 'buyer_details';
    
    protected $fillable = ['user_id','user_name', 'company_name', 'country', 'state', 'address', 'zipcode', 'image', 'broadcast', 'status'];

    public function getPictureAttribute($value){
        if($value){
            return asset('images/users'.$value);
        }else{
            return asset('images/users/no-image.png');
        }
    }

    
    
}