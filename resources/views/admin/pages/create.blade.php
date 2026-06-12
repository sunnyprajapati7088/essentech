@extends('layouts.admin')

@section('title', 'Create Page')
@section('page-title', 'Create Page')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Pages</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5><i class="bi bi-plus-circle me-2"></i>Create Page</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Menu -->
                <div class="mb-3">
                    <label for="menu_id" class="form-label">Menu <span class="text-danger">*</span></label>
                    <select class="form-select" name="menu_id" required>
                        <option value="">Select Menu</option>
                        @foreach ($menus as $id => $title)
                            <option value="{{ $id }}" {{ old('menu_id') == $id ? 'selected' : '' }}>
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
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"
                        required>
                    @error('title')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Slug -->
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug') }}">
                    @error('slug')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Short Description -->
                <div class="mb-3">
                    <label class="form-label">Short Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="short_descrption" id="short_descrption" rows="4" required>{{ old('short_description') }}</textarea>
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
                                        {{ in_array($id, old('sections', [])) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="section_{{ $id }}">
                                        {{ $title }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @error('sections')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content (CKEditor) -->
                <div class="mb-3">
                    <label class="form-label">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="10">{{ old('content') }}</textarea>
                </div>

                <!-- Banner Image -->
                <div class="mb-3">
                    <label class="form-label">Banner Image <span class="text-danger">*</span></label>
                    <input type="file" name="banner_image" class="form-control">
                    @error('banner_image')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Meta Title -->
                <div class="mb-3">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
                </div>

                <!-- Meta Description -->
                <div class="mb-3">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status">
                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                        <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-2"></i>Save Page</button>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary"><i
                        class="bi bi-arrow-left me-2"></i>Back</a>
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
                },
                fontSize: {
                    options: [9, 11, 13, 'default', 17, 19, 21, 24, 28, 32, 36]
                },
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ]
                },
                alignment: {
                    options: ['left', 'center', 'right', 'justify']
                },
                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', '|', 'imageTextAlternative']
                },
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                }
            })
            .then(editor => {
                // Increase editor height
                const editable = editor.ui.view.editable.element;
                editable.style.minHeight = '400px'; // bigger min height
                editable.style.maxHeight = '800px'; // maximum height with scroll
                editable.style.overflowY = 'auto';
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
