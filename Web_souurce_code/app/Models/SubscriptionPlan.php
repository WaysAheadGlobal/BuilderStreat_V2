<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    
        
    protected $table = 'subscription_plans';
    
    protected $fillable = ['name','success_fee','price','plan_validity','valid_for','features','status'];

    
    
}