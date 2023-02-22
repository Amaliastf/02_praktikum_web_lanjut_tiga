<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;


//Prak3 No 1
Route::get('/', function() {
    echo "WELCOME";
});

//Prak3 No 2
Route::prefix('products')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Laman Marbel Edu Games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        echo "Laman Marbel and Friend Kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Laman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Laman Kolak Kids Songs";
    });
});

//Prak3 No 3
Route::get('/news/{pages?}', function ($pages = null) {
    return 'Menampilkan Daftar Berita Ke- ' . $pages;
});

//Prak3 No 4
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Laman Program Karir";
    });
    Route::get('/magang', function () {
        echo "Laman Program Magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Laman Program Kunjungan Industri";
    });
});

//Prak3 No 5
Route::get('/about-us', function () {
    echo "Laman About Us";
});

//Prak3 No 6
Route::resource('/contact-us', ContactUsController::class)->only([
    'show'
]);