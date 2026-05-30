<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check(); // Require authenticated user
    }

    public function rules(): array
    {
        return [
            Blog::TITLE => 'required|string', // text column
            Blog::SLUG => 'nullable|string|unique:blogs,slug', // text column, unique
            Blog::SHORT_DESCRIPTION => 'nullable|string', // longText
            Blog::CONTENT => 'required|string', // longText
            Blog::FEATURED_IMAGE => 'required|image|mimes:jpeg,png,jpg,gif', // string(255), 5MB max
            Blog::STATUS => 'required|in:draft,published,archived', // enum
            Blog::PUBLISHED_AT => 'nullable|date', // dateTime
            Blog::META_TITLE => 'nullable|string|max:255', // string
            Blog::META_DESCRIPTION => 'nullable|string', // longText
        ];
    }

    public function messages(): array
    {
        return [
            Blog::TITLE . '.required' => 'The blog title is required.',
            Blog::TITLE . '.max' => 'The blog title cannot exceed 65535 characters.',
            Blog::SLUG . '.unique' => 'This slug is already in use.',
            Blog::SLUG . '.max' => 'The slug cannot exceed 65535 characters.',
            Blog::CONTENT . '.required' => 'The blog content is required.',
            Blog::FEATURED_IMAGE . '.required' => 'The featured image is required.',
            Blog::FEATURED_IMAGE . '.image' => 'The featured image must be an image file.',
            Blog::FEATURED_IMAGE . '.mimes' => 'The featured image must be a JPEG, PNG, JPG, or GIF.',
            Blog::FEATURED_IMAGE . '.max' => 'The featured image cannot exceed 5MB.',
            Blog::STATUS . '.required' => 'The status is required.',
            Blog::STATUS . '.in' => 'The status must be draft, published, or archived.',
            Blog::PUBLISHED_AT . '.date' => 'The published date must be a valid date.',
            Blog::META_TITLE . '.max' => 'The meta title cannot exceed 255 characters.'
        ];
    }
}
