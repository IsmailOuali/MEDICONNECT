<?php

namespace App\Http\Middleware;

use App\Models\Medicament;
use Illuminate\Database\Eloquent\Model;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            return redirect('login');
        }
    
        // Check if the user has one of the specified roles
        if (in_array(auth()->user()->role, $roles)) {
            // User has the required role, proceed
            return $next($request);
        }
    
        // Redirect the user based on their role
        $medicaments = Medicament::All();

        // Pass the 'medicaments' variable to the views
        $request->attributes->add(['medicaments' => $medicaments]);
    
        // Redirect the user based on their role
        switch (auth()->user()->role) {
            case 1: // Patient
                return redirect('/welcome');
                break;
            case 2: // Medecin
                return redirect('/doc-dashboard', ['medicaments ' => $medicaments]);
                break;
            case 3: // Admin
                return redirect('/dashboard', ['medicaments ' => $medicaments]);
                break;
            default:
                    // Default redirection if the role is not matched
                return redirect('/');
                break;
        }
    }
}
