<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
        
    protected $LotteryNumbers = 'posts';
    
    protected $fillable = ['user_id','product_name', 'brand_name', 'modal_number', 'serial_number','quantity','unit', 'file', 'sources', 'condtion_of_material', 'discount', 'offer', 'pick_up_facility', 'hours_of_operations', 'availabilite_date', 'price', 'providing_transport', 'availability','negotiable','bid','status'];

    
    
}