<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $tests = [
        'swag' => 'bella per tutti',
        'ciao' => [
            'saluto' => 'hello World',
            'nome' => 'lorenzo',
            'cognome' => 'savoia',
        ],
    ];
    return view('helloWord', $tests);
});
