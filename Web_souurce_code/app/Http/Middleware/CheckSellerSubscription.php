<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckSellerSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        if( Auth::check() ){
            $user = Auth::user();
            // if user is not admin take him to his dashboard
            if ( $user->hasRole('seller') && Auth::user()->paid == 'paid' ) {
                return $next($request);
            }
        }else{
        	return redirect(route('seller.subcription'));
        }
        return redirect(route('seller.subcription'));
        abort(403);  // permission denied error
    }
}