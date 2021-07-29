<?php

use App\Http\Livewire\VideoForm;
use App\Http\Livewire\EditFormation;
use App\Http\Livewire\VideoComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FromationCreate;
use App\Http\Livewire\FormationDetails;
use App\Http\Livewire\FormationComponent;
use App\Http\Controllers\FormationController;
use App\Http\Livewire\FormationComponentUser;

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

//Admin
Route::middleware(['auth', 'Authmiddleware'])->group(function () {

    Route::get('/formationcomponent', FormationComponent::class)->name('formationcomponet');
    Route::get('/formationcreate', FromationCreate::class)->name('formationcreate');
    Route::get('/formation/{formation_id}',EditFormation::class)->name('formationedit');
    Route::get('/videocomponet', VideoComponent::class)->name('videocomponent');
    Route::get('/videocreate', VideoForm::class)->name('videocreate');


});

  //admin user
  Route::resource('formation', FormationController::class);
  Route::get('formationcomponentuser', FormationComponentUser::class)->name('formationcomponentuser');
  Route::middleware(['auth'])->group(function () {
//   Route::get('/{formation_id}', FormationDetails::class)->name('formationdetails');
  });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
