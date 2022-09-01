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
    return view('index');
})->name('index');

Route::get('/404', function () {
    return view('errors.404');
})->name('404');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio/application', function () {
    return view('portfolio.application');
})->name('portofolio-application');

Route::get('/portfolio/design', function () {
    return view('portfolio.design-graphique');
})->name('design-graphique');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/conception-ux', function () {
    return view('services.conception-ux');
})->name('conception-ux');

Route::get('/services/cybersecurite', function () {
    return view('services.cybersecurite');
})->name('cybersecurite');

Route::get('/services/data-analytic', function () {
    return view('services.data-analytic');
})->name('data-analytic');

Route::get('/services/design', function () {
    return view('services.design');
})->name('design');

Route::get('/services/developpement-web-mobile', function () {
    return view('services.developpement-web-mobile');
})->name('developpement-web-mobile');

Route::get('/services/referencement-seo', function () {
    return view('services.referencement-seo');
})->name('referencement-seo');

Route::get('/contact/projet', function () {
    return view('contact.contact-projet');
})->name('contact-projet');

Route::get('/contact/carriere', function () {
    return view('contact.contact-carriere');
})->name('contact-carriere');

Route::get('/podcast', function () {
    return view('podcast');
})->name('podcast');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/politique-de-confidentialite', function () {
    return view('privacy-policy');
})->name('politique-de-confidentialite');

//Clear route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});

// Storage symlink:
Route::get('/storage-link', function () {
    $exitCode = Artisan::call('storage:link');
    return 'The links have been created.';
});

// Handle contact forms
Route::post('/contact/{contactType?}', 'App\Http\Controllers\ContactFormController@index')->name('post.contact');
