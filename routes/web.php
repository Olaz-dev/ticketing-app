<?php

use App\Http\Controllers\Admin\SubmittedTicketController;
use App\Http\Controllers\Agent\TicketAssignedController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Frontend\IndexPageController;
use App\Http\Controllers\LabelController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontpage.index.index');
});
Route::resource('index', IndexPageController::class);
Route::group(['middleware'=>'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('category', CategoryController::class)->middleware('admin');
    Route::resource('label', LabelController::class)->middleware('admin');
    Route::resource('priority', PriorityController::class)->middleware('admin');
    Route::resource('tickets', SubmittedTicketController::class)->middleware('admin');

    Route::get('index', [IndexPageController::class, 'index'])->name('index.index');
    Route::post('index', [IndexPageController::class, 'store'])->name('index.store');

    Route::get('ticketassigned', [TicketAssignedController::class, 'index'])->name('ticketassigned.index')->middleware('agent');
    Route::get('ticketassigned/{ticketassigned}/edit', [TicketAssignedController::class, 'edit'])->name('ticketassigned.edit')->middleware('agent');
    Route::put('ticketassigned/{ticketassigned}', [TicketAssignedController::class, 'update'])->name('ticketassigned.update')->middleware('agent');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
        Route::get('/', [\App\Http\Controllers\NotificationController::class, 'index'])->name('index');
        Route::put('/{notification}', [\App\Http\Controllers\NotificationController::class, 'update'])->name('update');
        Route::delete('/destroy', [\App\Http\Controllers\NotificationController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__ . '/auth.php';
