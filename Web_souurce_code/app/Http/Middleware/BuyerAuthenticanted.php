<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerAuthenticanted
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
            if ( $user->hasRole('buyer') ) {
            	return $next($request);
                // return redirect()->route('retailer.dashboard');
            }
            // return redirect()->route('retailer.dashboard'); 
            // return $next($request);
        }
        return redirect()->route('buyer.register');
        abort(403);  // permission denied error
    }
}