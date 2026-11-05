@php
    use App\Models\Menu;

    // Fetch top-level menus with pages only
    $menus = Menu::with('page')->whereNull('parent_id')->where('status', 1)->orderBy('order', 'asc')->take(5)->get();

    // Static services dropdown
    $services = [
        ['title' => 'Air Conditioner (AC) Repair', 'url' => url('/ac/'), 'active' => request()->is('ac*') || request()->routeIs('acServices')],
        ['title' => 'Microwave Oven Repair', 'url' => url('/microwave-oven/'), 'active' => request()->is('microwave-oven*') || request()->routeIs('microWaveOpen')],
        ['title' => 'Washing Machine Repair', 'url' => url('/service/washing-machine-repair'), 'active' => request()->routeIs('washingMachine')],
        ['title' => 'Refrigerator Repair & Service', 'url' => url('/service/refrigerator-repair'), 'active' => request()->routeIs('refrigerator')],
        ['title' => 'Installation & Uninstallation', 'url' => url('/service/installation-uninstallation'), 'active' => request()->routeIs('installationUninstallation')],
        ['title' => 'Annual Maintenance Contracts (AMC)', 'url' => url('/service/amc'), 'active' => request()->routeIs('amc')],
    ];

    // Determine if the current route matches any service route
    $isServiceActive = collect($services)->pluck('active')->contains(true) || request()->routeIs('services');
@endphp

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5" aria-label="Main Navigation">
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

            <!-- AC Service Link -->
            <a href="{{ url('/ac/') }}"
                class="nav-item nav-link {{ request()->is('ac*') || request()->routeIs('acServices') ? 'active' : '' }}" aria-label="Air Conditioner AC Repair Services">
                AC Repair
            </a>

            <!-- Microwave Oven Service Link -->
            <a href="{{ url('/microwave-oven/') }}"
                class="nav-item nav-link {{ request()->is('microwave-oven*') || request()->routeIs('microWaveOpen') ? 'active' : '' }}" aria-label="Microwave Oven Repair Services">
                Microwave Oven
            </a>

            <!-- All Services Dropdown -->
            <div class="nav-item dropdown">
                <a href="{{ route('services') }}"
                    class="nav-link dropdown-toggle {{ $isServiceActive ? 'active' : '' }}"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" id="servicesDropdown" aria-expanded="false" aria-label="All Appliance Services dropdown">
                    Our Services
                </a>
                <div class="dropdown-menu bg-light m-0 shadow-sm" aria-labelledby="servicesDropdown">
                    @foreach ($services as $service)
                        <a href="{{ $service['url'] }}"
                            class="dropdown-item {{ $service['active'] ? 'active' : '' }}">
                            {{ $service['title'] }}
                        </a>
                    @endforeach
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('/ads-washing-machine-repair') }}" class="dropdown-item fw-semibold text-primary">
                        <i class="fas fa-tags me-1"></i> Special Offers (Ads)
                    </a>
                </div>
            </div>

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
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" id="dropdownMenu{{ $menu->id }}" aria-expanded="false">
                            {{ $menu->title }}
                        </a>
                        <div class="dropdown-menu bg-light m-0 shadow-sm" aria-labelledby="dropdownMenu{{ $menu->id }}">
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
            <a href="{{ route('contact') }}"
                class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" aria-label="Contact EssenTechs">
                Contact Us
            </a>
        </div>
    </div>
</nav>
