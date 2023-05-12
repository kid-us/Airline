<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/admin.css')); ?>">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <title>Manager</title>
</head>
<body>
    <div class="container-fluid">
        <div class="left-panel float-left fixed-left mr-4 p-4">
            <a href="#" class="mt-2">Ethiopians</a>
            <p class="text-light small mt-5 mb-3">Menu</p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="dashboard" class="text-light">Dashboard <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="profile" class="text-light">Profile <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="text-light w-100 mb-3">Privilege</p>
            <p class="ml-2 w-100 mb-3">
                <a href="#" id="grant-btn" class="text-light"> Grant <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="revoke-btn" class="text-light"> Revoke<span class="right mr-2"> ⥱ </span>
                </a>
            </p>
        </div>
        <div style="margin-left: 250px" class="fixed-top p-3 bg-light mb-5">
            <a href="#" class="ml-4"><img src="<?php echo e(asset('img/menu.png')); ?>" alt="" width="20px"></a>
            <a href="#" class="right margin-right"> <span></span>lorem</a>
            <a href="#" class="right mr-4"> <span></span>lorems</a>
        </div>

        <div style="margin-left: 250px" class="mt-5 p-4">

            <div id="dashboard-page">
                <div class=" d-flex mt-5 justify-content-center">
                    <p class="w-50">Welcome back again <span class="font-weight-bold text-danger"><?php echo e(session ('user')); ?></span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, repellendus numquam rem impedit temporibus aspernatur, aut error alias amet officia, corrupti tempore repellat. Quo ipsam aperiam aliquam vitae mollitia eaque.</p>
                </div>

                <div class="row justify-content-center mt-4">
                    <form action="<?php echo e(route('update')); ?>" method="POST">
                        <?php echo method_field("PATCH"); ?>
                        <?php echo csrf_field(); ?>
                        <p>Change website Slogan here</p>
                        <?php if('slogan-status'): ?>
                            <p id="slogan-status" class="text-success small"><?php echo e(session('slogan-status')); ?></p>
                        <?php endif; ?>

                        <?php if('slogan-error'): ?>
                            <p id="slogan-status" class="text-danger mt-1"><?php echo e(session('slogan-error')); ?></p>
                        <?php endif; ?>

                        <textarea name="slogan" id="slogan" cols="60" rows="4" class="form-control text-area <?php $__errorArgs = ['slogan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"></textarea>

                        <?php $__errorArgs = ['slogan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <button type="submit" name="slogan-btn" class="btn btn-success p-2 mt-3 w-25">Change</button>
                        <a href="<?php echo e(route('air')); ?>" class="ml-5 hidden" id="checkout">Checkout</a>
                    </form>
                </div>
            </div>

            
            <div id="grant-page" class="row justify-content-center mt-4 mb-5 hidden">
                <form action="<?php echo e(route('register')); ?>" id="clerk-form" method="post" class="shadow-lg rounded p-5 mb-4 bg-light text-center mr-5 form">
                <?php echo csrf_field(); ?>
                <p>Give Account for <span class="text-primary font-weight-bold">Clerk</span></p>
                <img src="<?php echo e(asset('img/clerk.png')); ?>" alt="" width="40px">

                <?php if(session('status')): ?>
                    <p class="small text-success mt-1 mb-3"><?php echo e(session ('status')); ?></p>
                <?php endif; ?>

                <?php if(session('error')): ?>
                    <p class="small text-danger mt-1 mb-2"><?php echo e(session ('error')); ?></p>
                <?php endif; ?>

                <input type="text" name="clerk-username" class="form-control-plaintext mb-2 <?php $__errorArgs = ['clerk-username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Clerk Username">

                <?php $__errorArgs = ['clerk-username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger mt-1 mb-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="email" name="clerk-email" class="form-control-plaintext mb-3 <?php $__errorArgs = ['clerk-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Clerk Email">

                <?php $__errorArgs = ['clerk-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger mt-1 mb-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="password" name="clerk-password" id="clerk-password" class="form-control-plaintext mb-3 <?php $__errorArgs = ['clerk-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password">

                <?php $__errorArgs = ['clerk-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger mt-1 mb-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="password" name="clerk-confirm-password" id="clerk-confirm-password" class="form-control-plaintext <?php $__errorArgs = ['clerk-confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Confirm Password">

                <?php $__errorArgs = ['clerk-confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p class="small text-danger mt-1 mb-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <span class="float-left mt-3 mb-1"><input type="checkbox" name="check" id="show-clerk-password"> Show Password</span> <br> <br>

                <input type="text" name="account-owner" value="clerk" hidden>

                <button type="submit" class="btn btn-success p-2 mt-4 w-50">Create</button>
            </form>

            
            <form action="<?php echo e(route('register')); ?>" method="POST" id="manager-form" class="shadow-lg rounded p-5 mb-4 text-center form form-bg mt-4">
                <?php echo csrf_field(); ?>
                <p>Give Account for <span class="text-primary font-weight-bold">Manager</span></p>
                <img src="<?php echo e(asset('img/manager.png')); ?>" alt="" width="40px">

                <?php if(session('status')): ?>
                    <p class="text-success small mt-1 mb-2"> <?php echo e(session ('status')); ?> </p>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <p class="text-danger small mt-1 mb-2"> <?php echo e(session ('error')); ?> </p>
                <?php endif; ?>

                <input type="text" name="manager-username" class="form-control-plaintext mb-3 <?php $__errorArgs = ['manager-username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Manager Username">

                <?php $__errorArgs = ['manager-username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger"> <?php echo e($message); ?> </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="email" name="manager-email" class="form-control-plaintext mb-3 <?php $__errorArgs = ['manager-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Manager Email">

                <?php $__errorArgs = ['manager-email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger"> <?php echo e($message); ?> </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="password" name="manager-password" id="manager-password" class="form-control-plaintext mb-3 <?php $__errorArgs = ['manager-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password">

                <?php $__errorArgs = ['manager-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger"> <?php echo e($message); ?> </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="password" name="manager-confirm-password" id="manager-confirm-password" class="form-control-plaintext <?php $__errorArgs = ['manager-confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Confirm Password">

                <?php $__errorArgs = ['manager-confirm-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="small text-danger"> <?php echo e($message); ?> </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <span class="float-left mt-3 mb-1"><input type="checkbox" name="check" id="show-manager-password"> Show Password</span> <br> <br>

                <input type="text" name="account-owner" value="manager" hidden>

                <button type="submit" name="create" class="btn btn-success p-2 mt-4 w-50">Create</button>
            </form>
        </div>

        <div id="profile-page" class="shadow-lg rounded mt-5 bg-light hidden">
            <form action="<?php echo e(route('update')); ?>}" method="POST" class="pt-5">
                <?php if('update-status'): ?>
                <p class="text-center"><?php echo e(session('update-status')); ?></p>
                <?php endif; ?>

             <div class="row justify-content-center ml-4 mb-4">
               <div class="col-lg-3 col-sm-12">
                   <label for="email">Email</label>
               </div>
               <div class="col-lg-7 col-sm-12 mb-4">
                   <input type="email" id="email" name="email" class="form-control rounded <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-laintext <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                   <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($message); ?></p>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               </div>

               <div class="col-lg-3 col-sm-12">
                   <label for="username">Username</label>
               </div>
               <div class="col-lg-7 col-sm-12 mb-4">
                   <input id="username" type="text" name="username" class="form-control rounded <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-plaintext <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                   <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                       <p class="text-danger"><?php echo e($message); ?></p>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               </div>
               <div class="col-lg-3 col-sm-4">
                   <label for="Password">Password</label>
               </div>

               <div class="col-lg-7 col-sm-8 mb-4">
                   <a id="change-text" class="small font-weight-bold" style="cursor: pointer;">Also Change Password?</a>

                   <input id="input-password" type="password" name="current-password" class="form-control rounded mb-3 <?php $__errorArgs = ['current-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-plaintext <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                   <?php $__errorArgs = ['current-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                       <p class="text-danger"><?php echo e($message); ?></p>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                   <input id="new-password" type="password" name="new-password" class="form-control rounded <?php $__errorArgs = ['new-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-plaintext <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> hidden" placeholder="New Password">
                   <?php $__errorArgs = ['new-password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                       <p class="text-danger"><?php echo e($message); ?></p>
                   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
               </div>

               <div class="offset-3 col-lg-7 col-sm-12 mb-4">
                   <button id="done" type="submit" name="done" class="btn btn-danger w-25">Update</button>
               </div>
            </div>
           </form>
        </div>

        </div>
    </div>
    <script src="<?php echo e(asset('Js/admin.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Admin/ad.blade.php ENDPATH**/ ?>