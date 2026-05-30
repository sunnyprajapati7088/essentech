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

                    <!-- Featured Image -->
                    <div class="mb-3">
                        <label for="featured_image" class="form-label">Featured Image</label>
                        <input type="file" class="form-control" id="featured_image" name="{{ \App\Models\Blog::FEATURED_IMAGE }}" accept="image/jpeg,image/png,image/jpg,image/gif" aria-describedby="featuredImageHelp">
                        <div id="featuredImageHelp" class="form-text">Upload an image (JPEG, PNG, JPG, GIF, max 2MB).</div>
                        <div class="mt-2">
                            @if ($blog->featured_image)
                                <img id="featured_image_existing" src="{{ Storage::url($blog->featured_image) }}" alt="Current Featured Image" class="img-fluid" style="max-width: 200px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="{{ Storage::url($blog->featured_image) }}">
                            @endif
                            <img id="featured_image_preview" class="img-fluid mt-2 d-none" style="max-width: 200px; cursor: pointer;" alt="Featured Image Preview" data-bs-toggle="modal" data-bs-target="#imageModal" data-image="">
                        </div>
                        @error(\App\Models\Blog::FEATURED_IMAGE)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div class="mb-3">
                        <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select" id="status" name="{{ \App\Models\Blog::STATUS }}" required aria-describedby="statusHelp">
                            <option value="draft" {{ old(\App\Models\Blog::STATUS, $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ old(\App\Models\Blog::STATUS, $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                            <option value="archived" {{ old(\App\Models\Blog::STATUS, $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                        <div id="statusHelp" class="form-text">Choose the publication status.</div>
                        @error(\App\Models\Blog::STATUS)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Published At -->
                    <div class="mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input type="date" class="form-control" id="published_at" name="{{ \App\Models\Blog::PUBLISHED_AT }}" value="{{ old(\App\Models\Blog::PUBLISHED_AT, $blog->published_at ? $blog->published_at->format('Y-m-d') : date('Y-m-d')) }}" aria-describedby="publishedAtHelp">
                        <div id="publishedAtHelp" class="form-text">Select the publication date (defaults to today).</div>
                        @error(\App\Models\Blog::PUBLISHED_AT)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Meta Title -->
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="{{ \App\Models\Blog::META_TITLE }}" value="{{ old(\App\Models\Blog::META_TITLE, $blog->meta_title) }}" aria-describedby="metaTitleHelp">
                        <div id="metaTitleHelp" class="form-text">SEO title for search engines (max 255 characters).</div>
                        @error(\App\Models\Blog::META_TITLE)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Meta Description -->
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="{{ \App\Models\Blog::META_DESCRIPTION }}" rows="3">{{ old(\App\Models\Blog::META_DESCRIPTION, $blog->meta_description) }}</textarea>
                        @error(\App\Models\Blog::META_DESCRIPTION)
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
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
