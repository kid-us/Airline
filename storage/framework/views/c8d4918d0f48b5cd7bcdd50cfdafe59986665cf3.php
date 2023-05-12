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
            <a href="#" class="mt-2"><img src="<?php echo e(asset("img/main-logo.png")); ?>" alt="" width="100px"></a>
            <p class="text-light small mt-5 mb-3">Menu</p>
            
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="schedule" class="text-light"> Schedule Flight<span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="postpone" class="text-light"> Postpone Flight <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="news" class="text-light">
                    <span class="fas fa-newspaper mr-3 text-light"></span> News <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
        </div>
        <div style="margin-left: 250px" class="fixed-top p-3 bg-light mb-5">
            <a href="/manager/logout" class="right margin-right">Logout</a>
            <a href="#" class="right mr-4"><?php echo e(session('user')); ?> <span class="fas fa user"></span></a>
        </div>

        <div style="margin-left: 250px" class="mt-5 p-4">
            <div id="schedule-page" class="pr-4 pl-4">
                <p class="p-size">Schedule flight</p>
                <form action="/create" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if('schedule-status'): ?>
                        <p class="text-center text-success"><?php echo e(session('schedule-status')); ?></p>
                    <?php endif; ?>
                    <div id="manage flights" class="row justify-content-center shadow-lg rounded bg-light p-2">
                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Depart From</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" name="origin" class="form-control rounded <?php $__errorArgs = ['origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('origin')); ?>">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Arrive To</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" name="destination" class="form-control rounded <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('destination')); ?>" >
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Date</p>
                            <input type="date" name="depart-date" class="form-control rounded <?php $__errorArgs = ['depart-date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('depart-date')); ?>">
                        </div>

                        

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Time</p>
                            <input type="time" name="depart-time" class="form-control rounded <?php $__errorArgs = ['depart-time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('depart-time')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Arrive Time</p>
                            <input type="time" name="arrive-time" class="form-control rounded <?php $__errorArgs = ['arrive-time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('arrive-time')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Duration</p>
                            <input type="text" name="duration" class="form-control rounded <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('duration')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Depart Terminal</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-terminal"></span>
                                    <input type="number" name="terminal" class="form-control rounded <?php $__errorArgs = ['terminal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('terminal')); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Number</p>
                            <input type="text" name="flight-no" class="form-control rounded <?php $__errorArgs = ['flight-no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('flight-no')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Stop</p>
                            <select name="flight-stop" class="form-control rounded">
                                <option value="Non-stop">Non-Stop</option>
                                <option value="1-stop">1-Stop</option>
                                <option value="2-stop">2-Stop</option>
                            </select>

                        </div>


                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Aircraft</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane"></span>
                                </div>
                                <input type="text" name="aircraft" class="form-control rounded <?php $__errorArgs = ['aircraft'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('aircraft')); ?>">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Economy Price</p>
                                <input type="text" name="eco-price" class="form-control rounded <?php $__errorArgs = ['eco-price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('eco-price')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">First Price</p>
                            <input type="text" name="first-price" class="form-control rounded <?php $__errorArgs = ['first-price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('first-price')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Business Price</p>
                            <input type="text" name="business-price" class="form-control rounded <?php $__errorArgs = ['business-price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('business-price')); ?>">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Seats</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-chair"></span>
                                </div>
                                <input type="number" name="seats" class="form-control rounded <?php $__errorArgs = ['seats'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('seats')); ?>">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Flight Type</p>
                            <select name="flight-type" id="flight-type" class="form-control rounded">
                                <option value="Domestic">Domestic</option>
                                <option value="Internationa">International</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success mt-5 mb-4 w-25">Schedule</button>
                    </div>
                </form>
            </div>


            <div id="postpone-page" class="pr-4 pl-4 hidden">
                <p class="p-size">Delete flight</p>
                <form action="/delete-flight" method="post">
                    <?php echo csrf_field(); ?>
                    <?php if( session('delete')): ?>
                        <p class="text-center text-success"><?php echo e(session('schedule-status')); ?></p>
                    <?php endif; ?>
                    <div id="delete-flights" class="row justify-content-center shadow-lg rounded bg-light p-2">
                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Depart From</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" name="origin" class="form-control rounded <?php $__errorArgs = ['origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('origin')); ?>">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Arrive To</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" name="destination" class="form-control rounded <?php $__errorArgs = ['destination'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('destination')); ?>" >
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Date</p>
                            <input type="date" name="depart-date" class="form-control rounded <?php $__errorArgs = ['depart-date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('depart-date')); ?>">
                        </div>


                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Number</p>
                            <input type="text" name="flight-no" class="form-control rounded <?php $__errorArgs = ['flight-no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('flight-no')); ?>">
                        </div>


                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Flight Type</p>
                            <select name="flight-type" id="flight-type" class="form-control rounded">
                                <option value="Domestic">Domestic</option>
                                <option value="Internationa">International</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-danger mt-5 mb-4 w-25">Delete</button>
                    </div>
                </form>
            </div>


            <div id="profile-page" class="shadow-lg rounded mt-5 bg-light hidden">
                <form action="<?php echo e(route('update')); ?>" method="post" class="pt-5">
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

            <div id="news-page" class="row justify-content-center mt-5 hidden">
                <form action="<?php echo e(route('insert')); ?>" method="post" class="mt-5">
                    <?php echo csrf_field(); ?>
                    <p>Post News to the Website</p>
                    <?php if('status'): ?>
                        <p id="slogan-status" class="text-success small"><?php echo e(session('status')); ?></p>
                    <?php endif; ?>

                    <textarea name="news" id="news" cols="60" rows="4" class="form-control text-area <?php $__errorArgs = ['news'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error-textarea <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Write News Here"></textarea>

                    <?php $__errorArgs = ['news'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger mt-2"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <button type="submit" name="slogan-btn" class="btn btn-success p-2 mt-3 w-25">Post</button>
                    <a href="<?php echo e(route('air')); ?>" class="ml-5 hidden" id="checkout">Checkout</a>
                </form>
            </div>


        </div>
    </div>
    <script src="<?php echo e(asset('Js/panel.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/manager/profile.blade.php ENDPATH**/ ?>