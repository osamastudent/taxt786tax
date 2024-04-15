<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\practiceController;
use App\Http\Controllers\viewsController;

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


Route::get('/welcome', function () {
    return view('welcome');
});

route::get('/',[ViewsController::class,'Home']);
route::get('calculator',[ViewsController::class,'Calculator']);
// route::get('ntnstatus',[ViewsController::class,'ntnStatus']);
// route::get('atlstatus',[ViewsController::class,'atlStatus']);
// route::get('faqstatus',[ViewsController::class,'faqStatus']);
// route::get('contactstatus',[ViewsController::class,'contactStatus']);

Route::get('/business', function () {
    return view('business-services');
});

Route::get('/startprocess', function () {
    return view('start-process');
});


Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/videos', function () {
    return view('blogs/videos');
});


Route::get('/blogs', function () {
    return view('blogs/blogs');
});


Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/navbarlayout', function () {
    return view('slider');
});






















// simple routing
// Route::get('/reverse', function () {
//     return view('reverse');
// });

// Route::get('/named', function () {
//     return view('named');
// });


// revers routing
// Route::get('reverse','practiceController@reverse')->name('reverse');

// Route::get('named','practiceController@named')->name('named');






// routes group

route::prefix('osama')->group(function(){

    Route::get('/reverse', function () {
        return view('reverse');
    });
    
    Route::get('/named', function () {
        return view('named');
    });



    // named roting
Route::get('/rendbjsbverse', function () {
    return view('reverse');
})->name('examplereverse');

Route::get('/nadjndjmed', function () {
    return view('named');
})->name('examplenamed');
});


// fallback page not found 

Route::fallback(function(){
return "<h1>Page Not Found </h1>";
});

// redirect
Route::redirect('reverse','videos',301);