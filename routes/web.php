<?php

use Illuminate\Support\Facades\Route;
use Solverao\Citas\Http\Controllers\GentoolsController;


Route::prefix('gentools')->group(function () {
    Route::get('clear', [GentoolsController::class,'clear']);
    Route::get('storage-link', [GentoolsController::class,'storageLink']);
});