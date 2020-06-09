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


Auth::routes();
Route::middleware('auth')->group(function(){


    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');       

    // Utilisateurs

        Route::get('/utilisateurs','UtilisateurController@index')->name('utilisateur.index');
        Route::get('/utilisateur/create','UtilisateurController@create')->name('utilisateur.create');
        Route::post('/utilisateur/add','UtilisateurController@store')->name('utilisateur.add');
        Route::get('/utilisateur/show/{id}','UtilisateurController@show')->name('utilisateur.show');
        Route::get('/utilisateur/edit/{utilisateur}','UtilisateurController@edit')->name('utilisateur.edit');
        Route::post('/utilisateur/update/{utilisateur}','UtilisateurController@update')->name('utilisateur.update');
        Route::delete('/utilisateur/delete/{utilisateur}','UtilisateurController@destroy')->name('utilisateur.delete');
        Route::post('/utilisateur/archive/{utilisateur}','UtilisateurController@archive')->name('utilisateur.archive');
  

    // Dossiers médicaux

        Route::get('/dossier','DossierController@index')->name('dossier.index');
        Route::get('/dossier/create','DossierController@create')->name('dossier.create');
        Route::post('/dossier/add','DossierController@store')->name('dossier.add');
        Route::get('/dossier/show/{id}','DossierController@show')->name('dossier.show');
        Route::get('/dossier/edit/{dossier}','DossierController@edit')->name('dossier.edit');
        Route::post('/dossier/update/{dossier}','DossierController@update')->name('dossier.update');
        Route::delete('/dossier/delete/{dossier}','DossierController@destroy')->name('dossier.delete');
        Route::post('/dossier/archive/{dossier}','DossierController@archive')->name('dossier.archive');
});

