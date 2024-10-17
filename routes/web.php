<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}',function ($name) {
    return view('home', ['name' => $name]);

});

Route::get('/home',function (){
    return view('home');
})->name('home');

Route::get('/about',function (){
    return view('about');
})->name('about');;

Route::get('/auth/signin',function () {
    return view('auth.signin');

});

// Route Param
Route::get('/user/{name}/{age}', function ($name, $age) {
    return 'User '.$name . ' age is:' .$age;

});

// Named Route
Route::get('/user/profile', function () {
    return 'Pengguna Profile Baru';
}) ->name('user.profile');

// Route Param
Route::get('/user/{name}', function ($name) {
    return 'User '.$name ;

});
// alias of a route user.profile = /pengguna/profile

// Redirect route to named route
Route::get('/redirect-to-profile', function () {
    return redirect()->route('user.profile');
});

// Route Group
Route::prefix('food')->group(function () {
    
    Route::get('/details',function () {
        return 'Food details are following';
    });

    Route::get('/home', function(){
        return 'Food home page';

    });
});

    route::name('job')->prefix('job')->group(function(){
        route::get('/home', function(){
            return 'Job home page';
        })->name('.home');
    
        route::get('/description', function(){
            return 'Job details are following';
        })->name('.description');
});
require __DIR__.'/feed/web.php';

Route::middleware('guest')->group(function(){
Route::get('/auth/signup', [AuthController::class, 'signUp'])->name('auth.signup');
Route::get('/auth/signin', [AuthController::class, 'signIn'])->name('auth.signin');
Route::post('/auth/store', [AuthController::class, 'storeUser'])->name('auth.store');
Route::post('/auth/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');

});

Route::get('/auth/signOut', [AuthController::class, 'signOut'])->name('auth.signOut');
// Route::get('/ai/feed', [AIController::class, 'generateFeedContent'])->name('ai.feed');