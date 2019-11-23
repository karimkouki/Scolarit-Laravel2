<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::resource('Admin','AdminController');
route::resource('Etudiant','EtudiantController');
route::resource('Ensignant','EnsignantController');
route::resource('Examen','ExamenController');
route::resource('Matiere','MatiereController');
route::resource('Tache','TacheController');

