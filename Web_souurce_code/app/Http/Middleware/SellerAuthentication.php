<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAuthentication
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
            /** @var User $user */
            $user = Auth::user();
            // if user is not admin take him to his dashboard
            if ( $user->hasRole('seller') ) {
                return $next($request);
            }
        }else{
        	return redirect(route('seller.register'));
        }
        return redirect(route('seller.register'));
        abort(403);  // permission denied error
    }
}