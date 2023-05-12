<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<form action="/customer/login" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>

    <div>
        <input type="password" name="password" placeholder="Password">
    </div>

    <button type="submit">Login</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/customer/login.blade.php ENDPATH**/ ?>