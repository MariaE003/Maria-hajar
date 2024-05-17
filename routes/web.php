<?php

use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\ChartDataController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demandeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PrecenseController;
use App\Http\Controllers\ProjetController;
use App\Models\Feedback;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/espace_Admin',function(){
    return view('pages/espace_Admin');
});

Route::get('/espace_stagiaire',function(){
    return view('pages/espace_stagiaire');
});

Route::get('/espace_stagiaire', [UserController::class, 'statusDemande']);


// Route::get('/espace_stagiaire',[demandeController::class,'index'])->name('espace_stagiaire');;

Route::get('/contact',function(){
    return view('contact/aide');
});



Route::get('/showStg',[demandeController::class,'getData']);
// search
Route::get('/search',[UserController::class,'search']);
Route::get('/revien',[UserController::class,'getData']);
// detail
// Route::get('/detail/{c}',[UserController::class,'detail']);
Route::get('/detail/{c}',[demandeController::class,'detail']);
// Route::get('/detail',[UserController::class,'detail']);
// update
// Route::get('/update/{c}',[UserController::class,'update']);
// // saveUpdate
// Route::get('/savemod',[UserController::class,'saveUpdate'])->name("savemod");
// // update2
Route::get('/update/{iddemande}',[demandeController::class,'update']);
// saveUpdate
Route::get('/savemod',[demandeController::class,'saveUpdate'])->name("savemod");
// delete
Route::get('/delete/{c}',[demandeController::class,'delete']);

// demandeStg
Route::get('/demandeStg', function () {
    return view('pages/demandeStg');
});

//
Route::post('/AddDemande',[demandeController::class,'insertData']);

Route::get('/accepter/{c}',[demandeController::class,'accepter']);
Route::get('/refuser/{c}',[demandeController::class,'refuser']);

// get
Route::get('/demandeReussite',function(){
    return view('/pages/demandeReussite');
});



Route::get('/feed',[FeedbackController::class,'insertData']);
Route::get('/FeedbackReussite',function(){
    return view('/pages/FeedbackReussite');
});


// acceuille
Route::get('/', function () {
    return view('pages/Accueille');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// for stg
Route::get('/stgAbsence',function(){
    return view('pages/demande_absence');
});
Route::get('/stgPresence',function(){
    return view('pages/Saisie_presence');
});
Route::get('/stgPresence1',[PrecenseController::class,'insertData']);
Route::get('/donePresence',function(){
    return view('pages.donePresence');
});

Route::get('/stgabsence',[AbsenceController::class,'insertData']);
Route::get('/doneAbsence',function(){
    return view('pages.doneAbsence');
});

Route::get('/doneContact1',[ContactController::class,'insertData']);
Route::get('/doneContact',function(){
    return view('pages.doneContact');
});

// suivi le project pour stg

Route::get('/suiviprojet',[ProjetController::class,'insertData']);






// chart
// Route::get('/chart', [ChartDataController::class, 'index']);
// Route::get('/chart-data', [ChartDataController::class, 'getData']);


// 3 sont vrais
Route::get('/chart', [ChartDataController::class, 'index'])->name('chart');
Route::get('/chart-data', [ChartDataController::class, 'getData'])->name('chart-data');
Route::get('/demandes-par-mois', [ChartDataController::class,'getDemandesParMoisJson'])->name('demandes.par.mois');


// Route::get('/chartdata', [ChartDataController::class, 'getData']);

// // Route::get('/demandes-par-mois', 'ChartDataController@demandesParMois')->name('demandes.par.mois');
// // Route::get('/demandes-par-mois', [ChartDataController::class,'demandesParMois'])->name('demandes.par.mois');






// Route::get('/avancement',function(){
//     return view('pages.avancementDuProjet');
// });
Route::get('/avancement',[ProjetController::class,'getData']);
Route::get('/searchprojet',[UserController::class,'searchPre']);
Route::get('/searchprojetAbs',[AbsenceController::class,'searchAbs']);



Route::get('/test',function(){
    return view('pages/test');
});

// Route::get('/stafeed',function(){
//     return  view('pages/statistiqueFeedback');
// });
// Route::get('/chart-data', [FeedbackController::class, 'getData'])->name('chart-data');


Route::get('/chart1', [FeedbackController::class, 'index'])->name('chart1');
Route::get('/chart-data1', [FeedbackController::class, 'getData'])->name('chart-data1');


// afficher les message de contact
Route::get('/contactMsg',[ContactController::class,'getData']);

Route::get('/suiviDemandeAbs',[AbsenceController::class,'getData']);

Route::get('/accepterDemande/{id}',[AbsenceController::class,'accepter']);
Route::get('/refuserDemande/{id}',[AbsenceController::class,'refuser']);
Route::get('/suiviDemandeAbs1',[UserController::class,'statusAbs']);

Route::get('/listPres',[PrecenseController::class,'getData']);

Route::get('/presence',[PrecenseController::class,'showPresence']);

Route::get('/suiviDemande',[demandeController::class,'getStatus']);


Route::get('/err', function () {
    return view('pages/notFound', ['title' => 'Oops! Désolé, cette page est introuvable']);
});

Route::get('/dach',function(){
    return view('dach');
});