<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empresa', function () {
    return view('site/empresa');
});

Route::any('/any', function () {
    return "Permite todo tipo de acesso http";
});

Route::match(['get', 'post'], '/match', function () {
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat}', function ($id, $cat) {
    return "O id do produto é: " . $id . "<br>" . "A categoria é:" . $cat;
});

Route::redirect('/sobre', "/empresa");
Route::view("/empresa", "site/empresa");

Route::get("/news", function () {
    return view("news");
})->name("notícias");

Route::get("/novidades", function () {
    return redirect()->route("notícias");
});
