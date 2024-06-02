<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('berhasil_login')) {
            return redirect('/login');
        }

        // Periksa apakah pengguna adalah admin
        if ($request->session()->has('admin')) {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman login admin
        return redirect('/login')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
    }
}
