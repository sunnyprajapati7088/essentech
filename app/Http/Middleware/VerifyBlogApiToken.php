<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Protects the blog automation API (used by the EssenTechs MCP server).
 * Requests must send:  Authorization: Bearer <BLOG_API_TOKEN>
 */
class VerifyBlogApiToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $expected = (string) config('services.blog_api.token');

        if ($expected === '' || strlen($expected) < 32) {
            return response()->json(['message' => 'Blog API is disabled (BLOG_API_TOKEN not set or shorter than 32 characters).'], 503);
        }

        $given = (string) $request->bearerToken();

        if ($given === '' || ! hash_equals($expected, $given)) {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }

        return $next($request);
    }
}
