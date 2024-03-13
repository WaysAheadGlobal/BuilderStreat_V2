<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    
        
    protected $table = 'notifications';
    
    protected $fillable = ['sender_id','receiver_id','message','is_read','status'];

    
    
}