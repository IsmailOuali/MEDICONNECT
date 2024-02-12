<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;

use Symfony\Component\HttpFoundation\Response;



class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->isAdmin()) {
                return redirect()->route('dashboard');
            } elseif ($user->isDoctor()) {
                return redirect()->route('docDashboard');
            } elseif ($user->isPatient() && $request->route()->getName() !== 'register') {
                return redirect()->route('welcome');
            }
        }

        return $next($request);
    }
}
