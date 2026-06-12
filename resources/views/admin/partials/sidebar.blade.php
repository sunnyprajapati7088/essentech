<!-- resources/views/admin/partials/sidebar.blade.php -->

<div class="sidebar">
    <h2>Admin Panel</h2>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
    <a href="{{ route('admin.blogs.index') }}" class="{{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}">Manage Blogs</a>
    <a href="{{ route('admin.services.index') }}" class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">Manage Services</a>
    <a href="#">Manage Users</a> <!-- Add controller/routes if needed -->
    <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-link text-white p-0">Logout</button>
    </form>
</div>