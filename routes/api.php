<?php

use App\Http\Controllers\Api\AdLandingPageApiController;
use App\Http\Controllers\Api\BlogApiController;
use App\Http\Middleware\VerifyBlogApiToken;
use Illuminate\Support\Facades\Route;

// Blog + Ad Landing Page automation API (used by the EssenTechs MCP server in /mcp/essentechs-blog).
// Auth: "Authorization: Bearer <BLOG_API_TOKEN>". No delete endpoint on purpose.
Route::prefix('blog-automation')
    ->middleware([VerifyBlogApiToken::class, 'throttle:60,1'])
    ->group(function () {
        Route::get('/blogs', [BlogApiController::class, 'index']);
        Route::get('/blogs/{id}', [BlogApiController::class, 'show'])->whereNumber('id');
        Route::post('/blogs', [BlogApiController::class, 'store']);
        Route::patch('/blogs/{id}', [BlogApiController::class, 'update'])->whereNumber('id');

        // Ad Landing Pages (served publicly at /{slug})
        Route::get('/ad-pages', [AdLandingPageApiController::class, 'index']);
        Route::get('/ad-pages/{id}', [AdLandingPageApiController::class, 'show'])->whereNumber('id');
        Route::post('/ad-pages', [AdLandingPageApiController::class, 'store']);
        Route::patch('/ad-pages/{id}', [AdLandingPageApiController::class, 'update'])->whereNumber('id');
        Route::post('/ad-pages/{id}/duplicate', [AdLandingPageApiController::class, 'duplicate'])->whereNumber('id');
    });
