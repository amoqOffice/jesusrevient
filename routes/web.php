<?php

use Illuminate\Support\Facades\Route;

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

// FRONT ONLY
Route::get('/', function () {
    return view('front/accueil');
})->name('front.accueil'); // Afficher la page d'accueil

Route::prefix('predications')->group(function () {
    Route::get('enseignements', 'front\EnseignementController@index')->name('front.predications.enseignements'); //Retourne la liste des enseignements

    Route::get('evangelisations', 'front\EvangelisationController@index')->name('front.predications.evangelisations'); //Retourne la liste des evangelisations)
});

Route::prefix('eglises')->group(function () {
    Route::get('evenements', 'front\EvenementController@index')->name('front.eglises.evenements'); // Affiche la liste des evenements des églises

    Route::get('pogrammes', 'front\ProgrammeController@index')->name('front.eglises.programmes'); // Affiche la liste des programmes de chaque Eglise

    Route::get('apropos', 'front\AproposController@index')->name('front.eglises.apropos'); // Affiche les informations sur apropos
});

Route::prefix('blog')->group(function () {
    Route::get('/', 'front\BlogController@index')->name('front.blog'); // Affiche le blog
});

Route::prefix('emissions-TV')->group(function () {
    Route::get('/', 'front\EmissionTVController@index')->name('front.emissionsTV');
});

Route::prefix('bible')->group(function () {
    Route::get('/', 'front\BibleController@index')->name('front.bible');
});

Route::prefix('direct-TV')->group(function () {
    Route::get('/', 'front\DirectTVController@index')->name('front.directTV');
});

Route::prefix('donation')->group(function () {
    Route::get('/', 'front\DonationController@index')->name('front.donation');
});


// BACKOFFICE ONLY
Route::prefix('admin')->group(function () {
    // Route::view('/', ('back/home'));
    Route::get('/', 'DashboardController@index')->name('back.home');

    /*
    |--------------------------------------------------------------------------
    | Accueil Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'accueil'], function () {
        Route::get('index', 'AccueilController@index')->name('back.accueil.index'); // Liste des accueils
    });

    /*
    |--------------------------------------------------------------------------
    | Redaction Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'redaction'], function () {
        Route::get('index', 'RedactionController@index')->name('back.redaction.index'); // Liste des redactions

        Route::get('create', 'RedactionController@create')->name('back.redaction.create'); // Formulaire de création de redaction
        Route::post('store', 'RedactionController@store')->name('back.redaction.store'); // Enrégistrement de redaction

        Route::get('{id}/show', 'RedactionController@show')->name('back.redaction.show'); //Informations sur redaction

        Route::get('{id}/edit', 'RedactionController@edit')->name('back.redaction.edit'); //Formulaire d'édition de redaction
        Route::post('{id}/update', 'RedactionController@update')->name('back.redaction.update'); // Enregistrement des modification de redaction

        Route::post('destroy', 'RedactionController@destroy')->name('back.redaction.destroy'); // Suppression de redaction
        Route::post('destroyAll', 'RedactionController@destroyAll')->name('back.redaction.destroyAll'); // Suppression de plusieurs redactions
    });

    /*
    |--------------------------------------------------------------------------
    | Reseau Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'reseau'], function () {
        Route::get('index', 'ReseauController@index')->name('back.reseau.index'); // Liste des reseaus

        Route::get('create', 'ReseauController@create')->name('back.reseau.create'); // Formulaire de création de reseau
        Route::post('store', 'ReseauController@store')->name('back.reseau.store'); // Enrégistrement de reseau

        Route::get('{id}/show', 'ReseauController@show')->name('back.reseau.show'); //Informations sur reseau

        Route::get('{id}/edit', 'ReseauController@edit')->name('back.reseau.edit'); //Formulaire d'édition de reseau
        Route::post('{id}/update', 'ReseauController@update')->name('back.reseau.update'); // Enregistrement des modification de reseau

        Route::post('destroy', 'ReseauController@destroy')->name('back.reseau.destroy'); // Suppression de reseau
        Route::post('destroyAll', 'ReseauController@destroyAll')->name('back.reseau.destroyAll'); // Suppression de plusieurs reseaus
    });

    /*
    |--------------------------------------------------------------------------
    | Categorie Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'categorie'], function () {
        Route::get('index', 'CategorieController@index')->name('back.categorie.index'); // Liste des categories

        Route::get('create', 'CategorieController@create')->name('back.categorie.create'); // Formulaire de création de categorie
        Route::post('store', 'CategorieController@store')->name('back.categorie.store'); // Enrégistrement de categorie

        Route::get('{id}/show', 'CategorieController@show')->name('back.categorie.show'); //Informations sur categorie

        Route::get('{id}/edit', 'CategorieController@edit')->name('back.categorie.edit'); //Formulaire d'édition de categorie
        Route::post('{id}/update', 'CategorieController@update')->name('back.categorie.update'); // Enregistrement des modification de categorie

        Route::post('destroy', 'CategorieController@destroy')->name('back.categorie.destroy'); // Suppression de categorie
        Route::post('destroyAll', 'CategorieController@destroyAll')->name('back.categorie.destroyAll'); // Suppression de plusieurs categories
    });

    /*
    |--------------------------------------------------------------------------
    | Emission Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['prefix' => 'emission'], function () {
        Route::get('index', 'EmissionController@index')->name('back.emission.index'); // Liste des emissions

        Route::get('create', 'EmissionController@create')->name('back.emission.create'); // Formulaire de création de emission
        Route::post('store', 'EmissionController@store')->name('back.emission.store'); // Enrégistrement de emission

        Route::get('{id}/show', 'EmissionController@show')->name('back.emission.show'); //Informations sur emission

        Route::get('{id}/edit', 'EmissionController@edit')->name('back.emission.edit'); //Formulaire d'édition de emission
        Route::post('{id}/update', 'EmissionController@update')->name('back.emission.update'); // Enregistrement des modification de emission

        Route::post('destroy', 'EmissionController@destroy')->name('back.emission.destroy'); // Suppression de emission
        Route::post('destroyAll', 'EmissionController@destroyAll')->name('back.emission.destroyAll'); // Suppression de plusieurs emissions
    });
});
