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

Route::get('/svg-animation', function () {
    return view('svg/svg-code');
});

Route::get('/', function () {
    return view('vue3jsLearning/vue-assignments');
    //return view('vue-non-component-basic');
});


Route::get('/handsontable', function () {
    return view('handson-table');
});

Route::get('/data-source', function () {

    return response()->json(

        [
            [
                "name" => "Wash Car",
                "complete" => false,
                "id" => 1,
                "tag" => "math"
            ],
            [
                "name" => "Get cat litter",
                "complete" => false,
                "id" => 2,
                "tag" => "science"
            ],
            [
                "name" => "Wash Car",
                "complete" => false,
                "id" => 3,
                "tag" => "reading"
            ],
            [
                "name" => "Look at .csv upload service",
                "complete" => true,
                "id" => 4,
                "tag" => "programming"
            ]
        ]

    );
});



