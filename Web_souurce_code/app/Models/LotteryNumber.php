<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryNumber extends Model
{
    
        
    protected $LotteryNumbers = 'lottery_numbers';
    
    protected $fillable = ['numbers', 'time', 'date', 'status'];

    
    
}