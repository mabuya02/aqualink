<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('contact', function () {
    return view('contact');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');


    // Routes for viewing the different items on the dashboard
    Route::get('/maps.view', function () {
        return view('maps');
    })->name('maps.view');
    Route::get('/water-bodies.view', function () {
        return view('water-bodies');
    })->name('water-bodies.view');
    Route::get('/species.view', function () {
        return view('species');
    })->name('species.view');
    Route::get('/settings.view', function () {
        return view('settings');
    })->name('settings.view');

    Route::get('/test', function () {
        return view('test');
    })->name('test');
    // Route::get('/dashboard.view', function () {
    //     return view('dashboard');
    // })->name('dashboard.view');
    Route::get('/dashboard.view', 'App\Http\Controllers\SensorController@index')->name('dashboard.view');

    // Load the notifications from the db when getting to dashboard
    Route::get('/dashboard', 'App\Http\Controllers\NotificationController@index')->name('dashboard');
    // Route::get('/', 'App\Http\Controllers\SensorController@index')->name('/');

    //Route to the welcome landing page
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

});

require __DIR__.'/auth.php';
