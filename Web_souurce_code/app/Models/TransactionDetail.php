<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    
        
    protected $table = 'transaction_details';
    
    protected $fillable = [
    	'user_id',
    	'plan_id',
        'card_type',
        'card_number',
        'card_valid_month',
        'card_valid_year',
        'card_cvv',
        'card_holder_name',
    	'transaction_id',
    	'amount', 
    	'currency',
    	'description',
    	'payment_status', 
    	'paid', 
    	'name', 
    	'email', 
    	'phone', 
    	'start_date', 
    	'end_date', 
    	'status'
    ];

    
    
}