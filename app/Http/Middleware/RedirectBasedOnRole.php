<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect()->route('dashbord');
        } elseif ($user->isDoctor()) {
            return redirect()->route('docDashboard');
        } elseif ($user->isPatient()) {
            return redirect()->route('welcome');
        }

        return $next($request);
    }
}
