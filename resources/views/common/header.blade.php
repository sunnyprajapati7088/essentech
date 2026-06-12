@php
    use App\Models\Menu;

    // Fetch top-level menus with pages only
    $menus = Menu::with('page')->whereNull('parent_id')->where('status', 1)->orderBy('order', 'asc')->take(5)->get();

    // Static services dropdown
    $services = [
        ['title' => 'Air Conditioner (AC) Repair', 'route' => 'acServices'],
        ['title' => 'Washing Machine Repair', 'route' => 'washingMachine'],
        ['title' => 'Refrigerator Repair & Service', 'route' => 'refrigerator'],
        ['title' => 'Microwave Oven Repair', 'route' => 'microWaveOpen'],
        ['title' => 'Installation & Uninstallation', 'route' => 'installationUninstallation'],
        ['title' => 'Annual Maintenance Contracts (AMC)', 'route' => 'amc'],
    ];

    // Determine if the current route matches any service route
    $isServiceActive = collect($services)->pluck('route')->contains(fn($r) => request()->routeIs($r));
@endphp

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="{{ asset('img/EssenTechs-logo.jpeg') }}" alt="">EssenTechs
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <!-- Home -->
            <a href="{{ route('welcome') }}"
                class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                Home
            </a>

            <!-- Static Services Dropdown -->
            <div class="nav-item dropdown">
                <a href="{{ route('services') }}"
                    class="nav-link dropdown-toggle {{ $isServiceActive || request()->routeIs('services') ? 'active' : '' }}"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Our Services
                </a>
                <div class="dropdown-menu bg-light m-0 shadow-sm">
                    @foreach ($services as $service)
                        <a href="{{ route($service['route']) }}"
                            class="dropdown-item {{ request()->routeIs($service['route']) ? 'active' : '' }}">
                            {{ $service['title'] }}
                        </a>
                    @endforeach
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
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            {{ $menu->title }}
                        </a>
                        <div class="dropdown-menu bg-light m-0 shadow-sm">
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
                class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact Us
            </a>
        </div>
    </div>
</nav>
