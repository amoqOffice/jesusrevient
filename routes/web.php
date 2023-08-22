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

    Route::get('/', 'front\PredicationController@index')->name('front.predications.index'); //Retourne la liste des prédications

    Route::get('{id}/details', 'front\PredicationController@show')->name('front.predications.show'); //Retourne une prédication

    Route::get('{id}/details_videos', 'front\PredicationController@show_videos')->name('front.predications.show_videos'); //Retourne une prédication
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

/*
|--------------------------------------------------------------------------
| Eglise Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/eglises'], function () {
    Route::get('index', 'back\EgliseController@index')->name('back.eglise.index'); // Liste des eglises

    Route::get('create', 'back\EgliseController@create')->name('back.eglise.create'); // Formulaire de création de eglise
    Route::post('store', 'back\EgliseController@store')->name('back.eglise.store'); // Enrégistrement de eglise

    Route::get('{id}/show', 'back\EgliseController@show')->name('back.eglise.show'); //Informations sur eglise

    Route::get('{id}/edit', 'back\EgliseController@edit')->name('back.eglise.edit'); //Formulaire d'édition de eglise
    Route::post('{id}/update', 'back\EgliseController@update')->name('back.eglise.update'); // Enregistrement des modification de eglise

    Route::get('{id}/delete', 'back\EgliseController@delete')->name('back.eglise.delete'); // Suppression de eglise

    Route::post('delete_all', 'back\EgliseController@deleteAll')->name('back.eglise.delete_all'); // Suppression de plusieurs eglises
});

/*
|--------------------------------------------------------------------------
| Responsable Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/responsables'], function () {
    Route::get('index', 'back\ResponsableController@index')->name('back.responsable.index'); // Liste des responsables

    Route::get('create', 'back\ResponsableController@create')->name('back.responsable.create'); // Formulaire de création de responsable
    Route::post('store', 'back\ResponsableController@store')->name('back.responsable.store'); // Enrégistrement de responsable

    Route::get('{id}/show', 'back\ResponsableController@show')->name('back.responsable.show'); //Informations sur responsable

    Route::get('{id}/edit', 'back\ResponsableController@edit')->name('back.responsable.edit'); //Formulaire d'édition de responsable
    Route::post('{id}/update', 'back\ResponsableController@update')->name('back.responsable.update'); // Enregistrement des modification de responsable

    Route::get('{id}/delete', 'back\ResponsableController@delete')->name('back.responsable.delete'); // Suppression de responsable

    Route::post('delete_all', 'back\ResponsableController@deleteAll')->name('back.responsable.delete_all'); // Suppression de plusieurs responsables
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
| Membre Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/membres'], function () {
    Route::get('index', 'back\MembreController@index')->name('back.membre.index'); // Liste des membres

    Route::get('create', 'back\MembreController@create')->name('back.membre.create'); // Formulaire de création de membre
    Route::post('store', 'back\MembreController@store')->name('back.membre.store'); // Enrégistrement de membre

    Route::get('{id}/show', 'back\MembreController@show')->name('back.membre.show'); //Informations sur membre

    Route::get('{id}/edit', 'back\MembreController@edit')->name('back.membre.edit'); //Formulaire d'édition de membre
    Route::post('{id}/update', 'back\MembreController@update')->name('back.membre.update'); // Enregistrement des modification de membre

    Route::get('{id}/delete', 'back\MembreController@delete')->name('back.membre.delete'); // Suppression de membre

    Route::post('delete_all', 'back\MembreController@deleteAll')->name('back.membre.delete_all'); // Suppression de plusieurs membres
});

/*
|--------------------------------------------------------------------------
| Categorie Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/categories'], function () {
    Route::get('index', 'back\CategorieController@index')->name('back.categorie.index'); // Liste des categories

    Route::get('create', 'back\CategorieController@create')->name('back.categorie.create'); // Formulaire de création de categorie
    Route::post('store', 'back\CategorieController@store')->name('back.categorie.store'); // Enrégistrement de categorie

    Route::get('{id}/show', 'back\CategorieController@show')->name('back.categorie.show'); //Informations sur categorie

    Route::get('{id}/edit', 'back\CategorieController@edit')->name('back.categorie.edit'); //Formulaire d'édition de categorie
    Route::post('{id}/update', 'back\CategorieController@update')->name('back.categorie.update'); // Enregistrement des modification de categorie

    Route::get('{id}/delete', 'back\CategorieController@delete')->name('back.categorie.delete'); // Suppression de categorie

    Route::post('delete_all', 'back\CategorieController@deleteAll')->name('back.categorie.delete_all'); // Suppression de plusieurs categories
});

/*
|--------------------------------------------------------------------------
| Article Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/articles'], function () {
    Route::get('index', 'back\ArticleController@index')->name('back.article.index'); // Liste des articles

    Route::get('create', 'back\ArticleController@create')->name('back.article.create'); // Formulaire de création de article
    Route::post('store', 'back\ArticleController@store')->name('back.article.store'); // Enrégistrement de article

    Route::get('{id}/show', 'back\ArticleController@show')->name('back.article.show'); //Informations sur article

    Route::get('{id}/edit', 'back\ArticleController@edit')->name('back.article.edit'); //Formulaire d'édition de article
    Route::post('{id}/update', 'back\ArticleController@update')->name('back.article.update'); // Enregistrement des modification de article

    Route::get('{id}/delete', 'back\ArticleController@delete')->name('back.article.delete'); // Suppression de article

    Route::post('delete_all', 'back\ArticleController@deleteAll')->name('back.article.delete_all'); // Suppression de plusieurs articles
});

/*
|--------------------------------------------------------------------------
| Tag Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/tags'], function () {
    Route::get('index', 'back\TagController@index')->name('back.tag.index'); // Liste des tags

    Route::get('create', 'back\TagController@create')->name('back.tag.create'); // Formulaire de création de tag
    Route::post('store', 'back\TagController@store')->name('back.tag.store'); // Enrégistrement de tag

    Route::get('{id}/show', 'back\TagController@show')->name('back.tag.show'); //Informations sur tag

    Route::get('{id}/edit', 'back\TagController@edit')->name('back.tag.edit'); //Formulaire d'édition de tag
    Route::post('{id}/update', 'back\TagController@update')->name('back.tag.update'); // Enregistrement des modification de tag

    Route::get('{id}/delete', 'back\TagController@delete')->name('back.tag.delete'); // Suppression de tag

    Route::post('delete_all', 'back\TagController@deleteAll')->name('back.tag.delete_all'); // Suppression de plusieurs tags
});

/*
|--------------------------------------------------------------------------
| Commentaire Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin/commentaires'], function () {
    Route::get('index', 'back\CommentaireController@index')->name('back.commentaire.index'); // Liste des commentaires

    Route::get('create', 'back\CommentaireController@create')->name('back.commentaire.create'); // Formulaire de création de commentaire
    Route::post('store', 'back\CommentaireController@store')->name('back.commentaire.store'); // Enrégistrement de commentaire

    Route::get('{id}/show', 'back\CommentaireController@show')->name('back.commentaire.show'); //Informations sur commentaire

    Route::get('{id}/edit', 'back\CommentaireController@edit')->name('back.commentaire.edit'); //Formulaire d'édition de commentaire
    Route::post('{id}/update', 'back\CommentaireController@update')->name('back.commentaire.update'); // Enregistrement des modification de commentaire

    Route::get('{id}/delete', 'back\CommentaireController@delete')->name('back.commentaire.delete'); // Suppression de commentaire

    Route::post('delete_all', 'back\CommentaireController@deleteAll')->name('back.commentaire.delete_all'); // Suppression de plusieurs commentaires
});
