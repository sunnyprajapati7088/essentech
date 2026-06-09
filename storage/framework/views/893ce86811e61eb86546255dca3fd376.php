<?php $__env->startSection('title', 'Contact us | Essen Techs - 919746700889'); ?>
<?php $__env->startSection('meta_description',
    'Ready to schedule an appointment or learn more about our services? Contact Essentechs
    today for the best AC repair services in Kerala'); ?>
<?php $__env->startSection('meta_keywords',
    'Ready to schedule an appointment or learn more about our services? Contact Essentechs today
    for the best AC repair services in Kerala'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-3">If You Have Any Query, Please Contact Us</h1>
                    <p class="mb-4">At EssenTechs, we’re dedicated to keeping your home and business running smoothly.
                        Whether you're a homeowner, office, school, or any organization — we’ve got you covered with
                        fast, reliable, and affordable appliance repair services. </p>
                    <form id="contactForm" action="<?php echo e(route('contact.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo e(old('name')); ?>" required>
                                <?php if($errors->has('name')): ?>
                                    <div class="text-danger"><?php echo e($errors->first('name')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo e(old('email')); ?>" required>
                                <?php if($errors->has('email')): ?>
                                    <div class="text-danger"><?php echo e($errors->first('email')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="tel" name="mobile" class="form-control" placeholder="Enter mobile number" value="<?php echo e(old('mobile')); ?>" required>
                                <?php if($errors->has('mobile')): ?>
                                    <div class="text-danger"><?php echo e($errors->first('mobile')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject" value="<?php echo e(old('subject')); ?>" required>
                                <?php if($errors->has('subject')): ?>
                                    <div class="text-danger"><?php echo e($errors->first('subject')); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" class="form-control" placeholder="Write your message" style="height: 120px;" required><?php echo e(old('message')); ?></textarea>
                                <?php if($errors->has('message')): ?>
                                    <div class="text-danger"><?php echo e($errors->first('message')); ?></div>
                                <?php endif; ?>
                            </div>

                            <input type="hidden" name="page" value="Contact Page">


                            <div class="col-12">
                            <button id="submitBtn" class="btn btn-primary py-3 px-5" type="submit">
                                Send Message
                            </button>
                            <button id="loadingBtn" class="btn btn-primary py-3 px-5 d-none" type="button" disabled>
                                <span class="spinner-border spinner-border-sm me-2"></span> Sending...
                            </button>
                        </div>


                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative overflow-hidden h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6915662791384!2d76.35092087494714!3d10.042290390065256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080bdbcdeb93e1%3A0x55d1863026bb19f0!2sEdappally%20-%20Pukkattupady%20Rd%2C%20Kerala!5e0!3m2!1sen!2sin!4v1753694520035!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");
        const submitBtn = document.getElementById("submitBtn");
        const loadingBtn = document.getElementById("loadingBtn");

        form.addEventListener("submit", function () {
            // Hide normal button, show loader button
            submitBtn.classList.add("d-none");
            loadingBtn.classList.remove("d-none");
        });
    });
    </script>
    <!-- Contact End -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/essentechs/resources/views/contact.blade.php ENDPATH**/ ?>