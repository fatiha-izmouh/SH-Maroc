<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//dashboard 
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\BenevolatController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipationController;
Route::get('/dashboard', function () {
    return view('welcome');
});




Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/admin', [PageController::class, 'index'])->name('dashboard');

    Route::get('/participations', [ParticipationController::class, 'index'])->name('participations.index');
    Route::get('/participations/create', [ParticipationController::class, 'create'])->name('participations.create');
    Route::post('/participations', [ParticipationController::class, 'store'])->name('participations.store');
    Route::patch('/participations/{id}/{status}', [ParticipationController::class, 'update'])->name('participations.updateStatus');
    Route::resource('participations', ParticipationController::class);

    Route::get('/actualites', [ActualiteController::class, 'index'])->name('actualites.index');
    Route::get('/actualites/create', [ActualiteController::class, 'create'])->name('actualites.create');
    Route::post('/actualites/edit', [ActualiteController::class, 'store'])->name('actualites.store');
    Route::patch('/actualites/{id}/edit', [ActualiteController::class, 'edit'])->name('actualites.edit');
    Route::put('/actualites/{id}', [ActualiteController::class, 'update'])->name('actualites.update');
    Route::resource('actualites', ActualiteController::class);
    Route::get('/actualites/{id}', [ActualiteController::class, 'show'])->name('actualites.details');

    Route::get('/benevolats', [BenevolatController::class, 'index'])->name('benevolats.index');
    Route::get('/benevolats/create', [BenevolatController::class, 'create'])->name('benevolats.create');
    Route::post('/benevolats', [BenevolatController::class, 'store'])->name('benevolats.store');
    Route::patch('/benevolats/{id}/{status}', [BenevolatController::class, 'update'])->name('benevolats.updateStatus');
    Route::resource('benevolats', BenevolatController::class);


    Route::get('/partenaires', [PartenaireController::class, 'index'])->name('partenaires.index');
    Route::get('/partenaires/create', [PartenaireController::class, 'create'])->name('partenaires.create');
    Route::post('/partenaires', [PartenaireController::class, 'store'])->name('partenaires.store');
    Route::patch('/partenaires/{id}/{status}', [PartenaireController::class, 'update'])->name('partenaires.updateStatus');
    Route::resource('partenaires', PartenaireController::class);

    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::resource('messages', MessageController::class);


    Route::get('/commentaires', [CommentaireController::class, 'index'])->name('commentaires.index');
    Route::patch('/commentaires/{id}/{status}', [CommentaireController::class, 'update'])->name('commentaires.updateStatus');
    Route::resource('commentaires', CommentaireController::class);

   


    Route::post('/update-number', [PageController::class, 'updateNumber'])->name('update.number');
    
});




//__________________________________ Site________________________________________////

use App\Http\Controllers\UtilisateurControllers\ActualitesController;
use App\Http\Controllers\UtilisateurControllers\CommentairesController;
use App\Http\Controllers\UtilisateurControllers\PartenairesController;
use App\Http\Controllers\UtilisateurControllers\BenevolatsController;
use App\Http\Controllers\UtilisateurControllers\ParticipationsController;
use App\Http\Controllers\UtilisateurControllers\AccueilController;


Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/details', function () {
    return view('Site.actualiteDetails');
});
Route::get('/JEA', function () {
    return view('Site.Projets.JEA');
});
Route::get('/CF', function () {
    return view('Site.Projets.CF');
});
Route::get('/TS', function () {
    return view('Site.Projets.TS');
});

Route::get('/benevolat', function () {
    return view('Site.Benevolat.benevolat');
});

Route::get('/contact', function () {
    return view('Site.Contact.contact');
});

Route::get('/details', function () {
    return view('Site.Actualities.actualiteDetails');
});

Route::get('/conditions-utilisation', function () {
    return view('Site.Conditions.conditions-utilisation');
});

Route::get('/FAQ', function () {
    return view('Site.FAQ.faq');
});

Route::get('/Actualite/{id}', [ActualitesController::class, 'show'])->name('actualite.show');



Route::get('/actualities', function () {
    return view('Site.Actualities.actualitées');
});

Route::get('/Actualite-JEA', [ActualitesController::class, 'actualitesJEA'])->name('actualites.jea');


Route::get('/Actualite-TS', [ActualitesController::class, 'actualitesTS'])->name('actualites.ts');


Route::get('/Actualite-CF', [ActualitesController::class, 'actualitesCF'])->name('actualites.cf');

Route::get('/inscription/benevole', function () {
    return view('Site.Formulaire.inscription_benevole');
});

Route::get('/inscription/partenaire', function () {
    return view('Site.Formulaire.inscription_partenaire');
});

Route::get('/participation', function () {
    return view('Site.Formulaire.participation');
});

// Qui sommes-nous
Route::get('/qui-sommes-nous', [CommentairesController::class, 'index'])->name('qui-somme-nous.index');;



Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');

Route::post('/commentaires/store', [CommentaireController::class, 'store'])->name('commentaires.store');

Route::post('/partenaires/store', [PartenairesController::class, 'store'])->name('partenaires.store');

Route::post('/benevolats/store', [BenevolatsController::class, 'store'])->name('benevolats.store');

Route::post('/participations/store', [ParticipationsController::class, 'store'])->name('participations.store');
