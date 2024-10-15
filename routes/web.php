<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2/{name}',function ($name) {
    return view('home', ['name' => $name]);

});

Route::get('/home',function (){
    return view('home');

});

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