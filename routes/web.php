<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterBasedOnRoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicamentController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::view('/doc-dashboard', 'docDashboard')->name('docDashboard');

Route::view('/welcome', 'welcome')->name('welcome');

Route::view('/profile', 'profile.edit')->name('profile.edit');

Route::patch('/profile', function () {
    return redirect()->route('profile.edit');
})->name('profile.update');

Route::delete('/profile', function () {
    return redirect()->route('dashboard');
})->name('profile.destroy');

Route::view('/register', 'register')->name('register');

Route::post('/register', function () {
    return redirect()->route('dashboard');
});

Route::view('/login', 'login')->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
});
Route::get('/medicaments', [MedicamentController::class, 'index'])->name('medicaments.index');
Route::post('/medicaments', [MedicamentController::class, 'store'])->name('medicaments.store');
Route::get('/doc-dashboard', [MedicamentController::class, 'docDashboard'])->name('docDashboard');

Route::middleware(['role:1'])->group(function () {
    // Patient routes
    Route::get('/welcome', function () {
        return view('welcome');
    });
});

Route::middleware(['role:2'])->group(function () {
    // Medecin routes
    Route::get('/doc-dashboard', function () {
        return view('docDashboard');
    });
});

Route::middleware(['role:3'])->group(function () {
    // Admin routes
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});




require __DIR__.'/auth.php';
