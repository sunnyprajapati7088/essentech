<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PageSectionController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SrnController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/home-appliances-repair-service', [PageController::class, 'landingPage'])->name('landing.page');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::get('/service/ac-service', [ServiceController::class, 'acService'])->name('acServices');
Route::get('/service/washing-machine-repair', [ServiceController::class, 'washingMachineRepair'])->name('washingMachine');
Route::get('/service/refrigerator-repair', [ServiceController::class, 'refrigeratorRepair'])->name('refrigerator');
Route::get('/service/microwave-oven-repair', [ServiceController::class, 'microwaveOvenRepair'])->name('microWaveOpen');
Route::get('/service/installation-uninstallation', [ServiceController::class, 'installationUninstallation'])->name('installationUninstallation');
Route::get('/service/amc', [ServiceController::class, 'amc'])->name('amc');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
// Blog Routes
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/contact/success', function () {
    return view('success');
})->name('contact.success');


Auth::routes();
// Default auth routes but disable frontend register

// Admin routes
Route::prefix('admin')->group(function () {
    // Login / Logout
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');

    // Register (if you want it enabled for admin users)
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('admin.register');
    Route::post('/register', [RegisterController::class, 'register']);

    // Dashboard (protected)
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    });
    // create route for forms and table
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
// Route for design section
Route::get('/all-design', [PageController::class, 'designSection'])->name('design.section');
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // List
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    // Store (form action to create)
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    // Update (form action to edit)
    Route::match(['put', 'patch'], '/blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    // Edit form
    Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    // Details
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
    // Delete (optional, but added for full CRUD)
    Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/srns', [SrnController::class, 'index'])->name('srns.index');
    Route::get('/srns/create', [SrnController::class, 'create'])->name('srns.create');
    Route::post('/srns', [SrnController::class, 'store'])->name('srns.store');
    Route::get('/srns/{srn}/edit', [SrnController::class, 'edit'])->name('srns.edit');
    Route::put('/srns/{srn}', [SrnController::class, 'update'])->name('srns.update');
    Route::delete('/srns/{srn}', [SrnController::class, 'destroy'])->name('srns.destroy');
    Route::get('/srns/{srn}', [SrnController::class, 'show'])->name('srns.show');
});
Route::get('/{menu_slug}/{page_slug}', [PageController::class, 'detailsPage'])->name('pages.show');
