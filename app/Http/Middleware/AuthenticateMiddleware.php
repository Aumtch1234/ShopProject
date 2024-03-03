<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); // หากไม่ได้ล็อคอิน ให้ redirect ไปยังหน้า login
        }

        return $next($request);
    }
}
