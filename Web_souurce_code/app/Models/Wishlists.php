<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    
        
    protected $table = 'wishlists';
    
    protected $fillable = ['buyer_id','post_id','status'];

    
    
}