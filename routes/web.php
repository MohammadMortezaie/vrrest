<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return redirect('/' . config('app.fallback_locale'));
});

Route::group(['prefix' => 'vr'], function () {

    Auth::routes();

    Route::group(['middleware' => ['auth:web']], function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::post('/postcategory/all', [PostCategoryController::class, 'all']);
        Route::resource('postcategory', PostCategoryController::class);

        Route::post('/post/all', [PostController::class, 'all']);
        Route::resource('post', PostController::class)->except('show');

        Route::post('/comment/all', [CommentController::class, 'all']);
        Route::resource('comment', CommentController::class);

        Route::post('/career/all', [CareerController::class, 'all']);
        Route::resource('career', CareerController::class);


        Route::post('/adminuser/all', [UserController::class, 'all']);
        Route::resource('adminuser', UserController::class);
    });

});



Route::post('/comment/{blog}', [CommentController::class, 'store'])->name('blog.newcomment');

// sitemap
Route::get('/sitemap', [ServiceController::class, 'sitemap']);

Route::group([
    'prefix' => '{lang}',
    'middleware' => ['web', 'setlocale'],
], function () {
    Route::get('/', [ServiceController::class, 'index'])->name('home2');
    Route::get('/blog', [PostController::class, 'blog'])->name('blog');
    Route::get('/blog/{blog}/{slug}', [PostController::class, 'post'])->name('blog.post');


    Route::get('/about', [ServiceController::class, 'about'])->name('about');
    Route::get('/contact-us', [ServiceController::class, 'contact'])->name('contact');
    Route::get('/our-team', [ServiceController::class, 'team'])->name('team');
    Route::get('/career', [ServiceController::class, 'career'])->name('careers');



    //services
    Route::get('/water-damage', [ServiceController::class, 'waterdamage'])->name('waterdamage');
    Route::get('/commercial-services', [ServiceController::class, 'commercialServices'])->name('commercialServices');
    Route::get('/residential-services', [ServiceController::class, 'residentialServices'])->name('residentialServices');
    Route::get('/construction', [ServiceController::class, 'construction'])->name('construction');
    Route::get('/fire-damage', [ServiceController::class, 'fireDamage'])->name('fireDamage');
    Route::get('/general-cleaning', [ServiceController::class, 'generalCleaning'])->name('generalCleaning');
    Route::get('/mold-remediation', [ServiceController::class, 'moldRemediation'])->name('moldRemediation');
    Route::get('/specialty-cleaning', [ServiceController::class, 'specialtyCleaning'])->name('specialtyCleaning');
    // Route::get('/storm-disaster', [ServiceController::class, 'stormDisaster'])->name('stormDisaster');
    // Route::get('/roof-tarp-board-up', [ServiceController::class, 'roofTarpBoard'])->name('roofTarpBoard');
    // Route::get('/industries-serviced-up', [ServiceController::class, 'industriesServiced'])->name('industriesServiced');

});

