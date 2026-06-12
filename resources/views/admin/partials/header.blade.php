<!-- resources/views/admin/partials/header.blade.php -->

<header class="d-flex justify-content-between align-items-center">
    <h1 class="h4 mb-0">Admin Dashboard</h1>
    <div>Welcome, {{ auth()->user()->name }}</div>
</header>