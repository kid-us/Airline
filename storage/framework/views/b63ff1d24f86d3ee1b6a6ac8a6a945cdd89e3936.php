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
    <title>Clerk</title>
</head>
<body>
    <div class="container-fluid">
        <div class="left-panel float-left fixed-left mr-4 p-4">
            <a href="#" class="mt-2"><img src="<?php echo e(asset("img/main-logo.png")); ?>" alt="" width="100px"></a>
            <p class="text-light small mt-5 mb-3">Menu</p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="dashboard" class="text-light">Dashboard <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="profile" class="text-light">Profile <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
        </div>
        <div style="margin-left: 250px" class="fixed-top p-3 bg-light mb-5">
            <a href="/admin/logout" class="right margin-right"> <span class="fas fa-power-off "></span> Logout</a>
            <a href="#" class="right mr-4"> <?php echo e(session ('user')); ?> <span class="fas fa-user-circle"></span></a>
        </div>

        <div style="margin-left: 250px" class="mt-5 p-4">

            <div id="dashboard-page">
                <h5>  Make Reservation for the Passenger. </h5>
                <div class="row mt-5 justify-content-center shadow-lg rounded">
                   <div>
                       <form action="flight/find" method="post">
                           Depart From
                           <input type="text" id="from" name="from" placeholder="From" class="form-control-plaintext mr-4 <?php $__errorArgs = ['from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('from')); ?>">

                           <input type="text" id="to" placeholder="To" name="to" class="form-control-plaintext mr-4 <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('to')); ?>">


                           <input type="date" name="depart-date" id="depart-date" class="form-control date-input mr-3 rounded <?php $__errorArgs = ['depart-date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" title="Depart Date" value="<?php echo e(old('depart-date')); ?>">


                           <input type="date" name="return-date" id="return-date" class="form-control date-input mr-3 rounded <?php $__errorArgs = ['return-date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" title="Return Date" value="<?php echo e(old('return-date')); ?>" hidden>

                           <input type="text" id="trip-type" name="trip-type" value="One-way" hidden>
                           <input type="text" id="adult-size" name="adult-size" value="1" hidden>
                           <input type="text" id="child-size" name="child-size" value="0" hidden>
                           <input type="text" id="infant-size" name="infant-size" value="0" hidden>

                           <button type="submit" id="show-flights" name="show-flight" class="btn btn-success shadow-lg">Show Flights</button>
























                       </form>
                   </div>
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

            
            <form action="<?php echo e(route('register')); ?>" method="post" id="manager-form" class="shadow-lg rounded p-5 mb-4 text-center form form-bg mt-4">
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
    <script src="<?php echo e(asset("Js/sweetalert2.all.min.js")); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Clerk/profile.blade.php ENDPATH**/ ?>