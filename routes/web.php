<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\RegisterBasedOnRoleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\SpecialityController;
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
Route::get('/dashboard', [MedicamentController::class, 'dashboard'])->name('dashboard');


Route::get('/Specialities', [SpecialityController::class, 'index'])->name('Specialities.index');
Route::post('/Specialties', [SpecialityController::class, 'store'])->name('Specialities.store');
Route::get('/doc-dashboard', [SpecialityController::class, 'docDashboard'])->name('docDashboard');
Route::get('/dashboard', [SpecialityController::class, 'dashboard'])->name('dashboard');



require __DIR__.'/auth.php';
