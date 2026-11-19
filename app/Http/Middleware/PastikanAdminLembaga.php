<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PastikanAdminLembaga
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $pengguna = $request->user();

        if ($pengguna->peran !== 'Admin Lembaga' || $pengguna->id_lembaga === null) {
            abort(403, 'Halaman ini khusus admin');
        }

        return $next($request);
    }
}
