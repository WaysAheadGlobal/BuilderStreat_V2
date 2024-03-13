<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
        
    protected $table = 'messages';
    
    protected $fillable = ['id','sender_id','receiver_id','message','file','status'];

    
    
}