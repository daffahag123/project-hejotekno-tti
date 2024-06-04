<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session('berhasil_login_user')) {
            return redirect('/loginUser')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }

        // Periksa apakah pengguna adalah customer
        if ($request->session()->has('customer')) {
            return $next($request);
        }

        // Jika bukan customer, arahkan ke halaman login user
        return redirect('/loginUser')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
    }
}
