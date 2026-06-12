<header class="main-header">
    <div class="header-content">
        <div class="header-left">
            <button class="sidebar-toggle-btn d-lg-none" id="sidebarToggleBtn">
                <i class="bi bi-list"></i>
            </button>
            <div class="page-title">
                <h4 class="mb-0">@yield('page-title', 'Dashboard')</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        @yield('breadcrumb')
                    </ol>
                </nav>
            </div>
        </div>
        
        <div class="header-right">
            <!-- Search -->
            <div class="search-box d-none d-md-block">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            
            <!-- Notifications -->
            <div class="dropdown">
                
                <ul class="dropdown-menu dropdown-menu-end notification-dropdown">
                    <li class="dropdown-header">
                        <h6 class="mb-0">Notifications</h6>
                        <span class="badge bg-primary">3 New</span>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="notification-item">
                                <div class="notification-icon bg-success">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div class="notification-content">
                                    <h6>New user registered</h6>
                                    <p class="text-muted small">2 minutes ago</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="notification-item">
                                <div class="notification-icon bg-warning">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                                <div class="notification-content">
                                    <h6>Server maintenance</h6>
                                    <p class="text-muted small">1 hour ago</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="notification-item">
                                <div class="notification-icon bg-info">
                                    <i class="bi bi-info-circle"></i>
                                </div>
                                <div class="notification-content">
                                    <h6>System update available</h6>
                                    <p class="text-muted small">3 hours ago</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </li>
                </ul>
            </div>
            
            <!-- User Profile -->
            <div class="dropdown">
                <button class="btn btn-link d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <div class="user-avatar me-2">
                        <i class="bi bi-person-circle fs-4"></i>
                    </div>
                    <div class="user-info d-none d-md-block">
                        <div class="user-name">{{ auth()->user()->name ?? 'Admin User' }}</div>
                        <div class="user-role text-muted small">Administrator</div>
                    </div>
                    <i class="bi bi-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{-- <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person me-2"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear me-2"></i>
                            Settings
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-question-circle me-2"></i>
                            Help
                        </a>
                    </li> --}}
                   
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<form id="logout-form-header" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>