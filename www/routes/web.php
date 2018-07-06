<?php

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

use Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group([
    "middleware" => ["auth"],
    'prefix'     => "home",
    'as' => 'admin.',
], function (Router $router) {
    $router
        ->get('', 'HomeController@index')
        ->name('home');

    $router->group([
        'prefix'     => "user",
        'as' => 'user.',
    ], function (Router $router) {
        $router
            ->get('', 'UsersController@index')
            ->name('index');

        $router
            ->post('', 'UsersController@store')
            ->name('store');

        $router
            ->get('/create', 'UsersController@edit')
            ->name('create');

        $router
            ->get('/{user}', 'UsersController@edit')
            ->name('edit');

        $router
            ->get('/{user}/delete', 'UsersController@delete')
            ->name('delete');
    });
});

