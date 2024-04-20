<?php

use App\Http\Controllers\CocktailController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index");
});


Route::resource("cocktails", CocktailController::class);
Route::resource("ingredients", IngredientController::class);
