<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if($this->authorize($request->user(),$role)){
            return $next($request);
        }else{
            return App::abort(403, 'User is not authorized to access this page.');
        }
    }

    public function authorize($user, $role) : bool{
        $userType = $user->userType()->first()->description;
        return strtolower($userType) === $role;
    }
}
