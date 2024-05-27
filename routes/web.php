<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/servicios/{servicio?}', [PageController::class, 'servicios'])
    ->where('servicio', '[a-zA-Z]+')->name('servicios');

Route::get('/proyectos/{proyecto?}', [PageController::class, 'proyectos'])
    ->where('proyecto', '[a-zA-Z]+')->name('proyectos');

Route::get('/clientes/{cliente?}', [PageController::class, 'clientes'])
    ->where('cliente', '[a-zA-Z]+')->name('clientes');

Route::get('/blog/{post?}', [PageController::class, 'blog'])
    ->where('post', '[0-9]+')->name('blog');

Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');


Route::post('/contacto', [PageController::class, 'contactoSubmit'])->name('contacto.submit');