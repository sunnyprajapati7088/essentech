<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OfferController as AdminOfferController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PageSectionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SeoDashboardController;
use App\Http\Controllers\Admin\SrnController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RefrigeratorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MicrowaveOvenController;
use App\Http\Controllers\AcController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WashingMachineController;
use App\Http\Controllers\WaterPurifierController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/home-appliances-repair-service', [PageController::class, 'landingPage'])->name('landing.page');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// Dedicated SEO Appliance Service Hubs & Recommended URLs
Route::get('/ac-service-repair-kochi', [AcController::class, 'index'])->name('ac.recommended');
Route::get('/ac', [AcController::class, 'index'])->name('ac.index');
Route::get('/ac/{brand}', [AcController::class, 'showBrand'])->name('ac.brand');

Route::get('/microwave-oven-repair-kochi', [MicrowaveOvenController::class, 'index'])->name('microwave.recommended');
Route::get('/microwave-oven', [MicrowaveOvenController::class, 'index'])->name('microwave.index');
Route::get('/microwave-oven/{brand}', [MicrowaveOvenController::class, 'showBrand'])->name('microwave.brand');

Route::get('/refrigerator-repair-service-kochi', [RefrigeratorController::class, 'index'])->name('refrigerator.recommended');
Route::get('/refrigerator', [RefrigeratorController::class, 'index'])->name('refrigerator.index');
Route::get('/refrigerator/{brand}', [RefrigeratorController::class, 'showBrand'])->name('refrigerator.brand');

Route::get('/washing-machine-repair-service-kochi', [WashingMachineController::class, 'index'])->name('washingMachine.recommended');
Route::get('/washing-machine', [WashingMachineController::class, 'index'])->name('washingMachine.index');
Route::get('/washing-machine/{brand}', [WashingMachineController::class, 'showBrand'])->name('washingMachine.brand');

Route::get('/water-purifier', [WaterPurifierController::class, 'index'])->name('waterPurifier.index');

// Dedicated Brands Showcase Hub
Route::get('/brands', [PageController::class, 'brands'])->name('brands.index');

// Public Offers & Deals Hub
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
Route::get('/offers/{slug}', [OfferController::class, 'show'])->name('offers.show');

// Dynamic XML Sitemap & Robots.txt
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.xml');
Route::get('/robots.txt', function () {
    return response(file_get_contents(public_path('robots.txt')), 200, ['Content-Type' => 'text/plain']);
})->name('robots.txt');

// Legacy Service Routes (Preserved for Backwards Compatibility & Direct Bookings)
Route::get('/service/ac-service', [ServiceController::class, 'acService'])->name('acServices');
Route::get('/service/washing-machine-repair', [ServiceController::class, 'washingMachineRepair'])->name('washingMachine');
Route::get('/service/refrigerator-repair', [ServiceController::class, 'refrigeratorRepair'])->name('refrigerator');
Route::get('/service/microwave-oven-repair', [ServiceController::class, 'microwaveOvenRepair'])->name('microWaveOpen');
Route::get('/service/installation-uninstallation', [ServiceController::class, 'installationUninstallation'])->name('installationUninstallation');
Route::get('/service/amc', [ServiceController::class, 'amc'])->name('amc');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Blog Routes (support both /blog and /blogs)
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blogs', [PageController::class, 'blog'])->name('blogs');
Route::get('/blog/{slug}', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/blogs/{slug}', [PageController::class, 'blogDetails'])->name('blogs.details');
Route::get('/contact/success', function () {
    return view('success');
})->name('contact.success');

Auth::routes();

// Admin routes
Route::prefix('admin')->group(function () {
    // Login / Logout
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

    // Register
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Dashboard (protected)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    });

    Route::get('/forms', [HomeController::class, 'forms'])->name('admin.forms');
    Route::get('/tables', [HomeController::class, 'tables'])->name('admin.tables');
    Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'destroy'])->names('admin.contacts');
    Route::get('contacts/export/csv', [\App\Http\Controllers\Admin\ContactController::class, 'exportCsv'])
        ->name('admin.contacts.export.csv');

    // Dynamic content routes
    Route::resource('menus', MenuController::class)->names('admin.menus');
    Route::resource('pages', AdminPageController::class)->names('admin.pages');
    Route::resource('sections', SectionController::class)->names('admin.sections');
    Route::resource('page-sections', PageSectionController::class)->names('admin.page-sections');
});

// Protected Admin Management Routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // SEO Dashboard
    Route::get('/seo-dashboard', [SeoDashboardController::class, 'index'])->name('seo.dashboard');

    // Blogs CRUD
    Route::resource('blogs', BlogController::class)->names('blogs');

    // Offers & Deals CRUD
    Route::resource('offers', AdminOfferController::class)->names('offers');

    // SRN Management
    Route::resource('srns', SrnController::class)->names('srns');

    // Ad Landing Pages
    Route::resource('landing-pages', \App\Http\Controllers\Admin\AdLandingPageController::class)->names('landing-pages');
    Route::post('landing-pages/{landing_page}/duplicate', [\App\Http\Controllers\Admin\AdLandingPageController::class, 'duplicate'])->name('landing-pages.duplicate');
    Route::get('landing-pages/{id}/preview', [\App\Http\Controllers\AdLandingPageController::class, 'preview'])->name('landing-pages.preview');
});

// Route for design section
Route::get('/all-design', [PageController::class, 'designSection'])->name('design.section');

// Ad Landing Page Lead Submission (AJAX + DB save + WhatsApp)
Route::post('/lp/lead/submit', [\App\Http\Controllers\AdLandingPageController::class, 'submitLead'])->name('landing.lead.submit');

Route::get('/{menu_slug}/{page_slug}', [PageController::class, 'detailsPage'])->name('pages.show');

// Fallback direct slug match for landing pages (e.g. /ads-washing-machine-repair)
Route::get('/{slug}', function ($slug) {
    $landingPage = \App\Models\AdLandingPage::where('slug', $slug)
        ->where('status', 'published')
        ->first();
    if ($landingPage) {
        return view('landing-pages.show', ['page' => $landingPage]);
    }
    abort(404);
})->name('landing.direct')->where('slug', '[a-zA-Z0-9\-_]+');
