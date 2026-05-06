<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/contact/confirm', function (Request $request) {
    $inputs = $request->all();
    return view('confirm', ['inputs' => $inputs]);
})->name('contact.confirm');
Route::post('/contacts', [ContactController::class, 'store']);
Route::post(
    '/thanks',
    function (Request $request) {
        return view('thanks');
    }
)->name('thanks');

Route::get('/register', function () {
    return view('register');
});

Route::get('login', function () {
    return view('login');
});