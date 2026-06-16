

<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('meta_description', $meta_description); ?>
<?php $__env->startSection('meta_keywords', $meta_keywords); ?>



<?php $__env->startSection('style'); ?>
<style>
    .page-hero { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); color: white; padding: 60px 0 40px; }
    .breadcrumb-item a { color: rgba(255,255,255,0.8); text-decoration: none; }
    .breadcrumb-item.active { color: white; }
    .section-title { font-size: 1.8rem; font-weight: 800; color: #1a1a2e; }
    .feature-box { background: #f8fbff; border-left: 4px solid #0d6efd; border-radius: 8px; padding: 15px 18px; margin-bottom: 12px; }
    .feature-box h6 { font-weight: 700; color: #1a1a2e; margin-bottom: 3px; }
    .feature-box p { color: #6c757d; font-size: 0.85rem; margin: 0; }
    .sidebar-card { border: none; border-radius: 14px; box-shadow: 0 4px 18px rgba(0,0,0,0.07); overflow: hidden; margin-bottom: 24px; }
    .sidebar-card .card-header { background: #0d6efd; color: white; font-weight: 700; padding: 14px 20px; border: none; }
    .sidebar-card .card-body { padding: 18px 20px; }
    .related-link { display: block; padding: 10px 0; border-bottom: 1px solid #f0f0f0; color: #333; text-decoration: none; font-size: 0.9rem; transition: color 0.2s; }
    .related-link:hover { color: #0d6efd; }
    .related-link:last-child { border-bottom: none; }
    .appliance-nav a { display: block; padding: 8px 14px; border-radius: 8px; color: #555; text-decoration: none; font-size: 0.9rem; transition: all 0.2s; margin-bottom: 4px; }
    .appliance-nav a:hover, .appliance-nav a.active { background: #e8f4fd; color: #0d6efd; font-weight: 600; }
    .hero-img { width: 100%; border-radius: 16px; object-fit: cover; max-height: 420px; box-shadow: 0 8px 30px rgba(0,0,0,0.12); }
    .blog-content h2 { font-size: 1.5rem; font-weight: 700; color: #1a1a2e; margin-top: 2rem; margin-bottom: 1rem; border-left: 4px solid #0d6efd; padding-left: 14px; }
    .blog-content h3 { font-size: 1.2rem; font-weight: 700; color: #0d6efd; margin-top: 1.5rem; margin-bottom: 0.75rem; }
    .blog-content ul { padding-left: 1.5rem; }
    .blog-content ul li { margin-bottom: 6px; color: #444; }
    .blog-content p { color: #444; line-height: 1.8; }
    .default-content .problem-card { background: #fff; border: 1px solid #e9ecef; border-radius: 12px; padding: 20px; transition: all 0.2s; }
    .default-content .problem-card:hover { border-color: #0d6efd; background: #f8fbff; }
    .badge-service { background: #e8f4fd; color: #0d6efd; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero -->
<div class="page-hero wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="fa fa-home me-1"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('brands.index')); ?>">Brands</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('brands.show', $brand['slug'])); ?>"><?php echo e($brand['name']); ?></a></li>
                <li class="breadcrumb-item active"><?php echo e($appliance['name']); ?></li>
            </ol>
        </nav>
        <h1 class="fw-bold mb-2"><?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?> in Kochi, Kerala</h1>
        <p class="mb-0 opacity-75">
            <i class="fa fa-map-marker-alt me-1"></i> EssenTechs, Civil line Kakkanad, Kochi 682030 &nbsp;|&nbsp;
            <i class="fa fa-phone me-1"></i> +91 97467 00889 &nbsp;|&nbsp;
            <i class="fa fa-clock me-1"></i> Same-Day Service Available
        </p>
    </div>
</div>

<!-- Main Content -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Main Column -->
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">

                <!-- Hero Icon -->
                <div class="text-center rounded-3 mb-4" style="background:linear-gradient(135deg,#e8f4fd,#d0e8fb);padding:50px 20px;">
                    <i class="fa <?php echo e($appliance['icon']); ?>" style="font-size:6rem;color:#0d6efd;"></i>
                    <h2 class="mt-3 fw-bold text-dark"><?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?></h2>
                    <p class="text-muted">Expert service in Kochi, Kerala by EssenTechs</p>
                </div>

                <!-- Quick Stats -->
                <div class="row g-3 mb-4">
                    <?php $__currentLoopData = [
                        ['icon'=>'fa-clock','label'=>'Same-Day Service','val'=>'Available'],
                        ['icon'=>'fa-tools','label'=>'Genuine Parts','val'=>'Always Used'],
                        ['icon'=>'fa-shield-alt','label'=>'Warranty','val'=>'On All Repairs'],
                        ['icon'=>'fa-rupee-sign','label'=>'Pricing','val'=>'Transparent'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 col-md-3">
                        <div class="text-center p-3 rounded-3 bg-light">
                            <i class="fa <?php echo e($stat['icon']); ?> text-primary fa-lg mb-2"></i>
                            <div class="fw-bold text-dark" style="font-size:0.85rem;"><?php echo e($stat['val']); ?></div>
                            <div class="text-muted" style="font-size:0.75rem;"><?php echo e($stat['label']); ?></div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php if($blog): ?>
                <!-- Blog Content -->
                <div class="blog-content">
                    <?php echo $blog->content; ?>

                </div>
                <?php else: ?>
                <!-- Default Content when no blog exists -->
                <div class="default-content">
                    <h2 class="section-title mb-3"><?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?> by EssenTechs</h2>
                    <p class="text-muted mb-4">EssenTechs provides professional <?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?> in Kochi and across Kerala. Our certified technicians are trained to handle all <?php echo e($brand['name']); ?> models with genuine spare parts and service warranty.</p>

                    <h3 class="fw-bold mb-3">Common <?php echo e($brand['name']); ?> <?php echo e(explode(' ', $appliance['name'])[0]); ?> Problems We Fix</h3>
                    <div class="row g-3 mb-4">
                        <?php $__currentLoopData = [
                            ['icon'=>'fa-exclamation-triangle','problem'=>'Not Working / Not Turning On','fix'=>'Power supply, fuse, control board diagnosis and repair.'],
                            ['icon'=>'fa-thermometer-half','problem'=>'Performance Issues','fix'=>'Full diagnostics and component replacement with genuine parts.'],
                            ['icon'=>'fa-volume-up','problem'=>'Unusual Noise or Vibration','fix'=>'Mechanical inspection, part tightening and replacement.'],
                            ['icon'=>'fa-tint','problem'=>'Leaking or Water Issues','fix'=>'Seal replacement, pipe cleaning and connection fixing.'],
                            ['icon'=>'fa-display','problem'=>'Error Codes on Display','fix'=>'Error code diagnosis and component repair or replacement.'],
                            ['icon'=>'fa-bolt','problem'=>'Electrical Faults','fix'=>'Safe electrical diagnosis and repair by certified technicians.'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="problem-card">
                                <div class="d-flex align-items-start gap-3">
                                    <i class="fa <?php echo e($prob['icon']); ?> text-primary mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1" style="font-size:0.9rem;"><?php echo e($prob['problem']); ?></h6>
                                        <p class="text-muted mb-0" style="font-size:0.82rem;"><?php echo e($prob['fix']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h3 class="fw-bold mb-3">Why Choose EssenTechs for <?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?>?</h3>
                    <div class="row g-3 mb-4">
                        <?php $__currentLoopData = [
                            'Certified technicians trained for ' . $brand['name'] . ' appliances',
                            'Genuine ' . $brand['name'] . ' compatible spare parts',
                            'Same-day and next-day service in Kochi',
                            'Service warranty on all repairs',
                            'Transparent pricing — no hidden charges',
                            'Repair at your home for your convenience',
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $point): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fa fa-check-circle text-success"></i>
                                <span style="font-size:0.9rem;"><?php echo e($point); ?></span>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <h3 class="fw-bold mb-3">How to Book <?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?></h3>
                    <div class="row g-3 mb-4">
                        <?php $__currentLoopData = [
                            ['step'=>'1','title'=>'Contact Us','desc'=>'Call or WhatsApp EssenTechs at +91 97467 00889'],
                            ['step'=>'2','title'=>'Describe Problem','desc'=>'Tell us the issue with your ' . $brand['name'] . ' appliance'],
                            ['step'=>'3','title'=>'Schedule Visit','desc'=>'Choose a convenient time for our technician to visit'],
                            ['step'=>'4','title'=>'Get It Fixed','desc'=>'Technician arrives and repairs your appliance on the spot'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-3 rounded-3 bg-light">
                                <div class="bg-primary text-white rounded-circle fw-bold d-flex align-items-center justify-content-center flex-shrink-0" style="width:36px;height:36px;font-size:1rem;"><?php echo e($step['step']); ?></div>
                                <div>
                                    <h6 class="fw-bold mb-1"><?php echo e($step['title']); ?></h6>
                                    <p class="text-muted mb-0" style="font-size:0.85rem;"><?php echo e($step['desc']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- FAQ -->
                    <h3 class="fw-bold mb-3">Frequently Asked Questions</h3>
                    <div class="accordion mb-4" id="faqAccordion">
                        <?php $__currentLoopData = [
                            ['q'=>'How much does ' . $brand['name'] . ' ' . $appliance['name'] . ' cost in Kochi?', 'a'=>'EssenTechs provides transparent pricing for ' . $brand['name'] . ' ' . $appliance['name'] . '. We give a clear quote before starting work with no hidden charges. Call +91 97467 00889 for a free estimate.'],
                            ['q'=>'How long does ' . $brand['name'] . ' ' . $appliance['name'] . ' take?', 'a'=>'Most ' . $brand['name'] . ' ' . $appliance['name'] . ' are completed within 1-2 hours at your home. Complex issues may take longer or require a workshop visit.'],
                            ['q'=>'Does EssenTechs use genuine ' . $brand['name'] . ' spare parts?', 'a'=>'Yes, EssenTechs uses genuine and ' . $brand['name'] . ' compatible high-quality spare parts for all repairs to ensure durability and performance.'],
                            ['q'=>'Is there a warranty on the repair?', 'a'=>'Yes, all repairs by EssenTechs come with a service warranty. If the same issue recurs within the warranty period, we fix it at no extra charge.'],
                        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fi => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item border mb-2 rounded-3 overflow-hidden">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?php echo e($fi > 0 ? 'collapsed' : ''); ?> fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo e($fi); ?>">
                                    <?php echo e($faq['q']); ?>

                                </button>
                            </h2>
                            <div id="faq<?php echo e($fi); ?>" class="accordion-collapse collapse <?php echo e($fi === 0 ? 'show' : ''); ?>" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted"><?php echo e($faq['a']); ?></div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- CTA inline -->
                <div class="bg-primary rounded-4 p-4 text-white text-center mt-4">
                    <h4 class="fw-bold mb-2">Book <?php echo e($brand['name']); ?> <?php echo e($appliance['name']); ?> Now</h4>
                    <p class="opacity-75 mb-3">EssenTechs — Kochi, Kerala | Same-day service available</p>
                    <a href="tel:+919746700889" class="btn btn-light fw-bold me-2">
                        <i class="fa fa-phone me-1"></i> +91 97467 00889
                    </a>
                    <a href="https://wa.me/919746700889" target="_blank" class="btn btn-success fw-bold">
                        <i class="fab fa-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.1s">

                <!-- Book Now Card -->
                <div class="sidebar-card">
                    <div class="card-header">
                        <i class="fa fa-calendar-check me-2"></i>Book a Repair
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3" style="font-size:0.9rem;">EssenTechs — Civil line Kakkanad, Kochi, Kerala 682030</p>
                        <div class="d-grid gap-2">
                            <a href="tel:+919746700889" class="btn btn-primary fw-bold">
                                <i class="fa fa-phone me-2"></i>Call +91 97467 00889
                            </a>
                            <a href="https://wa.me/919746700889" target="_blank" class="btn btn-success fw-bold">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
                            </a>
                            <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline-primary fw-bold">
                                <i class="fa fa-envelope me-2"></i>Send Enquiry
                            </a>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center gap-2 text-muted" style="font-size:0.85rem;">
                            <i class="fa fa-clock text-primary"></i> Mon–Sun: 8:00 AM – 8:00 PM
                        </div>
                        <div class="d-flex align-items-center gap-2 text-muted mt-2" style="font-size:0.85rem;">
                            <i class="fa fa-map-marker-alt text-primary"></i> Kochi, Ernakulam, Kerala
                        </div>
                        <div class="d-flex align-items-center gap-2 text-muted mt-2" style="font-size:0.85rem;">
                            <i class="fa fa-envelope text-primary"></i> info@essentechs.com
                        </div>
                    </div>
                </div>

                <!-- Other Appliances for this brand -->
                <div class="sidebar-card">
                    <div class="card-header">
                        <i class="fa fa-tools me-2" style="color:<?php echo e($brand['color']); ?>;"></i>
                        Other <?php echo e($brand['name']); ?> Services
                    </div>
                    <div class="card-body appliance-nav">
                        <?php $__currentLoopData = $allAppliances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('brands.appliance', [$brand['slug'], $app['slug']])); ?>"
                           class="<?php echo e($app['slug'] === $appliance['slug'] ? 'active' : ''); ?>">
                            <i class="fa <?php echo e($app['icon']); ?> me-2 text-primary"></i><?php echo e($app['name']); ?>

                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Related Blogs -->
                <?php if($related->count() > 0): ?>
                <div class="sidebar-card">
                    <div class="card-header"><i class="fa fa-newspaper me-2"></i>Related Guides</div>
                    <div class="card-body">
                        <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('blog.details', $rel->slug)); ?>" class="related-link">
                            <i class="fa fa-chevron-right text-primary me-2" style="font-size:0.75rem;"></i>
                            <?php echo e(Str::limit($rel->title, 55)); ?>

                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Other Brands -->
                <div class="sidebar-card">
                    <div class="card-header"><i class="fa fa-th me-2"></i>Other Brands We Service</div>
                    <div class="card-body">
                        <?php $__currentLoopData = \App\Http\Controllers\BrandController::getBrands(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($b['slug'] !== $brand['slug']): ?>
                        <a href="<?php echo e(route('brands.show', $b['slug'])); ?>" class="related-link">
                            <i class="fa fa-chevron-right text-primary me-2" style="font-size:0.75rem;"></i>
                            <?php echo e($b['name']); ?> Repair
                        </a>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\essentechs\essentechs\resources\views/brands/appliance.blade.php ENDPATH**/ ?>