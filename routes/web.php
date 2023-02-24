<?php

use App\Http\Controllers\Admin\SubmittedTicketController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\IndexPageController;
use App\Http\Controllers\Agent\TicketAssignedController;
use App\Http\Controllers\PriorityController;
use App\Models\Priority;

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
    return view('frontpage.index.index');
});
Route::resource('index', IndexPageController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'admin'])->name('dashboard');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');
    Route::resource('index', IndexPageController::class)->only('create');
    Route::resource('ticketassigned',TicketAssignedController::class)->middleware('agent');
    Route::resource('category',CategoryController::class)->middleware('admin');
    Route::resource('label',LabelController::class)->middleware('admin');
    Route::resource('priority',PriorityController::class)->middleware('admin');
    Route::resource('tickets',SubmittedTicketController::class)->middleware('admin');
});

//Route::get('/agent/ticketassigned',[TicketAssignedController::class,'index'])->middleware(['auth', 'agent'])->name('agent.ticket');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';