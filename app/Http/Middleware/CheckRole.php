<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //jika akun yang login sesuai dengan role
        //maka silahkan akses
        //jika tidak sesuai akan diarahkan ke home
        if (!Auth::user()) {
            return redirect('/')->success('Title', 'Session Anda Habis Anda Harus Logout');
        }

        $roles = array_slice(func_get_args(), 2);

        foreach ($roles as $role) {
            $user = Auth::user()->role;
            if ($user == $role) {
                return $next($request);
            }
        }

        return redirect('/profile')->alert()->success('Title', 'Anda Berhasil Login');
    }
}