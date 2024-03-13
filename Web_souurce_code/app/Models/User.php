<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'otp',
        'approved',
        'role',
        'status', 
        'member_ship_id',
        'paid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
    * @param string $role
    * @return bool
    */
    public function hasRole(string $role): bool{
        return $this->getAttribute('role') === $role;
    }

    public function sellerDetails(){
        return $this->belongsTo(SellerDetail::class, 'id', 'user_id');
    } 

    public static function getSellerCompanyName(){
        $result = self::select('users.id as userId', 'seller_details.company as companyName')
                        ->join('seller_details', 'seller_details.user_id', '=', 'users.id')
                        ->where('users.id', auth()->user()->id)
                        ->first();
        return $result;
    }  




}
