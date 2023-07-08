<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ListOfItemController;
use App\Models\Inventory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    dump('working');
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


/*Route::get('/ListSearchItem', function () {
    dump('working');
    //return view('ListSearchItem'); //dashboard or home
});*/

//Route::get('/','ListOfItem');
//Route::get('/ListSearchItem','ListSearchItemController@index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        dump('hehe');
        return view('dashboard');
    })->name('dashboard'); 
});

Route::get('/ListOfItem', function () {
    return view('ListOfItem'); 
});

Route::get('/report', function () {
    return view('report'); 
});

Route::get('/reportMainPage', function () {
    return view('reportMainPage'); 
});

Route::get('/dashboard', function () {
    return view('dashboard'); 
});

Route::get('/CashierDashboard', function () {
    return view('CashierDashboard'); 
});

Route::get('/CoordinatorDashboard', function () {
    return view('CoordinatorDashboard'); 
});

Route::get('/View_Inventory', function () {
    return view('View_Inventory');
});

Route::get('/search', [\App\Http\Controllers\ListOfItemController::class, 'search', 'index']) ->name('query');

Route::get('/paymentGateway', function(){
    return view('paymentGateway');
});

Route::get('/Monthly', function(){
    return view('Monthly');
});

Route::get('/Weekly', function(){
    return view('Weekly');
});

Route::get('/print', function(){
    return view('print');
});
/*
Route::get('/ListSearchItem', function () {
    return view('ListSearchItem');
});
*/


// Profile 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/{id}/delete', [ProfileController::class, 'delete'])->name('profile.delete');
Route::delete('/profile/{id}', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::post('/profile/search', [ProfileController::class, 'search'])->name('profile.search');


// Duty Roster 
Route::get('/duty-roster', [DutyRosterController::class, 'index'])->name('dutyRoster.index');
Route::get('/duty-roster/create', [DutyRosterController::class, 'create'])->name('dutyRoster.create');
Route::post('/duty-roster', [DutyRosterController::class, 'store'])->name('dutyRoster.store');
Route::get('/duty-roster/{id}/edit', [DutyRosterController::class, 'edit'])->name('dutyRoster.edit');
Route::put('/duty-roster/{id}', [DutyRosterController::class, 'update'])->name('dutyRoster.update');
Route::get('/duty-roster/{id}/delete', [DutyRosterController::class, 'delete'])->name('dutyRoster.delete');
Route::delete('/duty-roster/{id}', [DutyRosterController::class, 'destroy'])->name('dutyRoster.destroy');
