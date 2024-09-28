<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (Auth::check() && Auth::user()->role === User::ROLE_ADMIN) {
            return $next($request);
        }

        // Thay vì abort(403), chúng ta thêm thông báo vào session và redirect
        return redirect()->route('login')->with('error', 'Tài khoản của bạn không phải là admin.');
    }
}
