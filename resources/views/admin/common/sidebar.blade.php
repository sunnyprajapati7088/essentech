<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <img src="{{ asset('/img/EssenTechs-logo.jpeg') }}" alt="Admin Logo" class="logo"
                style="max-width: 200px;margin-left: 10px;">
        </div>
        <button class="sidebar-toggle d-lg-none" id="sidebarToggle">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <div class="sidebar-menu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-house-door"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.blogs*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#blogsMenu">
                    <i class="bi bi-journal-text"></i>
                    <span>Blogs</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.blogs*') ? 'show' : '' }}" id="blogsMenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.blogs.index') ? 'active' : '' }}"
                                href="{{ route('admin.blogs.index') }}">
                                <i class="bi bi-list"></i>
                                <span>All Blogs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.blogs.create') ? 'active' : '' }}"
                                href="{{ route('admin.blogs.create') }}">
                                <i class="bi bi-plus-circle"></i>
                                <span>Create Blog</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.srns*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#srnsMenu">
                    <i class="bi bi-clipboard-check"></i>
                    <span>SRNs</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.srns*') ? 'show' : '' }}" id="srnsMenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.srns.index') ? 'active' : '' }}"
                                href="{{ route('admin.srns.index') }}">
                                <i class="bi bi-list"></i>
                                <span>All SRNs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.srns.create') ? 'active' : '' }}"
                                href="{{ route('admin.srns.create') }}">
                                <i class="bi bi-plus-circle"></i>
                                <span>Create SRN</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}"
                    href="{{ route('admin.contacts.index') }}">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Contacts</span>
                </a>
            </li>
            {{-- ✅ Dynamic Content Management --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('menus*') || request()->routeIs('pages*') || request()->routeIs('sections*') || request()->routeIs('page-sections*') ? 'active' : '' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#cmsMenu">
                    <i class="bi bi-layout-text-window"></i>
                    <span>Content Management</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse {{ request()->routeIs('menus*') || request()->routeIs('pages*') || request()->routeIs('sections*') || request()->routeIs('page-sections*') ? 'show' : '' }}"
                    id="cmsMenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('menus*') ? 'active' : '' }}"
                                href="{{ route('admin.menus.index') }}">
                                <i class="bi bi-list"></i>
                                <span>Menus</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('pages*') ? 'active' : '' }}"
                                href="{{ route('admin.pages.index') }}">
                                <i class="bi bi-file-earmark-text"></i>
                                <span>Pages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('sections*') ? 'active' : '' }}"
                                href="{{ route('admin.sections.index') }}">
                                <i class="bi bi-layers"></i>
                                <span>Sections</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('page-sections*') ? 'active' : '' }}"
                                href="{{ route('page-sections.index') }}">
                                <i class="bi bi-diagram-3"></i>
                                <span>Page Sections</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}" href="#"
                    data-bs-toggle="collapse" data-bs-target="#usersMenu">
                    <i class="bi bi-people"></i>
                    <span>Users</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse {{ request()->routeIs('admin.users*') ? 'show' : '' }}" id="usersMenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-list"></i>
                                <span>All Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-plus-circle"></i>
                                <span>Add User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.forms') ? 'active' : '' }}"
                    href="{{ route('admin.forms') }}">
                    <i class="bi bi-ui-checks"></i>
                    <span>Form Elements</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.tables') ? 'active' : '' }}"
                    href="{{ route('admin.tables') }}">
                    <i class="bi bi-table"></i>
                    <span>Data Tables</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#componentsMenu">
                    <i class="bi bi-grid-3x3-gap"></i>
                    <span>Components</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <div class="collapse" id="componentsMenu">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-card-text"></i>
                                <span>Cards</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bell"></i>
                                <span>Alerts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-badge-ad"></i>
                                <span>Badges</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="sidebar-footer">
        <a href="#" class="btn btn-outline-light btn-sm"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<!-- Sidebar Overlay for Mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>
