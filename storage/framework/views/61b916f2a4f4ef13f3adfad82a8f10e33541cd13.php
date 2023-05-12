<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/login.css')); ?>">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <title id="browser-title">Login</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center mt-5" id="manager-login">
            <div class="col-sm-12 col-md-12 colxl-6 col-lg-6 rounded shadow-lg mt-5 p-5 bg-light">
                <form action="/manager/login/done" method="POST" class="text-center">
                    <?php echo csrf_field(); ?>
                    <img src="<?php echo e(asset('img/manager.png')); ?>" alt="" width="50px" class="rounded mb-3">
                    <?php if(session('status')): ?>
                        <p class="small text-danger text-center mb-2"><?php echo e(session ('status')); ?></p>
                    <?php endif; ?>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-mail-bulk"></span>
                        </div>
                        <input type="email" name="email" class="form-control-plaintext <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email">
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger float-left ml-5 mt-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-key"></span>
                        </div>
                        <input type="password" name="password" class="form-control-plaintext <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password">
                        <input type="text" name="user-type" value="manager" hidden>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="small text-danger float-left ml-5 mt-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <button class="mt-5 btn w-50 btn-success text-center p-2">Login</button>
                </form>
            </div>
        </div>

        <footer class="text-center mt-5">
            <a href="<?php echo e('/air'); ?>"><img src="<?php echo e(asset('img/logo-2.png')); ?>" width="100px""></a>
        </footer>
    </div>
    <script src="<?php echo e(asset('Js/login.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Auth/managerLogin.blade.php ENDPATH**/ ?>