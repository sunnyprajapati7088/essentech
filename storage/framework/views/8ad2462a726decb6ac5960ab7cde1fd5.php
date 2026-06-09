<?php $__env->startComponent('mail::message'); ?>
# New Contact Enquiry

**Name:** <?php echo new \Illuminate\Support\EncodedHtmlString($contact->name); ?>

**Email:** <?php echo new \Illuminate\Support\EncodedHtmlString($contact->email); ?>

**Mobile:** <?php echo new \Illuminate\Support\EncodedHtmlString($contact->mobile); ?>

**Subject:** <?php echo new \Illuminate\Support\EncodedHtmlString($contact->subject); ?>

**Service:** <?php echo new \Illuminate\Support\EncodedHtmlString($contact->service); ?>


**Message:**
<?php echo new \Illuminate\Support\EncodedHtmlString($contact->message); ?>


<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/essentechs/resources/views/emails/contact/admin.blade.php ENDPATH**/ ?>