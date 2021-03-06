<?php

use App\Http\Controllers\ScheduleController;
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
    return view('welcome');
});


// 404
Route::pattern('inexistentes', '.*');
Route::any('/{inexistentes}', function ($id) {
    return view('error', ['error' => '404', 'msj' => 'Pagina no encontrada']);
});
