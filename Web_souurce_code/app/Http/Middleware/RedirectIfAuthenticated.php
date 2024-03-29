<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next, ...$guards){
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                /** @var User $user */
                $user = Auth::guard($guard);

                // to admin dashboard
                if($user->hasRole('super-admin')) {
                    return redirect(route('admin-dashboard'));
                }

                // to user dashboard
                else if($user->hasRole('stockist')) {
                    // return redirect(route('home'));
                }

                // to user dashboard
                else if($user->hasRole('retailer')) {
                    // return redirect(route('home'));
                }

                // to user dashboard
                else if($user->hasRole('user')) {
                    return redirect('home');
                    // return redirect(route('home'));
                }
            }
        }

        return $next($request);
    }

}
