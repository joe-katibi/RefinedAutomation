<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\TestimonialController;

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

    Route::post('/about-us', [AboutUsController::class, 'store'])->name('about_us.store');
    Route::get('/about-us/{id}/edit', [AboutUsController::class, 'edit'])->name('about_us.edit');
    Route::put('/about-us/{id}', [AboutUsController::class, 'update'])->name('about_us.update');
    Route::put('/about-us/{id}/inactivate', [AboutUsController::class, 'inactivate'])->name('about_us.inactivate');

    Route::post('/contacts', [ContactInfoController::class, 'store'])->name('contacts.store');
    Route::get('/contacts/{id}/edit', [ContactInfoController::class, 'edit'])->name('contacts.edit');
    Route::put('/contacts/{id}', [ContactInfoController::class, 'update'])->name('contacts.update');
    Route::put('/contacts/{id}/activate', [ContactInfoController::class, 'activate'])->name('contacts.activate');

    Route::post('/services', [ServicesController::class, 'storeService'])->name('services.store');
    Route::post('/services/category', [ServicesController::class, 'storeCategory'])->name('services_list.store');
    Route::put('/services/{id}/activate', [ServicesController::class, 'activateService'])->name('services.activate');

    // Routes for Editing and Updating
    Route::get('/services/{id}/edit', [ServicesController::class, 'editService'])->name('services.edit');
    Route::put('/services/{id}', [ServicesController::class, 'updateService'])->name('services.update');

    Route::get('/services/category/{id}/edit', [ServicesController::class, 'editCategory'])->name('services_list.edit');
    Route::put('/services/category/{id}', [ServicesController::class, 'updateCategory'])->name('services_list.update');

    Route::get('/services-list-more/create', [ServicesController::class, 'create'])->name('services_list_more.create');

//     Route::get('/features', [FeaturesController::class, 'index'])->name('features.index');
//     Route::post('/features', [FeaturesController::class, 'storeFeature'])->name('features.store');
//     Route::post('/feature-list', [FeaturesController::class, 'storeFeatureList'])->name('feature_list.store');
//    Route::post('/feature-list-more', [FeaturesController::class, 'storeFeatureListMore'])->name('feature_list_more.store');




//     Route::prefix('features')->group(function () {


//         // Store new feature
//         Route::post('/store', [FeaturesController::class, 'storeFeature'])->name('features.store');

//         // Store new feature category
//         Route::post('/category/store', [FeaturesController::class, 'storeFeatureList'])->name('feature_list.store');

//         // Store new subcategory for a feature category
//         Route::post('/subcategory/store', [FeaturesController::class, 'storeFeatureListMore'])->name('feature_list_more.store');

//         // Edit feature
//         Route::get('/{feature}/edit', [FeaturesController::class, 'editFeature'])->name('features.edit');
//         Route::put('/{feature}', [FeaturesController::class, 'updateFeature'])->name('features.update');

//         // Inactivate feature
//         Route::put('/{feature}/inactivate', [FeaturesController::class, 'inactivateFeature'])->name('features.inactivate');

//        // Edit feature category
//        Route::get('/category/{category}/edit', [FeaturesController::class, 'editFeatureList'])->name('feature_list.edit');
//        Route::put('/category/{category}', [FeaturesController::class, 'updateFeatureList'])->name('feature_list.update');

//        // Inactivate feature category
//        Route::put('/category/{category}/inactivate', [FeaturesController::class, 'inactivateFeatureList'])->name('feature_list.inactivate');

//         // Edit subcategory
//         Route::get('/subcategory/{subcategory}/edit', [FeaturesController::class, 'editFeatureListMore'])->name('feature_list_more.edit');
//         Route::put('/subcategory/{subcategory}', [FeaturesController::class, 'updateFeatureListMore'])->name('feature_list_more.update');

//         // Inactivate subcategory
//         Route::put('/subcategory/{subcategory}/inactivate', [FeaturesController::class, 'inactivateFeatureListMore'])->name('feature_list_more.inactivate');
//     });


    Route::post('/blogs/store', [BlogController::class, 'storeBlog'])->name('blogs.storeBlog');
    Route::post('/blogs/store-list', [BlogController::class, 'storeBlogList'])->name('blogs.storeBlogList');
    Route::post('/blogs/store-list-more', [BlogController::class, 'storeBlogListMore'])->name('blogs.storeBlogListMore');
    Route::patch('/blogs/inactivate/{id}', [BlogController::class, 'inactivateBlog'])->name('blogs.inactivateBlog');
    Route::patch('/blogs/inactivate-list/{id}', [BlogController::class, 'inactivateBlogList'])->name('blogs.inactivateBlogList');
    Route::patch('/blogs/inactivate-list-more/{id}', [BlogController::class, 'inactivateBlogListMore'])->name('blogs.inactivateBlogListMore');


    Route::resource('teams', TeamController::class);
    Route::put('teams/{id}/activate', [TeamController::class, 'activate'])->name('teams.activate');

    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
    Route::post('testimonials', [TestimonialController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::post('testimonials-list', [TestimonialController::class, 'storeTestimonialsList'])->name('testimonials_list.store');
    Route::put('testimonials/{id}/status', [TestimonialController::class, 'updateTestimonialStatus'])->name('testimonials.status');
    Route::put('testimonials-list/{id}/status', [TestimonialController::class, 'updateTestimonialsListStatus'])->name('testimonials_list.status');

    Route::get('offers', [OfferController::class, 'index'])->name('offers.index');
    Route::post('offers', [OfferController::class, 'storeOffer'])->name('offers.store');
    Route::post('offers-list', [OfferController::class, 'storeOffersList'])->name('offers_list.store');
    Route::put('offers/{id}/status', [OfferController::class, 'updateOfferStatus'])->name('offers.status');
    Route::put('offers-list/{id}/status', [OfferController::class, 'updateOffersListStatus'])->name('offers_list.status');
    Route::put('offers-list-more/{id}/status', [OfferController::class, 'updateOffersListMoreStatus'])->name('offers_list_more.status');

    Route::get('faqs', [FaqsController::class, 'index'])->name('faqs.index');
    Route::post('faqs', [FaqsController::class, 'storeFaq'])->name('faqs.store');
    Route::post('faqs/list', [FaqsController::class, 'storeFaqsList'])->name('faqs.list.store');
    Route::put('faqs/{id}/inactivate', [FaqsController::class, 'inactivate'])->name('faqs.inactivate');
    Route::put('faqs/list/{id}/inactivate', [FaqsController::class, 'inactivateFaqsList'])->name('faqs.list.inactivate');






    Route::get('/user/message', [MessageController::class, 'message'])->name('user.message');
    Route::get('/dashboard', [MessageController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
