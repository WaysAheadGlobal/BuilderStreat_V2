<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RFQ extends Model
{
    
        
    protected $table = 'rfqs';
    
    protected $fillable = ['user_id','product', 'condition_of_materials', 'quantity', 'shipping_reference', 'pickup_faculty', 'additional_details', 'status', 'bid_status'];

    public function getUser(){
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
    
}