<?php $__env->startSection('title', 'Blog | EssenTechs - AC Repair and Appliance Services in Kerala'); ?>
<?php $__env->startSection('meta_description', 'Explore our blog for expert tips on AC repair in Kerala, washing machine repair, refrigerator repair & service, microwave oven repair, and home appliance maintenance tips.'); ?>
<?php $__env->startSection('meta_keywords', 'AC repair in Kerala, washing machine repair Kerala, refrigerator repair Kerala, microwave oven repair Kerala, best AC repair mechanic in Kerala, appliance services Kerala'); ?>

<?php $__env->startSection('style'); ?>
<style>
    .blog-card { border: none; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: transform 0.3s ease, box-shadow 0.3s ease; height: 100%; }
    .blog-card:hover { transform: translateY(-6px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); }
    .blog-card img { width: 100%; height: 220px; object-fit: cover; }
    .blog-card .card-body { padding: 1.5rem; display: flex; flex-direction: column; }
    .blog-card .card-title { font-size: 1.05rem; font-weight: 700; color: #1a1a2e; line-height: 1.4; }
    .blog-card .card-text { color: #6c757d; font-size: 0.9rem; flex-grow: 1; }
    .blog-card .read-more { color: #0d6efd; font-weight: 600; text-decoration: none; font-size: 0.9rem; }
    .blog-card .read-more:hover { text-decoration: underline; }
    .blog-meta span { font-size: 0.8rem; color: #999; margin-right: 12px; }
    .blog-badge { background: #e8f4fd; color: #0d6efd; font-size: 0.75rem; padding: 3px 10px; border-radius: 20px; font-weight: 600; }
    .page-hero { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: white; padding: 60px 0 40px; }
    .breadcrumb-item a { color: rgba(255,255,255,0.8); text-decoration: none; }
    .breadcrumb-item.active { color: white; }
    .breadcrumb-divider { color: rgba(255,255,255,0.6); }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Hero Start -->
<div class="page-hero wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
        </nav>
        <h1 class="fw-bold mb-2">Expert Appliance Repair Tips & Guides</h1>
        <p class="mb-0 opacity-75">Helpful advice on AC, washing machine, refrigerator & microwave repair in Kerala</p>
    </div>
</div>
<!-- Page Hero End -->

<!-- Blog Listing Start -->
<div class="container-xxl py-5">
    <div class="container">

        <?php if($blogs->isEmpty()): ?>
            <div class="text-center py-5">
                <i class="fa fa-newspaper fa-3x text-muted mb-3"></i>
                <h4 class="text-muted">No blogs published yet. Check back soon!</h4>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?php echo e(($index % 3) * 0.1 + 0.1); ?>s">
                        <div class="blog-card h-100">
                            <a href="<?php echo e(route('blog.details', $blog->slug)); ?>">
                                <img src="<?php echo e($blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('img/default-blog.jpg')); ?>"
                                     alt="<?php echo e($blog->title); ?>" loading="lazy">
                            </a>
                            <div class="card-body d-flex flex-column p-4">
                                <div class="mb-2">
                                    <span class="blog-badge">Repair Guide</span>
                                </div>
                                <h2 class="card-title mb-2">
                                    <a href="<?php echo e(route('blog.details', $blog->slug)); ?>" style="text-decoration:none; color:inherit;">
                                        <?php echo e($blog->title); ?>

                                    </a>
                                </h2>
                                <div class="blog-meta mb-2">
                                    <span><i class="fa fa-calendar me-1"></i><?php echo e($blog->created_at->format('M d, Y')); ?></span>
                                    <span><i class="fa fa-clock me-1"></i><?php echo e(max(1, (int)(str_word_count(strip_tags($blog->content)) / 200))); ?> min read</span>
                                </div>
                                <p class="card-text mb-3"><?php echo e(Str::limit($blog->short_description, 110)); ?></p>
                                <div class="mt-auto">
                                    <a href="<?php echo e(route('blog.details', $blog->slug)); ?>" class="read-more">
                                        Read More <i class="fa fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <?php if($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator && $blogs->hasPages()): ?>
                <div class="d-flex justify-content-center mt-5">
                    <?php echo e($blogs->links()); ?>

                </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</div>
<!-- Blog Listing End -->

<!-- CTA Section Start -->
<div class="container-xxl pb-5">
    <div class="container">
        <div class="bg-primary rounded p-4 p-md-5 text-white text-center wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="fw-bold mb-2">Need Appliance Repair Right Now?</h3>
            <p class="mb-4 opacity-75">Our certified technicians are available for same-day service across Kerala.</p>
            <a href="tel:+919746700889" class="btn btn-light btn-lg me-3 fw-bold">
                <i class="fa fa-phone me-2"></i>Call Now
            </a>
            <a href="https://wa.me/919746700889" target="_blank" class="btn btn-success btn-lg fw-bold">
                <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
            </a>
        </div>
    </div>
</div>
<!-- CTA Section End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\essentechs\essentechs\resources\views/blogs.blade.php ENDPATH**/ ?>