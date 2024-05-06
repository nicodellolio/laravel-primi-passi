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

    $data = [
        'framework' => 'Laravel',
        'review' => 'Laravel looks awesome',
        'nav_items' => [
            'about',
            'contacts',
            'gallery'
        ]
    ];

    return view('home', $data);
});

Route::get('/about', function () {

    return view('about');

})->name('about');

Route::get('/contacts', function () {

    $data = [
        'contacts' => [
            'Berghius Street, 493, Melbourne (VIC)',
            'State of Victoria, Australia',
            '+61 0484 569 342',
            '+61 0456 123 222',
            'ilovelaravel@maybe.com',
            'maybeshouldfrontend@yeah.com'
        ]
        ];

    return view('contacts', $data);

})->name('contacts');

Route::get('/gallery', function () {

    return view('gallery');

})->name('gallery');

