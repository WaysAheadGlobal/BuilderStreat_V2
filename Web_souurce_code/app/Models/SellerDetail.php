<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerDetail extends Model
{
    
        
    protected $LotteryNumbers = 'seller_details';
    
    protected $fillable = ['user_id', 'company', 'image', 'status'];

    
    
}