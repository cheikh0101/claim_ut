<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\etudiantcontroller;
use App\Http\Controllers\administrationcontroller;

Route::get('/', function () {
    return view('index');
});

Route::get('/loginEtudiant', [etudiantcontroller::class, 'index']);

Route::post('/loginEtudiant', [etudiantcontroller::class, 'authEtudiant']);

Route::post('/reclamation', [etudiantcontroller::class, 'store']);

Route::get('/loginAdministration', [administrationcontroller::class, 'index']);

Route::post('/loginAdministration', [administrationcontroller::class, 'authAdministration']);

Route::get('/administration', [administrationcontroller::class, 'authAdministration']);
