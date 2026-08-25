<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'home']);
});

Route::get('/live', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'live']);
});

Route::get('/platform', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'platform']);
});

Route::get('/solutions', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'solutions']);
});

Route::get('/data', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'data']);
});

Route::get('/start', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('welcome', ['locale' => $locale, 'page' => 'start']);
});

Route::get('/impressum', function () {
    $locale = request()->query('lang') === 'en' ? 'en' : 'de';

    return view('impressum', ['locale' => $locale]);
});

Route::get('/login', function () {
    return redirect()->away('https://auth.eventhacker.de/');
});
