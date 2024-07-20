<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->as ('admin.')
    ->group(function() {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Route::prefix('catalogues')
        //     ->as ('catalogues.')
        //     ->group(function () {

        //     });
    });
?>