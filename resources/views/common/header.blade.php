@php
    use App\Models\Menu;

    // Fetch top-level menus with pages only
    $menus = Menu::with('page')->whereNull('parent_id')->where('status', 1)->orderBy('order', 'asc')->take(5)->get();

    // Appliance service links
    $serviceItems = [
        ['title' => 'AC Service & Repair', 'url' => url('/ac-service-repair-kochi'), 'icon' => 'fas fa-snowflake', 'active' => request()->is('ac*') || request()->routeIs('acServices')],
        ['title' => 'Refrigerator Service & Repair', 'url' => url('/refrigerator-repair-service-kochi'), 'icon' => 'fas fa-temperature-low', 'active' => request()->is('refrigerator*') || request()->routeIs('refrigerator')],
        ['title' => 'Washing Machine Service & Repair', 'url' => url('/washing-machine-repair-service-kochi'), 'icon' => 'fas fa-sync-alt', 'active' => request()->is('washing-machine*') || request()->routeIs('washingMachine')],
        ['title' => 'Microwave Oven Service & Repair', 'url' => url('/microwave-oven/'), 'icon' => 'fas fa-microchip', 'active' => request()->is('microwave-oven*') || request()->routeIs('microWaveOpen')],
        ['title' => 'RO & Water Purifier Service', 'url' => url('/water-purifier'), 'icon' => 'fas fa-filter', 'active' => request()->is('water-purifier*')],
    ];

    $isServiceActive = collect($serviceItems)->pluck('active')->contains(true) || request()->routeIs('services');
@endphp

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 shadow-sm" aria-label="Main Navigation">
    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center" aria-label="EssenTechs Home">
        <span class="m-0 h2 fw-bold d-flex align-items-center text-primary">
            <img class="img-fluid me-3" src="{{ asset('img/EssenTechs-logo.jpeg') }}" alt="EssenTechs Logo" width="45" height="45">EssenTechs
        </span>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <!-- Home -->
            <a href="{{ route('welcome') }}"
                class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" aria-label="Home page">
                Home
            </a>

            <!-- Services Dropdown -->
            <div class="nav-item dropdown">
                <a href="{{ url('/services') }}"
                    class="nav-link dropdown-toggle {{ $isServiceActive ? 'active' : '' }}"
                    data-bs-toggle="dropdown" id="servicesDropdown" aria-expanded="false" aria-label="Appliance repair services menu">
                    Services
                </a>
                <div class="dropdown-menu bg-white m-0 shadow border-0 rounded-3 py-2" aria-labelledby="servicesDropdown">
                    <a href="{{ url('/ac-service-repair-kochi') }}"
                        class="dropdown-item py-2 {{ request()->is('ac*') ? 'active' : '' }}">
                        <i class="fas fa-snowflake text-primary me-2" aria-hidden="true"></i> AC Service & Repair
                    </a>
                    <a href="{{ url('/refrigerator-repair-service-kochi') }}"
                        class="dropdown-item py-2 {{ request()->is('refrigerator*') ? 'active' : '' }}">
                        <i class="fas fa-temperature-low text-primary me-2" aria-hidden="true"></i> Refrigerator Service & Repair
                    </a>
                    <a href="{{ url('/washing-machine-repair-service-kochi') }}"
                        class="dropdown-item py-2 {{ request()->is('washing-machine*') ? 'active' : '' }}">
                        <i class="fas fa-sync-alt text-primary me-2" aria-hidden="true"></i> Washing Machine Service & Repair
                    </a>
                    <a href="{{ url('/microwave-oven/') }}"
                        class="dropdown-item py-2 {{ request()->is('microwave-oven*') ? 'active' : '' }}">
                        <i class="fas fa-microchip text-primary me-2" aria-hidden="true"></i> Microwave Oven Service & Repair
                    </a>
                    <a href="{{ url('/water-purifier') }}"
                        class="dropdown-item py-2 {{ request()->is('water-purifier*') ? 'active' : '' }}">
                        <i class="fas fa-filter text-primary me-2" aria-hidden="true"></i> RO & Water Purifier Service
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/services') }}" class="dropdown-item py-2 small fw-semibold text-muted">
                        <i class="fas fa-th-list me-2" aria-hidden="true"></i> View All Services
                    </a>
                </div>
            </div>

            <!-- Brands Dropdown -->
            <div class="nav-item dropdown">
                <a href="{{ url('/brands') }}"
                    class="nav-link dropdown-toggle {{ request()->is('brands*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown" id="brandsDropdown" aria-expanded="false" aria-label="Supported appliance brands menu">
                    Brands
                </a>
                <div class="dropdown-menu bg-white m-0 shadow border-0 rounded-3 py-2" aria-labelledby="brandsDropdown">
                    <a href="{{ url('/brands#ac-brands') }}" class="dropdown-item py-2">
                        <i class="fas fa-snowflake text-primary me-2" aria-hidden="true"></i> AC Brands (21)
                    </a>
                    <a href="{{ url('/brands#refrigerator-brands') }}" class="dropdown-item py-2">
                        <i class="fas fa-temperature-low text-primary me-2" aria-hidden="true"></i> Refrigerator Brands (15)
                    </a>
                    <a href="{{ url('/brands#washing-brands') }}" class="dropdown-item py-2">
                        <i class="fas fa-sync-alt text-primary me-2" aria-hidden="true"></i> Washing Machine Brands (16)
                    </a>
                    <a href="{{ url('/brands#microwave-brands') }}" class="dropdown-item py-2">
                        <i class="fas fa-microchip text-primary me-2" aria-hidden="true"></i> Microwave Brands (15)
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/brands') }}" class="dropdown-item py-2 small fw-semibold text-muted">
                        <i class="fas fa-th me-2" aria-hidden="true"></i> All Supported Brands
                    </a>
                </div>
            </div>

            <!-- Offers & Deals -->
            <a href="{{ url('/offers') }}"
                class="nav-item nav-link {{ request()->is('offers*') ? 'active' : '' }}" aria-label="Seasonal repair offers and deals">
                Offers <span class="badge bg-danger rounded-pill ms-1 small">Deals</span>
            </a>

            <!-- Blog -->
            <a href="{{ url('/blog') }}"
                class="nav-item nav-link {{ request()->is('blog*') ? 'active' : '' }}" aria-label="Troubleshooting tips and guides">
                Blog
            </a>

            <!-- Dynamic Menus with Pages -->
            @foreach ($menus as $menu)
                @if ($menu->page->count() === 1)
                    @php $page = $menu->page->first(); @endphp
                    <a href="{{ route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug]) }}"
                        class="nav-item nav-link {{ request()->is($menu->slug . '/' . $page->slug) ? 'active' : '' }}">
                        {{ $menu->title }}
                    </a>
                @elseif($menu->page->count() > 1)
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->is($menu->slug . '/*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown" id="dropdownMenu{{ $menu->id }}" aria-expanded="false">
                            {{ $menu->title }}
                        </a>
                        <div class="dropdown-menu bg-white m-0 shadow border-0 rounded-3" aria-labelledby="dropdownMenu{{ $menu->id }}">
                            @foreach ($menu->page as $page)
                                <a href="{{ route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug]) }}"
                                    class="dropdown-item {{ request()->is($menu->slug . '/' . $page->slug) ? 'active' : '' }}">
                                    {{ $page->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach

            <!-- Contact -->
            <a href="{{ route('contact') }}"
                class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" aria-label="Contact EssenTechs">
                Contact
            </a>
        </div>

        <!-- Call CTA Button -->
        <div class="d-none d-lg-flex align-items-center">
            <a href="tel:+919746700889" class="btn btn-primary rounded-pill px-3 py-2 fw-semibold" aria-label="Call +91 97467 00889">
                <i class="fas fa-phone-alt me-1" aria-hidden="true"></i> +91 97467 00889
            </a>
        </div>
    </div>
</nav>
