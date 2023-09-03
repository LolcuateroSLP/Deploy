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

Route::post('/changeLang',function(){
    $locale = session()->get('locale');
    if($locale == "es"){
        App::setLocale('en');
        session()->put('locale', "en");
        return redirect('/');
    }

    if($locale == "en"){
        App::setLocale('es');
        session()->put('locale', "es");
        return redirect('/');
    }

    return redirect('/');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
