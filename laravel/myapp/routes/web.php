<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('user/{user}', function(User $user) {
    return $user ;
});

Route::prefix('usuarios')->group(function() {
    Route::get('/edit', function() {
        return 'Pedro';
    })->name('usuarios');

    Route::get('/{id}/tags', function($id) {
        return 'tags ' . $id;
    })->name('tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
})->name('a-empresa');;

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;    
});
