<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if('error'): ?>
        <p class="text-danger"> <?php echo e(session('error')); ?></p>
    <?php endif; ?>
    <p align='center'><?php echo e($clerk->username); ?></p>
    <a href="/clerk/logout">Logout</a>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views//clerk/profile.blade.php ENDPATH**/ ?>