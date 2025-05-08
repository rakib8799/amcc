<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where(['role' => 'admin', 'is_active' => true])->first();
        if($user && !Auth::guard('web')->check()) {
            return redirect()->route('admin.login')->with('error', 'You do not have permission to access this page');
        }

        return $next($request);
    }
}
