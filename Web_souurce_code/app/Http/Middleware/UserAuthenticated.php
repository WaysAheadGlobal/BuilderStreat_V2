<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();

            // if user is not admin take him to his dashboard
            if ( $user->hasRole('super-admin') ) {
                // return redirect(route('admin_dashboard'));
            }

            // allow admin to proceed with request
            else if ( $user->hasRole('user') ) {
                return "User";
                // return $next($request);
            }
        }

        // return $next($request);
        abort(403);  // permission denied error
    }
}