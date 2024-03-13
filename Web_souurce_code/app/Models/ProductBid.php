<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBid extends Model
{
    
        
    protected $table = 'product_bids';
    
    protected $fillable = ['product_id','seller_id','buyer_id','bid_amount','status'];

    
    
}