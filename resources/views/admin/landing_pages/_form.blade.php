@csrf

<div class="row">
    <!-- Main Content Left (Tabs) -->
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3 mb-4">
            <div class="card-header bg-white border-bottom pt-3 pb-0">
                <ul class="nav nav-tabs card-header-tabs" id="pageTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fw-semibold" id="hero-tab" data-bs-toggle="tab" data-bs-target="#tab-hero" type="button" role="tab">
                            <i class="bi bi-layout-text-window-reverse me-1 text-primary"></i> 1. Hero & Core
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="brands-tab" data-bs-toggle="tab" data-bs-target="#tab-brands" type="button" role="tab">
                            <i class="bi bi-tags me-1 text-success"></i> 2. Brands & Badges
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="card-tab" data-bs-toggle="tab" data-bs-target="#tab-card" type="button" role="tab">
                            <i class="bi bi-card-checklist me-1 text-warning"></i> 3. Service Card & Modal
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="seo-tab" data-bs-toggle="tab" data-bs-target="#tab-seo" type="button" role="tab">
                            <i class="bi bi-google me-1 text-danger"></i> 4. SEO Suite & Meta
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fw-semibold" id="scripts-tab" data-bs-toggle="tab" data-bs-target="#tab-scripts" type="button" role="tab">
                            <i class="bi bi-code-slash me-1 text-info"></i> 5. Tracking Scripts
                        </button>
                    </li>
                </ul>
            </div>

            <div class="card-body p-4">
                <div class="tab-content" id="pageTabsContent">
                    
                    <!-- TAB 1: HERO & CORE CONTENT -->
                    <div class="tab-pane fade show active" id="tab-hero" role="tabpanel">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-stars text-primary me-2"></i>Page Basics & Hero Banner</h5>
                        
                        <div class="row g-3">
                            <div class="col-md-7">
                                <label class="form-label fw-semibold">Internal Admin Page Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="pageTitleInput" class="form-control @error('title') is-invalid @enderror" 
                                       value="{{ old('title', $page->title) }}" placeholder="e.g. Ads Washing Machine Repair" required>
                                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                <div class="form-text">Used to identify this campaign in the admin list.</div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-label fw-semibold">URL Slug <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-muted">/</span>
                                    <input type="text" name="slug" id="slugInput" class="form-control @error('slug') is-invalid @enderror" 
                                           value="{{ old('slug', $page->slug) }}" placeholder="ads-washing-machine-repair" required>
                                </div>
                                @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                <div class="form-text">Will be accessible at: <span id="slugPreview" class="text-primary fw-semibold">/{{ $page->slug ?: 'ads-slug' }}</span></div>
                            </div>

                            <hr class="my-3 text-muted">

                            <div class="col-12">
                                <label class="form-label fw-semibold">Top Pill Badge Text</label>
                                <input type="text" name="hero_badge" class="form-control" 
                                       value="{{ old('hero_badge', $page->hero_badge) }}" placeholder="ESSENTECHS · DOORSTEP SERVICE">
                                <div class="form-text">Small mint badge displayed right above the main title.</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Main Hero Headline <span class="text-danger">*</span></label>
                                <input type="text" name="hero_title" id="heroTitleInput" class="form-control form-control-lg @error('hero_title') is-invalid @enderror" 
                                       value="{{ old('hero_title', $page->hero_title) }}" placeholder="WASHING MACHINE SERVICE CENTRE" required>
                                @error('hero_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                <div class="form-text">The primary H1 headline of your landing page.</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Hero Subtitle / Highlight Text</label>
                                <textarea name="hero_subtitle" rows="2" class="form-control" 
                                          placeholder="Professional AC repair and service at your doorstep.">{{ old('hero_subtitle', $page->hero_subtitle) }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Primary CTA Button Text</label>
                                <input type="text" name="primary_cta_text" class="form-control" 
                                       value="{{ old('primary_cta_text', $page->primary_cta_text) }}" placeholder="Book Washing Machine Service">
                                <div class="form-text">Clicking this opens the quick WhatsApp booking modal.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Primary Phone CTA (Display & Tel)</label>
                                <input type="text" name="primary_phone" class="form-control" 
                                       value="{{ old('primary_phone', $page->primary_phone) }}" placeholder="+91 97467 00889">
                                <div class="form-text">Shown next to the CTA button with phone icon.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Target WhatsApp Number (Digits only with country code)</label>
                                <input type="text" name="whatsapp_number" class="form-control" 
                                       value="{{ old('whatsapp_number', $page->whatsapp_number) }}" placeholder="919746700889">
                                <div class="form-text">Where leads and inquiries will be sent via WhatsApp.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Theme Accent Color</label>
                                <div class="input-group">
                                    <input type="color" name="theme_color" class="form-control form-control-color" 
                                           value="{{ old('theme_color', $page->theme_color ?: '#FF800F') }}" title="Choose theme color">
                                    <input type="text" class="form-control" value="{{ old('theme_color', $page->theme_color ?: '#FF800F') }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label fw-semibold">Hero Technician Image</label>
                                <input type="file" name="hero_image" class="form-control @error('hero_image') is-invalid @enderror" accept="image/*">
                                @error('hero_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                <div class="form-text">High-res picture of technician or service (shown on desktop left).</div>
                                @if($page->hero_image)
                                    <div class="mt-2 d-flex align-items-center">
                                        <img src="{{ $page->hero_image_url }}" alt="Hero Preview" class="img-thumbnail me-2" style="max-height: 70px;">
                                        <span class="small text-muted">Current hero image</span>
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Hero Image Alt Tag (SEO)</label>
                                <input type="text" name="hero_image_alt" class="form-control" 
                                       value="{{ old('hero_image_alt', $page->hero_image_alt) }}" placeholder="Technician repairing washing machine">
                                <div class="form-text">Crucial for Google Image search ranking.</div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 2: BRANDS MARQUEE & TRUST BADGES -->
                    <div class="tab-pane fade" id="tab-brands" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold text-dark mb-0"><i class="bi bi-tag-fill text-success me-2"></i>Brands We Serve Marquee Banner</h5>
                            <div class="form-check form-switch fs-5">
                                <input class="form-check-input" type="checkbox" name="show_brands" value="1" id="showBrandsCheck"
                                       {{ old('show_brands', $page->show_brands ?? true) ? 'checked' : '' }}>
                                <label class="form-check-label fs-6 fw-semibold text-muted" for="showBrandsCheck">Enable Marquee</label>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Marquee Heading</label>
                                <input type="text" name="brands_heading" class="form-control" 
                                       value="{{ old('brands_heading', $page->brands_heading ?: 'BRANDS WE SERVE') }}" placeholder="BRANDS WE SERVE">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Banner Background</label>
                                <input type="color" name="brands_bg_color" class="form-control form-control-color w-100" 
                                       value="{{ old('brands_bg_color', $page->brands_bg_color ?: '#001064') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Text Color</label>
                                <input type="color" name="brands_text_color" class="form-control form-control-color w-100" 
                                       value="{{ old('brands_text_color', $page->brands_text_color ?: '#FFFFFF') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Brands List (Comma separated or one per line)</label>
                                <textarea name="brands_list" rows="3" class="form-control" 
                                          placeholder="LG, VOLTAS, SAMSUNG, HAIER, BLUE STAR, CARRIER, IFB, LLYOD, HITACHI, O GENERAL, MITSUBISHI ELECTRIC">{{ old('brands_list', $page->brands_list) }}</textarea>
                                <div class="form-text">Each brand will be looped continuously with bullet separators in the green marquee.</div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold text-dark mb-0"><i class="bi bi-shield-check text-success me-2"></i>Trust Badges & Value Propositions</h5>
                            <div class="form-check form-switch fs-5">
                                <input class="form-check-input" type="checkbox" name="show_trust_badges" value="1" id="showTrustCheck"
                                       {{ old('show_trust_badges', $page->show_trust_badges ?? true) ? 'checked' : '' }}>
                                <label class="form-check-label fs-6 fw-semibold text-muted" for="showTrustCheck">Enable Strip</label>
                            </div>
                        </div>
                        <p class="text-muted small">Highlights shown right below the brands marquee (e.g. 30-min arrival, warranty, etc.)</p>

                        <div id="trustBadgesContainer" class="row g-2">
                            @php
                                $badges = old('trust_badge_texts') ? array_map(function($t, $i) use ($request) {
                                    return ['text' => $t, 'icon' => old('trust_badge_icons')[$i] ?? 'bi bi-check-circle-fill'];
                                }, old('trust_badge_texts'), array_keys(old('trust_badge_texts'))) : ($page->trust_badges ?: [
                                    ['icon' => 'bi bi-check-circle-fill', 'text' => 'On-site inspection'],
                                    ['icon' => 'bi bi-gear-wide-connected', 'text' => 'Experienced technicians'],
                                    ['icon' => 'bi bi-clock-history', 'text' => "We'll arrive in 30 minutes"],
                                    ['icon' => 'bi bi-shield-check', 'text' => 'Service warranty on eligible repairs'],
                                ]);
                            @endphp

                            @foreach($badges as $index => $b)
                                <div class="col-md-6 badge-item mb-2">
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="{{ $b['icon'] ?? 'bi bi-check-circle-fill' }}"></i></span>
                                        <input type="hidden" name="trust_badge_icons[]" value="{{ $b['icon'] ?? 'bi bi-check-circle-fill' }}">
                                        <input type="text" name="trust_badge_texts[]" class="form-control" value="{{ $b['text'] ?? '' }}" placeholder="Badge text">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- TAB 3: SERVICE OFFER CARD & BOOKING MODAL -->
                    <div class="tab-pane fade" id="tab-card" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold text-dark mb-0"><i class="bi bi-card-text text-warning me-2"></i>Service Offer Card</h5>
                            <div class="form-check form-switch fs-5">
                                <input class="form-check-input" type="checkbox" name="show_service_card" value="1" id="showServiceCardCheck"
                                       {{ old('show_service_card', $page->show_service_card ?? true) ? 'checked' : '' }}>
                                <label class="form-check-label fs-6 fw-semibold text-muted" for="showServiceCardCheck">Enable Card</label>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Card Badge Tag</label>
                                <input type="text" name="card_badge" class="form-control" 
                                       value="{{ old('card_badge', $page->card_badge ?: 'WASHING MACHINE') }}" placeholder="WASHING MACHINE">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label fw-semibold">Card Title</label>
                                <input type="text" name="card_title" class="form-control" 
                                       value="{{ old('card_title', $page->card_title ?: 'Washing Machine Repair') }}" placeholder="Washing Machine Repair">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Card Short Description</label>
                                <textarea name="card_description" rows="2" class="form-control" 
                                          placeholder="Front-load and top-load washing machine repairs, installation and PCB servicing.">{{ old('card_description', $page->card_description) }}</textarea>
                            </div>

                            <div class="col-md-7">
                                <label class="form-label fw-semibold">Card Image</label>
                                <input type="file" name="card_image" class="form-control" accept="image/*">
                                @if($page->card_image)
                                    <div class="mt-2 d-flex align-items-center">
                                        <img src="{{ $page->card_image_url }}" alt="Card Preview" class="img-thumbnail me-2" style="max-height: 60px;">
                                        <span class="small text-muted">Current card image</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-5">
                                <label class="form-label fw-semibold">Card Image Alt Tag</label>
                                <input type="text" name="card_image_alt" class="form-control" 
                                       value="{{ old('card_image_alt', $page->card_image_alt) }}" placeholder="Washing Machine Repair Service">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Checklist Features (One per line)</label>
                                <textarea name="card_features" rows="5" class="form-control" 
                                          placeholder="Installation of new units&#10;Drum & motor repair&#10;Water leakage fixing&#10;PCB repair & replacement&#10;Noise & vibration issues">{{ old('card_features', $page->card_features) }}</textarea>
                                <div class="form-text">Each line will be styled with an emerald green checkmark (✓).</div>
                            </div>

                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Button 1 Text ("Learn More")</label>
                                <input type="text" name="card_learn_more_text" class="form-control" 
                                       value="{{ old('card_learn_more_text', $page->card_learn_more_text ?: 'Learn More') }}">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Button 1 Target URL / Action</label>
                                <input type="text" name="card_learn_more_link" class="form-control" 
                                       value="{{ old('card_learn_more_link', $page->card_learn_more_link ?: '#learn-more') }}" placeholder="#modal or URL">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label fw-semibold">Button 2 Text ("Book Now")</label>
                                <input type="text" name="card_book_now_text" class="form-control" 
                                       value="{{ old('card_book_now_text', $page->card_book_now_text ?: 'Book Now') }}">
                            </div>
                        </div>

                        <hr class="my-4">

                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-chat-square-dots-fill text-success me-2"></i>Lead WhatsApp Modal & Floating Widget</h5>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Modal Title</label>
                                <input type="text" name="modal_title" class="form-control" 
                                       value="{{ old('modal_title', $page->modal_title ?: 'Book Washing Machine Service') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Modal Subtitle</label>
                                <input type="text" name="modal_subtitle" class="form-control" 
                                       value="{{ old('modal_subtitle', $page->modal_subtitle ?: 'Fill in your details and contact us on WhatsApp.') }}">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Service Dropdown Options (One per line)</label>
                                <textarea name="service_options" rows="4" class="form-control" 
                                          placeholder="Washing Machine Repair&#10;Washing Machine Service&#10;Washing Machine Installation&#10;Washing Machine Inspection">{{ old('service_options', $page->service_options) }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Problem Dropdown Options (One per line)</label>
                                <textarea name="problem_options" rows="4" class="form-control" 
                                          placeholder="Machine Not Starting&#10;Water Not Filling&#10;Water Not Draining&#10;Not Spinning&#10;Excessive Vibration&#10;Water Leakage&#10;Door / Lid Problem&#10;Other Problem">{{ old('problem_options', $page->problem_options) }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Show Floating Action Button</label>
                                <div class="form-check form-switch fs-5">
                                    <input class="form-check-input" type="checkbox" name="show_floating_button" value="1" id="showFloatingCheck"
                                           {{ old('show_floating_button', $page->show_floating_button ?? true) ? 'checked' : '' }}>
                                    <label class="form-check-label fs-6 fw-semibold text-muted" for="showFloatingCheck">Enable floating contact button</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Floating Button Mode</label>
                                <select name="floating_button_type" class="form-select">
                                    <option value="both" {{ old('floating_button_type', $page->floating_button_type) === 'both' ? 'selected' : '' }}>Both WhatsApp & Call</option>
                                    <option value="whatsapp" {{ old('floating_button_type', $page->floating_button_type) === 'whatsapp' ? 'selected' : '' }}>WhatsApp Only</option>
                                    <option value="call" {{ old('floating_button_type', $page->floating_button_type) === 'call' ? 'selected' : '' }}>Phone Call Only</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 4: COMPLETE SEO SUITE (USER CRITICAL EMPHASIS) -->
                    <div class="tab-pane fade" id="tab-seo" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="fw-bold text-dark mb-0"><i class="bi bi-search text-danger me-2"></i>Comprehensive SEO Suite & Meta Tags</h5>
                            <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1">
                                <i class="bi bi-shield-check me-1"></i> Search Engine Optimized
                            </span>
                        </div>
                        <p class="text-muted small">Everything required to rank on Google, generate rich search snippets, and display rich social cards on WhatsApp, Facebook & Twitter.</p>

                        <!-- Google Live SERP Preview -->
                        <div class="p-3 bg-light border rounded-3 mb-4">
                            <div class="d-flex align-items-center text-muted small mb-2">
                                <i class="bi bi-google me-2 text-danger"></i> <strong>Live Google SERP Search Snippet Preview</strong>
                            </div>
                            <div class="bg-white p-3 rounded border">
                                <div class="text-muted small d-flex align-items-center mb-1">
                                    <img src="{{ asset('favicon/favicon.ico') }}" alt="" style="width: 16px; height: 16px;" class="me-2" onerror="this.style.display='none'">
                                    <span>https://essentechs.com &gt; <span id="serpSlugPreview">{{ $page->slug ?: 'ads-washing-machine-repair' }}</span></span>
                                </div>
                                <h6 class="text-primary mb-1 fw-bold fs-6" id="serpTitlePreview">
                                    {{ $page->meta_title ?: ($page->title ?: 'Ads Washing Machine Repair - essentechs.com') }}
                                </h6>
                                <p class="text-secondary small mb-0 lh-sm" id="serpDescPreview">
                                    {{ $page->meta_description ?: 'ESSENTECHS · DOORSTEP SERVICE Washing Machine Service Centre. Professional repair and service at your doorstep. Experienced technicians, 30 min arrival.' }}
                                </p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Target / Focus Keyword</label>
                                <input type="text" name="focus_keyword" id="focusKeywordInput" class="form-control" 
                                       value="{{ old('focus_keyword', $page->focus_keyword) }}" placeholder="e.g. washing machine repair kochi">
                                <div class="form-text">The primary keyword you want this ad landing page to rank for.</div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Canonical URL</label>
                                <input type="url" name="canonical_url" class="form-control" 
                                       value="{{ old('canonical_url', $page->canonical_url) }}" placeholder="Leave blank for automatic URL">
                                <div class="form-text">Prevents duplicate content penalties. Leave blank to auto-use page URL.</div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label fw-semibold">Meta Title Tag <span class="text-danger">*</span></label>
                                    <span class="small text-muted"><span id="metaTitleCount">0</span>/60 characters (Recommended: 50-60)</span>
                                </div>
                                <input type="text" name="meta_title" id="metaTitleInput" class="form-control" 
                                       value="{{ old('meta_title', $page->meta_title) }}" placeholder="Ads Washing Machine Repair - essentechs.com">
                                <div class="form-text">Displayed as the clickable blue headline in Google search results and browser tab.</div>
                            </div>

                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label fw-semibold">Meta Description Tag <span class="text-danger">*</span></label>
                                    <span class="small text-muted"><span id="metaDescCount">0</span>/160 characters (Recommended: 150-160)</span>
                                </div>
                                <textarea name="meta_description" id="metaDescInput" rows="3" class="form-control" 
                                          placeholder="ESSENTECHS · DOORSTEP SERVICE Washing Machine Service Centre. Professional repair and service at your doorstep. Book washing machine service now.">{{ old('meta_description', $page->meta_description) }}</textarea>
                                <div class="form-text">Displayed beneath the title in search engine results.</div>
                            </div>

                            <div class="col-md-7">
                                <label class="form-label fw-semibold">Meta Keywords</label>
                                <input type="text" name="meta_keywords" class="form-control" 
                                       value="{{ old('meta_keywords', $page->meta_keywords) }}" placeholder="washing machine repair, washing machine service centre, doorstep technician">
                                <div class="form-text">Comma-separated target keywords.</div>
                            </div>

                            <div class="col-md-5">
                                <label class="form-label fw-semibold">Robots Meta Tag</label>
                                <input type="text" name="robots" class="form-control" 
                                       value="{{ old('robots', $page->robots ?: 'index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large') }}">
                                <div class="form-text">Controls crawler indexing (e.g. index, follow).</div>
                            </div>

                            <hr class="my-3">

                            <!-- Social Open Graph (Facebook, WhatsApp) -->
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-share-fill text-primary me-2"></i>Social Open Graph (WhatsApp, Facebook, LinkedIn)</h6>
                            
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">OG Title</label>
                                <input type="text" name="og_title" class="form-control" 
                                       value="{{ old('og_title', $page->og_title) }}" placeholder="Leave empty to use Meta Title">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-semibold">OG Type</label>
                                <select name="og_type" class="form-select">
                                    <option value="article" {{ old('og_type', $page->og_type) === 'article' ? 'selected' : '' }}>article</option>
                                    <option value="website" {{ old('og_type', $page->og_type) === 'website' ? 'selected' : '' }}>website</option>
                                    <option value="business.business" {{ old('og_type', $page->og_type) === 'business.business' ? 'selected' : '' }}>business.business</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">OG Description</label>
                                <textarea name="og_description" rows="2" class="form-control" 
                                          placeholder="Leave empty to use Meta Description">{{ old('og_description', $page->og_description) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">OG Social Banner Image (1200x630 px)</label>
                                <input type="file" name="og_image" class="form-control" accept="image/*">
                                <div class="form-text">Shown when this page link is shared on WhatsApp, Facebook, or Twitter.</div>
                                @if($page->og_image)
                                    <div class="mt-2 d-flex align-items-center">
                                        <img src="{{ $page->effective_og_image_url }}" alt="OG Preview" class="img-thumbnail me-2" style="max-height: 60px;">
                                        <span class="small text-muted">Current social share image</span>
                                    </div>
                                @endif
                            </div>

                            <hr class="my-3">

                            <!-- Structured Data / Schema -->
                            <h6 class="fw-bold text-dark mb-2"><i class="bi bi-diagram-3-fill text-warning me-2"></i>Structured Data / Schema.org (JSON-LD)</h6>
                            
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Schema Type</label>
                                <select name="schema_type" class="form-select">
                                    <option value="Service" {{ old('schema_type', $page->schema_type) === 'Service' ? 'selected' : '' }}>Service (Auto-generated)</option>
                                    <option value="LocalBusiness" {{ old('schema_type', $page->schema_type) === 'LocalBusiness' ? 'selected' : '' }}>LocalBusiness (Auto-generated)</option>
                                    <option value="Custom" {{ old('schema_type', $page->schema_type) === 'Custom' ? 'selected' : '' }}>Custom JSON-LD (Paste below)</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Custom Schema JSON-LD (Optional)</label>
                                <textarea name="custom_schema" rows="4" class="form-control font-monospace fs-7" 
                                          placeholder='Paste custom JSON-LD Schema here...'>{{ old('custom_schema', $page->custom_schema) }}</textarea>
                                <div class="form-text">If left empty, a valid Schema.org structure with Organization, LocalBusiness, Service, and Breadcrumbs is automatically generated!</div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB 5: TRACKING & SCRIPTS -->
                    <div class="tab-pane fade" id="tab-scripts" role="tabpanel">
                        <h5 class="fw-bold text-dark mb-3"><i class="bi bi-code-square text-info me-2"></i>Analytics, Conversion & Tracking Scripts</h5>
                        <p class="text-muted small">Insert your Google Ads conversion tags, Google Tag Manager, Meta Pixel, or custom CSS for this landing page.</p>

                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-semibold">Header Tracking Scripts (Injected into &lt;head&gt;)</label>
                                <textarea name="header_scripts" rows="5" class="form-control font-monospace fs-7" 
                                          placeholder="<!-- Google tag (gtag.js) -->&#10;<script async src='https://www.googletagmanager.com/gtag/js?id=AW-XXXXX'></script>&#10;<script>...</script>">{{ old('header_scripts', $page->header_scripts) }}</textarea>
                                <div class="form-text">Ideal for Google Ads Conversion Tag, GTM container, Meta Pixel, or analytics.</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Body Tracking Scripts (Injected right after &lt;body&gt;)</label>
                                <textarea name="body_scripts" rows="4" class="form-control font-monospace fs-7" 
                                          placeholder="<!-- Google Tag Manager (noscript) -->&#10;<noscript><iframe src='...'></iframe></noscript>">{{ old('body_scripts', $page->body_scripts) }}</textarea>
                                <div class="form-text">Ideal for noscript tags, heatmaps, or remarketing pixels.</div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-semibold">Custom CSS Styling (Optional)</label>
                                <textarea name="custom_css" rows="4" class="form-control font-monospace fs-7" 
                                          placeholder=".essen-hero-title { font-size: 38px; }">{{ old('custom_css', $page->custom_css) }}</textarea>
                                <div class="form-text">Custom CSS styles applied exclusively to this landing page.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar Right (Publishing & Quick Actions) -->
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 mb-4 sticky-top" style="top: 20px; z-index: 10;">
            <div class="card-header bg-white border-bottom py-3">
                <h6 class="mb-0 fw-bold text-dark"><i class="bi bi-send-check text-primary me-2"></i>Publishing & Status</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Page Status</label>
                    <select name="status" class="form-select">
                        <option value="published" {{ old('status', $page->status) === 'published' ? 'selected' : '' }}>
                            🟢 Published (Live to public)
                        </option>
                        <option value="draft" {{ old('status', $page->status) === 'draft' ? 'selected' : '' }}>
                            🟡 Draft (Hidden from public)
                        </option>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm">
                        <i class="bi bi-save me-1"></i> Save Landing Page
                    </button>
                    @if($page->exists)
                        <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-outline-secondary">
                            <i class="bi bi-box-arrow-up-right me-1"></i> View Live Page
                        </a>
                    @endif
                    <a href="{{ route('admin.landing-pages.index') }}" class="btn btn-light text-muted">
                        Cancel & Return
                    </a>
                </div>
            </div>
            <div class="card-footer bg-light border-top py-3 text-muted small">
                <div class="d-flex align-items-center mb-1">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Auto-responsive for Mobile & Desktop
                </div>
                <div class="d-flex align-items-center mb-1">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> WhatsApp Lead Capture included
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill text-success me-2"></i> Google Schema.org JSON-LD built-in
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const titleInput = document.getElementById('pageTitleInput');
    const slugInput = document.getElementById('slugInput');
    const slugPreview = document.getElementById('slugPreview');
    const serpSlugPreview = document.getElementById('serpSlugPreview');
    const metaTitleInput = document.getElementById('metaTitleInput');
    const metaTitleCount = document.getElementById('metaTitleCount');
    const serpTitlePreview = document.getElementById('serpTitlePreview');
    const metaDescInput = document.getElementById('metaDescInput');
    const metaDescCount = document.getElementById('metaDescCount');
    const serpDescPreview = document.getElementById('serpDescPreview');
    const heroTitleInput = document.getElementById('heroTitleInput');

    // Auto slug on create if slug hasn't been manually changed
    let userModifiedSlug = {{ $page->exists ? 'true' : 'false' }};
    if (slugInput) {
        slugInput.addEventListener('input', function() {
            userModifiedSlug = true;
            updateSlugPreview(this.value);
        });
    }

    if (titleInput && !userModifiedSlug) {
        titleInput.addEventListener('input', function() {
            if (!userModifiedSlug) {
                const generated = this.value
                    .toLowerCase()
                    .trim()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');
                slugInput.value = generated;
                updateSlugPreview(generated);
            }
            if (!metaTitleInput.value || metaTitleInput.value === 'Ads Washing Machine Repair - essentechs.com') {
                metaTitleInput.value = this.value + ' - essentechs.com';
                updateMetaTitle();
            }
        });
    }

    function updateSlugPreview(val) {
        const clean = val || 'ads-slug';
        if (slugPreview) slugPreview.textContent = '/' + clean;
        if (serpSlugPreview) serpSlugPreview.textContent = clean;
    }

    function updateMetaTitle() {
        if (!metaTitleInput) return;
        const len = metaTitleInput.value.length;
        if (metaTitleCount) metaTitleCount.textContent = len;
        if (serpTitlePreview) serpTitlePreview.textContent = metaTitleInput.value || (titleInput ? titleInput.value : 'Page Title');
    }

    function updateMetaDesc() {
        if (!metaDescInput) return;
        const len = metaDescInput.value.length;
        if (metaDescCount) metaDescCount.textContent = len;
        if (serpDescPreview) serpDescPreview.textContent = metaDescInput.value || 'Description snippet shown in Google search results.';
    }

    if (metaTitleInput) {
        metaTitleInput.addEventListener('input', updateMetaTitle);
        updateMetaTitle();
    }

    if (metaDescInput) {
        metaDescInput.addEventListener('input', updateMetaDesc);
        updateMetaDesc();
    }
});
</script>
@endpush
