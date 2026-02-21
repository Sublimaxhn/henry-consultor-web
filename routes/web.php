<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Models\Image;

/*
|--------------------------------------------------------------------------
| Página Principal
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
});


/*
|--------------------------------------------------------------------------
| Páginas Públicas
|--------------------------------------------------------------------------
*/

Route::get('/nosotros', fn() => view('pages.about'));
Route::get('/servicios', fn() => view('pages.services'));
Route::get('/equipo', fn() => view('pages.team'));
Route::get('/noticias', fn() => view('pages.news'));
Route::get('/contacto', fn() => view('pages.contact'));


/*
|--------------------------------------------------------------------------
| Panel Administrativo
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', function () {

        $heroImage = Image::where('type', 'hero')
            ->latest()
            ->first();

        return view('admin.panel', compact('heroImage'));

    })->name('admin.panel');


    Route::post('/admin/upload-hero', [ImageController::class, 'store'])
        ->name('hero.store');
});


/*
|--------------------------------------------------------------------------
| Perfil de Usuario
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Bloquear Registro Público
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    abort(404);
});


require __DIR__.'/auth.php';
