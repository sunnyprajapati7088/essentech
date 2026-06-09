<?php $__env->startSection('title', 'Message Sent Successfully | Essen Techs'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-xxl py-5 text-center">
        <div class="container">
            <i class="fas fa-check-circle fa-5x text-success mb-4"></i>
            <h1 class="display-6 mb-3">Thank You!</h1>
            <p class="mb-4">Your message has been sent successfully. We will contact you soon.</p>
            <a href="<?php echo e(route('welcome')); ?>" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/essentechs/resources/views/success.blade.php ENDPATH**/ ?>