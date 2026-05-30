@extends('layouts.admin')

@section('title', 'Edit Page')
@section('page-title', 'Edit Page')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5><i class="bi bi-pencil me-2"></i>Edit Page</h5>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Menu -->
                <div class="mb-3">
                    <label for="menu_id" class="form-label">Menu <span class="text-danger">*</span></label>
                    <select class="form-select" name="menu_id" required>
                        <option value="">Select Menu</option>
                        @foreach ($menus as $id => $title)
                            <option value="{{ $id }}" {{ $page->menu_id == $id ? 'selected' : '' }}>
                                {{ $title }}</option>
                        @endforeach
                    </select>
                    @error('menu_id')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" id="title"
                        value="{{ old('title', $page->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Slug -->
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug"
                        value="{{ old('slug', $page->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Short Description -->
                <div class="mb-3">
                    <label class="form-label">Short Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="short_descrption" id="short_descrption" rows="4" required>{{ old('short_descrption', $page->short_descrption) }}</textarea>
                    @error('short_descrption')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Sections -->
                <div class="mb-3">
                    <label class="form-label">Sections</label>
                    <div class="row">
                        @foreach ($sections as $id => $title)
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="sections[]"
                                        value="{{ $id }}" id="section_{{ $id }}"
                                        {{ in_array($id, old('sections', $page->sections->pluck('id')->toArray())) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="section_{{ $id }}">
                                        {{ $title }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Content (CKEditor) -->
                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="10">{{ old('content', $page->content) }}</textarea>
                </div>

                <!-- Banner Image -->
                <div class="mb-3">
                    <label class="form-label">Banner Image</label><br>
                    @if ($page->banner_image)
                        <img src="{{ asset('storage/' . $page->banner_image) }}" class="img-fluid mb-2" width="200">
                    @endif
                    <input type="file" name="banner_image" class="form-control">
                    @error('banner_image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Meta Title -->
                <div class="mb-3">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"
                        value="{{ old('meta_title', $page->meta_title) }}">
                </div>

                <!-- Meta Description -->
                <div class="mb-3">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control">{{ old('meta_description', $page->meta_description) }}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select">
                        <option value="draft" {{ old('status', $page->status) == 'draft' ? 'selected' : '' }}>Draft
                        </option>
                        <option value="published" {{ old('status', $page->status) == 'published' ? 'selected' : '' }}>
                            Published</option>
                        <option value="archived" {{ old('status', $page->status) == 'archived' ? 'selected' : '' }}>
                            Archived</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success"><i class="bi bi-save me-2"></i> Update Page</button>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left me-2"></i>
                    Back</a>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', 'link', '|',
                    'bulletedList', 'numberedList', 'outdent', 'indent', '|',
                    'blockQuote', 'insertTable', 'horizontalLine', 'codeBlock', '|',
                    'fontSize', 'fontColor', 'fontBackgroundColor', 'fontFamily', '|',
                    'alignment', '|',
                    'imageUpload', 'mediaEmbed', '|',
                    'undo', 'redo', '|',
                    'specialCharacters'
                ],
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        }
                    ]
                }
            })
            .then(editor => {
                const editable = editor.ui.view.editable.element;
                editable.style.minHeight = '400px'; // larger min height
                editable.style.maxHeight = '800px'; // max height with scroll
                editable.style.overflowY = 'auto'; // make content scrollable
            })
            .catch(console.error);

        // Auto-generate slug from title
        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');
        if (titleInput && slugInput) {
            titleInput.addEventListener('input', function() {
                slugInput.value = this.value.toLowerCase()
                    .replace(/ /g, '-')
                    .replace(/[^\w-]+/g, '');
            });
        }
    </script>
@endpush

@push('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 400px !important;
            max-height: 800px !important;
            overflow-y: auto;
        }
    </style>
@endpush
