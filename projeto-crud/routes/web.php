<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PersonagensController;

Route::resource('personagens', PersonagensController::class);
Route::get('personagens/{id}/delete', [PersonagensController::class, 'delete'])->name('personagens.delete');

Route::get('/', function () {
    return redirect()->route('personagens.index');
});
