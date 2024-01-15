<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
    public function handle($request, Closure $next)
    {
        

        // Pengguna belum login, arahkan ke halaman login
        return redirect('/login');
    }
}
