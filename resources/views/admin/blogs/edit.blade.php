@extends('layouts.admin')

@section('title', 'Edit Blog')

@section('page-title', 'Edit Blog')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Blogs</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">
                    <i class="bi bi-pencil me-2"></i>
                    Edit Blog: {{ $blog->title }}
                </h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form id="editBlogForm" action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PATCH')

                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="{{ \App\Models\Blog::TITLE }}" value="{{ old(\App\Models\Blog::TITLE, $blog->title) }}" required placeholder="Enter blog title" aria-describedby="titleHelp">
                        <div id="titleHelp" class="form-text">The title of your blog post (max 255 characters).</div>
                        @error(\App\Models\Blog::TITLE)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="{{ \App\Models\Blog::SLUG }}" value="{{ old(\App\Models\Blog::SLUG, $blog->slug) }}" placeholder="Auto-generated from title" aria-describedby="slugHelp">
                        <div id="slugHelp" class="form-text">Unique URL-friendly identifier (auto-generated if empty).</div>
                        @error(\App\Models\Blog::SLUG)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Short Description -->
                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" id="short_description" name="{{ \App\Models\Blog::SHORT_DESCRIPTION }}" rows="3" placeholder="Enter short description">{{ old(\App\Models\Blog::SHORT_DESCRIPTION, $blog->short_description) }}</textarea>
                        @error(\App\Models\Blog::SHORT_DESCRIPTION)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Content (CKEditor) -->
                    <div class="mb-3">
                        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="content" name="{{ \App\Models\Blog::CONTENT }}" rows="10" required>{{ old(\App\Models\Blog::CONTENT, $blog->content) }}</textarea>
                        @error(\App\Models\Blog::CONTENT)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Featured Image & Alt -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/jpeg,image/png,image/jpg,image/webp">
                            <div class="form-text">Upload to replace (JPEG, PNG, JPG, or WEBP, max 5MB).</div>
                            @if ($blog->featured_image)
                            <div class="mt-2">
                                <small class="text-muted">Current: <a href="{{ asset('storage/' . $blog->featured_image) }}" target="_blank">View image</a></small>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="image_alt" class="form-label">Image Alt Text (SEO)</label>
                            <input type="text" class="form-control" id="image_alt" name="image_alt" value="{{ old('image_alt', $blog->image_alt) }}" placeholder="Descriptive alt text for image">
                            <div class="form-text">Explains image content to search engines and screen readers.</div>
                        </div>
                    </div>

                    <!-- Category & Author -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label for="category" class="form-label">Appliance Category</label>
                            <select class="form-select" id="category" name="category">
                                <option value="general" {{ old('category', $blog->category) == 'general' ? 'selected' : '' }}>General Appliance</option>
                                <option value="ac" {{ old('category', $blog->category) == 'ac' ? 'selected' : '' }}>Air Conditioner (AC)</option>
                                <option value="microwave" {{ old('category', $blog->category) == 'microwave' ? 'selected' : '' }}>Microwave Oven</option>
                                <option value="refrigerator" {{ old('category', $blog->category) == 'refrigerator' ? 'selected' : '' }}>Refrigerator & Fridge</option>
                                <option value="washing-machine" {{ old('category', $blog->category) == 'washing-machine' ? 'selected' : '' }}>Washing Machine</option>
                                <option value="water-purifier" {{ old('category', $blog->category) == 'water-purifier' ? 'selected' : '' }}>RO & Water Purifier</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="author_name" class="form-label">Author Name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" value="{{ old('author_name', $blog->author_name ?? 'EssenTechs Technical Team') }}">
                        </div>
                        <div class="col-md-4">
                            <label for="tags" class="form-label">Tags (comma-separated)</label>
                            <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $blog->tags) }}">
                        </div>
                    </div>

                    <!-- Status & Published At -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published (Live on site)</option>
                                <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="scheduled" {{ old('status', $blog->status) == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                <option value="archived" {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="published_at" class="form-label">Published At</label>
                            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d') : date('Y-m-d')) }}">
                        </div>
                    </div>

                    <!-- SEO Optimization Section -->
                    <div class="card bg-light border-0 p-3 mb-4 rounded-3">
                        <h6 class="fw-bold mb-3 text-primary"><i class="bi bi-google me-2"></i>SEO & Structured Data Settings</h6>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="focus_keyword" class="form-label small fw-bold">Focus Keyword</label>
                                <input type="text" class="form-control form-control-sm" id="focus_keyword" name="focus_keyword" value="{{ old('focus_keyword', $blog->focus_keyword) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="schema_type" class="form-label small fw-bold">Schema Structured Data Type</label>
                                <select class="form-select form-select-sm" id="schema_type" name="schema_type">
                                    <option value="Article" {{ old('schema_type', $blog->schema_type) == 'Article' ? 'selected' : '' }}>Article</option>
                                    <option value="TechArticle" {{ old('schema_type', $blog->schema_type) == 'TechArticle' ? 'selected' : '' }}>TechArticle</option>
                                    <option value="HowTo" {{ old('schema_type', $blog->schema_type) == 'HowTo' ? 'selected' : '' }}>HowTo</option>
                                    <option value="BlogPosting" {{ old('schema_type', $blog->schema_type) == 'BlogPosting' ? 'selected' : '' }}>BlogPosting</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="meta_title" class="form-label small fw-bold">Meta Title</label>
                            <input type="text" class="form-control form-control-sm" id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}">
                        </div>

                        <div class="mb-3">
                            <label for="meta_description" class="form-label small fw-bold">Meta Description</label>
                            <textarea class="form-control form-control-sm" id="meta_description" name="meta_description" rows="2">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="canonical_url" class="form-label small fw-bold">Canonical URL</label>
                                <input type="text" class="form-control form-control-sm" id="canonical_url" name="canonical_url" value="{{ old('canonical_url', $blog->canonical_url) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="secondary_keywords" class="form-label small fw-bold">Secondary Keywords</label>
                                <input type="text" class="form-control form-control-sm" id="secondary_keywords" name="secondary_keywords" value="{{ old('secondary_keywords', $blog->secondary_keywords) }}">
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button with Loader -->
                    <button type="submit" class="btn btn-primary" id="submitButton">
                        <span class="default-text"><i class="bi bi-save me-2"></i>Update Blog</span>
                        <span class="loading-text d-none"><span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Saving...</span>
                    </button>
                </form>

                <!-- Image Preview Modal -->
                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img id="full_image" class="img-fluid" alt="Full Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .ck-editor__editable_inline {
        min-height: 200px; /* Approximates 10 rows */
        max-height: 300px; /* Prevent excessive growth */
        overflow-y: auto; /* Enable scrolling */
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    // Initialize CKEditor
    ClassicEditor
        .create(document.querySelector('#content'), {
            height: '200px',
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'undo', 'redo']
        })
        .catch(error => {
            console.error(error);
        });

    // Auto-generate slug from title if changed
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    if (titleInput && slugInput) {
        titleInput.addEventListener('input', function() {
            slugInput.value = this.value.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
        });
    }

    // Submit button loader
    document.getElementById('editBlogForm').addEventListener('submit', function() {
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.querySelector('.default-text').classList.add('d-none');
        submitButton.querySelector('.loading-text').classList.remove('d-none');
    });

    // Image preview for featured_image
    document.getElementById('featured_image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('featured_image_preview');
        const existing = document.getElementById('featured_image_existing');
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
                preview.dataset.image = e.target.result;
                if (existing) existing.classList.add('d-none'); // Hide existing image
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.classList.add('d-none');
            preview.dataset.image = '';
            if (existing) existing.classList.remove('d-none'); // Show existing image
        }
    });

    // Image preview for og_image
    document.getElementById('og_image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('og_image_preview');
        const existing = document.getElementById('og_image_existing');
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('d-none');
                preview.dataset.image = e.target.result;
                if (existing) existing.classList.add('d-none'); // Hide existing image
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.classList.add('d-none');
            preview.dataset.image = '';
            if (existing) existing.classList.remove('d-none'); // Show existing image
        }
    });

    // Modal image display
    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(img => {
        img.addEventListener('click', function() {
            const fullImage = document.getElementById('full_image');
            fullImage.src = this.dataset.image;
        });
    });
</script>
@endpush
