@extends('layouts.admin')

@section('title', 'Form Elements')

@section('page-title', 'Form Elements')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Form Elements</li>
@endsection

@section('content')
<div data-page="forms">
    <div class="row">
        <!-- Basic Form Elements -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-ui-checks me-2"></i>
                        Basic Form Elements
                    </h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <!-- Text Input -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required placeholder="Enter your first name">
                            <div class="invalid-feedback">
                                Please provide a valid first name.
                            </div>
                        </div>
                        
                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="user@example.com">
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password Input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" required minlength="8" placeholder="Enter password">
                                <button class="btn btn-outline-secondary" type="button" id="togglePasswordDemo">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <div class="invalid-feedback">
                                    Password must be at least 8 characters long.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Number Input -->
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" class="form-control" id="age" name="age" min="18" max="100" required placeholder="Enter your age">
                            <div class="invalid-feedback">
                                Please provide a valid age (18-100).
                            </div>
                        </div>
                        
                        <!-- Phone Input -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890">
                            <div class="form-text">Format: 123-456-7890</div>
                        </div>
                        
                        <!-- URL Input -->
                        <div class="mb-3">
                            <label for="website" class="form-label">Website</label>
                            <input type="url" class="form-control" id="website" name="website" placeholder="https://example.com">
                        </div>
                        
                        <!-- Date Input -->
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" id="birthdate" name="birthdate">
                        </div>
                        
                        <!-- Time Input -->
                        <div class="mb-3">
                            <label for="meetingTime" class="form-label">Meeting Time</label>
                            <input type="time" class="form-control" id="meetingTime" name="meetingTime">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle me-2"></i>
                            Submit Form
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Advanced Form Elements -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-gear me-2"></i>
                        Advanced Form Elements
                    </h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <!-- Select Dropdown -->
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country" name="country" required>
                                <option value="">Choose a country...</option>
                                <option value="us">United States</option>
                                <option value="ca">Canada</option>
                                <option value="uk">United Kingdom</option>
                                <option value="au">Australia</option>
                                <option value="de">Germany</option>
                                <option value="fr">France</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a country.
                            </div>
                        </div>
                        
                        <!-- Multiple Select -->
                        <div class="mb-3">
                            <label for="skills" class="form-label">Skills</label>
                            <select class="form-select" id="skills" name="skills[]" multiple size="4">
                                <option value="html">HTML</option>
                                <option value="css">CSS</option>
                                <option value="js">JavaScript</option>
                                <option value="php">PHP</option>
                                <option value="python">Python</option>
                                <option value="java">Java</option>
                            </select>
                            <div class="form-text">Hold Ctrl (Cmd on Mac) to select multiple options.</div>
                        </div>
                        
                        <!-- Textarea -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message here..." required></textarea>
                            <div class="invalid-feedback">
                                Please provide a message.
                            </div>
                        </div>
                        
                        <!-- Range Input -->
                        <div class="mb-3">
                            <label for="experience" class="form-label">Years of Experience: <span id="experienceValue">5</span></label>
                            <input type="range" class="form-range" id="experience" name="experience" min="0" max="20" value="5">
                        </div>
                        
                        <!-- Color Input -->
                        <div class="mb-3">
                            <label for="favoriteColor" class="form-label">Favorite Color</label>
                            <input type="color" class="form-control form-control-color" id="favoriteColor" name="favoriteColor" value="#6366f1">
                        </div>
                        
                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="resume" class="form-label">Upload Resume</label>
                            <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx">
                            <div class="form-text">Accepted formats: PDF, DOC, DOCX (Max 5MB)</div>
                        </div>
                        
                        <!-- Multiple File Upload -->
                        <div class="mb-3">
                            <label for="portfolio" class="form-label">Portfolio Images</label>
                            <input type="file" class="form-control" id="portfolio" name="portfolio[]" multiple accept="image/*">
                            <div class="form-text">Select multiple image files</div>
                        </div>
                        
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-upload me-2"></i>
                            Upload & Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Checkboxes and Radio Buttons -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-check-square me-2"></i>
                        Checkboxes & Radio Buttons
                    </h5>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Checkboxes -->
                        <div class="mb-4">
                            <label class="form-label">Interests (Select multiple)</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="sports" id="sports" name="interests[]">
                                <label class="form-check-label" for="sports">
                                    <i class="bi bi-trophy me-2"></i>Sports
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="music" id="music" name="interests[]">
                                <label class="form-check-label" for="music">
                                    <i class="bi bi-music-note me-2"></i>Music
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="reading" id="reading" name="interests[]">
                                <label class="form-check-label" for="reading">
                                    <i class="bi bi-book me-2"></i>Reading
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="travel" id="travel" name="interests[]">
                                <label class="form-check-label" for="travel">
                                    <i class="bi bi-airplane me-2"></i>Travel
                                </label>
                            </div>
                        </div>
                        
                        <!-- Radio Buttons -->
                        <div class="mb-4">
                            <label class="form-label">Preferred Contact Method</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contact" id="contactEmail" value="email" checked>
                                <label class="form-check-label" for="contactEmail">
                                    <i class="bi bi-envelope me-2"></i>Email
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contact" id="contactPhone" value="phone">
                                <label class="form-check-label" for="contactPhone">
                                    <i class="bi bi-telephone me-2"></i>Phone
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="contact" id="contactSms" value="sms">
                                <label class="form-check-label" for="contactSms">
                                    <i class="bi bi-chat-text me-2"></i>SMS
                                </label>
                            </div>
                        </div>
                        
                        <!-- Switch -->
                        <div class="mb-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="notifications" name="notifications">
                                <label class="form-check-label" for="notifications">
                                    <i class="bi bi-bell me-2"></i>Enable Notifications
                                </label>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="newsletter" name="newsletter" checked>
                                <label class="form-check-label" for="newsletter">
                                    <i class="bi bi-envelope-heart me-2"></i>Subscribe to Newsletter
                                </label>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-info">
                            <i class="bi bi-save me-2"></i>
                            Save Preferences
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Input Groups and Validation -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="bi bi-input-cursor me-2"></i>
                        Input Groups & Validation
                    </h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <!-- Input with Prepend -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" name="username" required placeholder="username">
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Input with Append -->
                        <div class="mb-3">
                            <label for="domain" class="form-label">Website Domain</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="domain" name="domain" required placeholder="example">
                                <span class="input-group-text">.com</span>
                                <div class="invalid-feedback">
                                    Please provide a domain name.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Input with Button -->
                        <div class="mb-3">
                            <label for="searchTerm" class="form-label">Search</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="searchTerm" name="searchTerm" placeholder="Enter search term">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Currency Input -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" required placeholder="0.00">
                                <span class="input-group-text">.00</span>
                                <div class="invalid-feedback">
                                    Please provide a valid price.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Labels -->
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingName" placeholder="John Doe" required>
                                <label for="floatingName">Full Name</label>
                                <div class="invalid-feedback">
                                    Please provide your full name.
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" required>
                                    <option value="">Choose...</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label for="floatingSelect">Select an option</label>
                                <div class="invalid-feedback">
                                    Please select an option.
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
                                <label for="floatingTextarea">Comments</label>
                                <div class="invalid-feedback">
                                    Please provide a comment.
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-check-all me-2"></i>
                            Validate & Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Password toggle for demo form
        const togglePasswordDemo = document.getElementById('togglePasswordDemo');
        const passwordDemo = document.getElementById('password');
        
        if (togglePasswordDemo && passwordDemo) {
            togglePasswordDemo.addEventListener('click', function() {
                const type = passwordDemo.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordDemo.setAttribute('type', type);
                
                const icon = this.querySelector('i');
                icon.classList.toggle('bi-eye');
                icon.classList.toggle('bi-eye-slash');
            });
        }
        
        // Range input value display
        const experienceRange = document.getElementById('experience');
        const experienceValue = document.getElementById('experienceValue');
        
        if (experienceRange && experienceValue) {
            experienceRange.addEventListener('input', function() {
                experienceValue.textContent = this.value;
            });
        }
        
        // File upload preview
        const resumeInput = document.getElementById('resume');
        if (resumeInput) {
            resumeInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    AdminUtils.showToast(`Selected file: ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`, 'info');
                }
            });
        }
        
        // Portfolio images preview
        const portfolioInput = document.getElementById('portfolio');
        if (portfolioInput) {
            portfolioInput.addEventListener('change', function() {
                const files = this.files;
                if (files.length > 0) {
                    AdminUtils.showToast(`Selected ${files.length} image(s)`, 'success');
                }
            });
        }
        
        // Form submission demo
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (this.checkValidity()) {
                    AdminUtils.showToast('Form submitted successfully!', 'success');
                } else {
                    AdminUtils.showToast('Please fill in all required fields correctly.', 'error');
                }
            });
        });
    });
</script>
@endpush