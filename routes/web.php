<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('home.master');
// });
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about.index');
Route::get('/service', [HomeController::class, 'service'])->name('service.index');
Route::get('/features', [HomeController::class, 'features'])->name('features.index');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog.index');
Route::get('/team', [HomeController::class, 'team'])->name('team.index');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial.index');
Route::get('/offer', [HomeController::class, 'offer'])->name('offer.index');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs.index');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.index');
Route::get('/get-started', [HomeController::class, 'getStarted'])->name('started.index');
Route::get('/features', [HomeController::class, 'features'])->name('features.index');


// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/about', [AdminController::class, 'about'])->name('admin.about');
    Route::get('/admin/services', [AdminController::class, 'service'])->name('admin.service');
    Route::get('/admin/features', [AdminController::class, 'features'])->name('admin.features');
    Route::get('/admin/blog', [AdminController::class, 'blog'])->name('admin.blog');
    Route::get('/admin/team', [AdminController::class, 'team'])->name('admin.team');
    Route::get('/admin/testimonial', [AdminController::class, 'testimonial'])->name('admin.testimonial');
    Route::get('/admin/offer', [AdminController::class, 'offer'])->name('admin.offer');
    Route::get('/admin/faqs', [AdminController::class, 'faqs'])->name('admin.faqs');
    Route::get('/admin/contact-us', [AdminController::class, 'contactUs'])->name('admin.contact');

    Route::get('/user/message', [MessageController::class, 'message'])->name('user.message');
    Route::get('/dashboard', [MessageController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
