<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantcontroller;
use App\Http\Controllers\administrationcontroller;

Route::get('/', function () {
    return view('matey');
});

Route::get('/', function () {
    return view('indexe');
});

Route::get('/loginEtudiante', [etudiantcontroller::class, 'index']);

Route::post('/loginEtudiante', [etudiantcontroller::class, 'authEtudiant']);

Route::post('/reclamatione', [etudiantcontroller::class, 'store']);

Route::get('/loginAdministratione', [administrationcontroller::class, 'index']);

Route::post('/loginAdministratione', [administrationcontroller::class, 'authAdministration']);

Route::get('/administratione', [administrationcontroller::class, 'authAdministration']);
