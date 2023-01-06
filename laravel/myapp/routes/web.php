<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/redirect', function(Request $request) {
    $r = $request->input();
    dd($r);
    return 'x';
});

Route::get('user/{user}', [UserController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
