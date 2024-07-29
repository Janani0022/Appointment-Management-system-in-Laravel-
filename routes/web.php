<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;




Route::get('/', function () {
    return view('Home');
});

Route::get('/Services', function () {
    return view('Services');
});

/*Route::get('/Contact', function () {
    return view('Contact');
});*/

Route::get('/About', function () {
    return view('About');
});

Route::get('/LogIn', function () {
    return view('LogIn');
});


/*Route::get('/Admin', function () {
    return view('Admin');
});*/



Route::get('/Appointment', function () {
    return view('Appointment');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::post('/pass',[PagesController::class,'indexSign']); 

Route::post('/www',[PagesController::class,'indexlog']);

Route::post('/fill',[PagesController::class,'indexbook']); 

Route::get('/Admin', [PagesController::class, 'show']);
Route::get('/rec', [PagesController::class, 'indexfilter']);

Route::post('/feed',[PagesController::class,'indexFeed']); 
Route::get('/Contact', [PagesController::class, 'feeds']);

Route::post('/msg',[PagesController::class,'indexmsg']);

Route::delete('/delete-message/{id}',[PagesController::class,'deletemsg']);

Route::delete('/delete-rec/{id}',[PagesController::class,'deleterec']);





