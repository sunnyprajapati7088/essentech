<?php
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
?>

<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?php echo e(route('welcome')); ?>" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="<?php echo e(asset('img/EssenTechs-logo.jpeg')); ?>" alt="">EssenTechs
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
            <!-- Home -->
            <a href="<?php echo e(route('welcome')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('welcome') ? 'active' : ''); ?>">
                Home
            </a>

            <!-- Static Services Dropdown -->
            <div class="nav-item dropdown">
                <a href="<?php echo e(route('services')); ?>"
                    class="nav-link dropdown-toggle <?php echo e($isServiceActive || request()->routeIs('services') ? 'active' : ''); ?>"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Our Services
                </a>
                <div class="dropdown-menu bg-light m-0 shadow-sm">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route($service['route'])); ?>"
                            class="dropdown-item <?php echo e(request()->routeIs($service['route']) ? 'active' : ''); ?>">
                            <?php echo e($service['title']); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <!-- Dynamic Menus with Pages -->
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($menu->page->count() === 1): ?>
                    <?php $page = $menu->page->first(); ?>
                    <a href="<?php echo e(route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug])); ?>"
                        class="nav-item nav-link <?php echo e(request()->is($menu->slug . '/' . $page->slug) ? 'active' : ''); ?>">
                        <?php echo e($menu->title); ?>

                    </a>
                <?php elseif($menu->page->count() > 1): ?>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle <?php echo e(request()->is($menu->slug . '/*') ? 'active' : ''); ?>"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside">
                            <?php echo e($menu->title); ?>

                        </a>
                        <div class="dropdown-menu bg-light m-0 shadow-sm">
                            <?php $__currentLoopData = $menu->page; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('pages.show', ['menu_slug' => $menu->slug, 'page_slug' => $page->slug])); ?>"
                                    class="dropdown-item <?php echo e(request()->is($menu->slug . '/' . $page->slug) ? 'active' : ''); ?>">
                                    <?php echo e($page->title); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('contact')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">
                Contact Us
            </a>
        </div>
    </div>
</nav>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/essentechs/resources/views/common/header.blade.php ENDPATH**/ ?>