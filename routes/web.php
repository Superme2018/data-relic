<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Image uploader
Route::get('/image-uploader', [ImageController::class, 'index']);
Route::get('/images', [ImageController::class, 'show']);
Route::post('/upload', [ImageController::class, 'store']);

Route::get('/', function () {
    return view('data-relic/spa-container');
});

Route::get('/post-processing-effects', function () {
    return view('other/post-processing-effects');
});

Route::get('/tailwind', function () {
    return view('other/tailwind');
});

Route::get('/svg-animation', function () {
    return view('svg/svg-animation-ui-sequence');
});

Route::get('/vue-3-js-learning', function () {
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



