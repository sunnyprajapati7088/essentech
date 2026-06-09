 
<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center mt-5 mb-5">
        <h1 class="text-6xl font-bold text-red-500">404</h1>
        <h2 class="text-2xl font-semibold mt-4">Oops! Page Not Found</h2>
        <p class="mt-2 text-gray-600">The page you are looking for might have been removed or is temporarily unavailable.</p>
        <a href="<?php echo e(url('/')); ?>" class="btn btn-primary py-3 px-5 animated slideInDown">Go Home</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/essentechs/resources/views/errors/404.blade.php ENDPATH**/ ?>