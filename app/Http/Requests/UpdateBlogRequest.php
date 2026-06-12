<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBlogRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check(); // Require authenticated user
    }

    public function rules(): array
    {
        return [
            Blog::TITLE => 'required|string',
            Blog::SLUG => ['nullable', 'string', 'max:65535', Rule::unique('blogs', 'slug')->ignore($this->blog)],
            Blog::SHORT_DESCRIPTION => 'nullable|string',
            Blog::CONTENT => 'required|string',
            Blog::FEATURED_IMAGE => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            Blog::STATUS => 'required|in:draft,published,archived',
            Blog::PUBLISHED_AT => 'nullable|date',
            Blog::META_TITLE => 'nullable|string|max:255',
            Blog::META_DESCRIPTION => 'nullable|string',
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
