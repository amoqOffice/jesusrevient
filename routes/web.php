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
Route::get('/', 'front\AccueilController@index')->name('front.accueil'); // Afficher la page d'accueil

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
Route::view('admin/accueil', 'back\home')->name('back.home');
/*
|--------------------------------------------------------------------------
| Rubrique Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/rubriques'], function () {
    Route::get('index', 'back\RubriqueController@index')->name('back.rubrique.index'); // Liste des rubriques

    Route::get('create', 'back\RubriqueController@create')->name('back.rubrique.create'); // Formulaire de création de rubrique
    Route::post('store', 'back\RubriqueController@store')->name('back.rubrique.store'); // Enrégistrement de rubrique

    Route::get('{id}/show', 'back\RubriqueController@show')->name('back.rubrique.show'); //Informations sur rubrique

    Route::get('{id}/edit', 'back\RubriqueController@edit')->name('back.rubrique.edit'); //Formulaire d'édition de rubrique
    Route::post('{id}/update', 'back\RubriqueController@update')->name('back.rubrique.update'); // Enregistrement des modification de rubrique

    Route::get('{id}/delete', 'back\RubriqueController@delete')->name('back.rubrique.delete'); // Suppression de rubrique

    Route::post('delete_all', 'back\RubriqueController@deleteAll')->name('back.rubrique.delete_all'); // Suppression de plusieurs rubriques
});

/*
|--------------------------------------------------------------------------
| Rubrique Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/rubriques'], function () {
    Route::get('index', 'back\RubriqueController@index')->name('back.rubrique.index'); // Liste des rubriques

    Route::get('create', 'back\RubriqueController@create')->name('back.rubrique.create'); // Formulaire de création de rubrique
    Route::post('store', 'back\RubriqueController@store')->name('back.rubrique.store'); // Enrégistrement de rubrique

    Route::get('{id}/show', 'back\RubriqueController@show')->name('back.rubrique.show'); //Informations sur rubrique

    Route::get('{id}/edit', 'back\RubriqueController@edit')->name('back.rubrique.edit'); //Formulaire d'édition de rubrique
    Route::post('{id}/update', 'back\RubriqueController@update')->name('back.rubrique.update'); // Enregistrement des modification de rubrique

    Route::get('{id}/delete', 'back\RubriqueController@delete')->name('back.rubrique.delete'); // Suppression de rubrique

    Route::post('delete_all', 'back\RubriqueController@deleteAll')->name('back.rubrique.delete_all'); // Suppression de plusieurs rubriques
});

/*
|--------------------------------------------------------------------------
| Rubrique Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/rubriques'], function () {
    Route::get('index', 'back\RubriqueController@index')->name('back.rubrique.index'); // Liste des rubriques

    Route::get('create', 'back\RubriqueController@create')->name('back.rubrique.create'); // Formulaire de création de rubrique
    Route::post('store', 'back\RubriqueController@store')->name('back.rubrique.store'); // Enrégistrement de rubrique

    Route::get('{id}/show', 'back\RubriqueController@show')->name('back.rubrique.show'); //Informations sur rubrique

    Route::get('{id}/edit', 'back\RubriqueController@edit')->name('back.rubrique.edit'); //Formulaire d'édition de rubrique
    Route::post('{id}/update', 'back\RubriqueController@update')->name('back.rubrique.update'); // Enregistrement des modification de rubrique

    Route::get('{id}/delete', 'back\RubriqueController@delete')->name('back.rubrique.delete'); // Suppression de rubrique

    Route::post('delete_all', 'back\RubriqueController@deleteAll')->name('back.rubrique.delete_all'); // Suppression de plusieurs rubriques
});

/*
|--------------------------------------------------------------------------
| Rubrique Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/rubriques'], function () {
    Route::get('index', 'back\RubriqueController@index')->name('back.rubrique.index'); // Liste des rubriques

    Route::get('create', 'back\RubriqueController@create')->name('back.rubrique.create'); // Formulaire de création de rubrique
    Route::post('store', 'back\RubriqueController@store')->name('back.rubrique.store'); // Enrégistrement de rubrique

    Route::get('{id}/show', 'back\RubriqueController@show')->name('back.rubrique.show'); //Informations sur rubrique

    Route::get('{id}/edit', 'back\RubriqueController@edit')->name('back.rubrique.edit'); //Formulaire d'édition de rubrique
    Route::post('{id}/update', 'back\RubriqueController@update')->name('back.rubrique.update'); // Enregistrement des modification de rubrique

    Route::get('{id}/delete', 'back\RubriqueController@delete')->name('back.rubrique.delete'); // Suppression de rubrique

    Route::post('delete_all', 'back\RubriqueController@deleteAll')->name('back.rubrique.delete_all'); // Suppression de plusieurs rubriques
});

/*
|--------------------------------------------------------------------------
| Activite Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/activites'], function () {
    Route::get('index', 'back\ActiviteController@index')->name('back.activite.index'); // Liste des activites

    Route::get('create', 'back\ActiviteController@create')->name('back.activite.create'); // Formulaire de création de activite
    Route::post('store', 'back\ActiviteController@store')->name('back.activite.store'); // Enrégistrement de activite

    Route::get('{id}/show', 'back\ActiviteController@show')->name('back.activite.show'); //Informations sur activite

    Route::get('{id}/edit', 'back\ActiviteController@edit')->name('back.activite.edit'); //Formulaire d'édition de activite
    Route::post('{id}/update', 'back\ActiviteController@update')->name('back.activite.update'); // Enregistrement des modification de activite

    Route::get('{id}/delete', 'back\ActiviteController@delete')->name('back.activite.delete'); // Suppression de activite

    Route::post('delete_all', 'back\ActiviteController@deleteAll')->name('back.activite.delete_all'); // Suppression de plusieurs activites
});

/*
|--------------------------------------------------------------------------
| Type Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/types'], function () {
    Route::get('ajax', 'back\TypeController@getTypesAjax')->name('back.types.ajax'); // Liste des types
    Route::get('index', 'back\TypeController@index')->name('back.type.index'); // Liste des types
    Route::get('create', 'back\TypeController@create')->name('back.type.create'); // Formulaire de création de type
    Route::post('store', 'back\TypeController@store')->name('back.type.store'); // Enrégistrement de type
    Route::get('{id}/show', 'back\TypeController@show')->name('back.type.show'); //Informations sur type
    Route::get('{id}/edit', 'back\TypeController@edit')->name('back.type.edit'); //Formulaire d'édition de type
    Route::post('{id}/update', 'back\TypeController@update')->name('back.type.update'); // Enregistrement des modification de type
    Route::get('{id}/delete', 'back\TypeController@delete')->name('back.type.delete'); // Suppression de type
    Route::post('delete_all', 'back\TypeController@deleteAll')->name('back.type.delete_all'); // Suppression de plusieurs types
});
