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
/*
Route::get('/ListSearchItem', function () {
    return view('ListSearchItem');
});
*/