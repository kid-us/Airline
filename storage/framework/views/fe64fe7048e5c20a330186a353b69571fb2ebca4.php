<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset("bootstrap/css/bootstrap.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("Css/style.css")); ?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <?php $__currentLoopData = $reserve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mt-5 shadow-lg rounded p-3 w-75">
                    <h5> <?php echo e(date('d M y', strtotime($passenger->date))); ?> - Trip To <span class="text-success"> <?php echo e($passenger->destination); ?> </span> From <span class="text-danger"> <?php echo e($passenger->origin); ?> </span>  <img class="float-right" src="<?php echo e(asset('img/logo-2.png')); ?>" width="60x">
                    </h5>
                    <hr>
                     <h5> <span class="small">Prepared for: </span><?php echo e($passenger->firstName); ?>  <?php echo e($passenger->middleName); ?> <?php echo e($passenger->lastName); ?></h5>
                    <div class="row p-2">
                        <div class="col-4 border p-2 rounded">
                            <h5>ETHIOPIAN AIRLINES</h5>
                            <h6> Reservation Code <span class="small font-weight-bold"> <?php echo e($passenger->ticket); ?> </span> </h6>
                            <h6>Departure: <?php echo e(date('D d M', strtotime($passenger->date))); ?> </h6>
                            <h5><?php echo e($passenger->flightNo); ?></h5>
                            <h6><?php echo e($passenger->class); ?></h6>
                            <p class="small">Please verify flight times prior to departure</p>
                        </div>
                        <div class="col-4 border p-2 rounded">
                            <h6><?php echo e($passenger->origin); ?></h6>
                            <hr>
                            <span>Departing At: </span>
                            <h6><?php echo e($passenger->departAt); ?></h6>
                            <span>Terminal:</span>
                            <h6>Terminal: <?php echo e($passenger->terminal); ?></h6>
                        </div>
                        <div class="col-4 border p-2 rounded">
                            <h6><?php echo e($passenger->destination); ?></h6>
                            <hr>
                            <span>Arrive At: </span>
                            <h6><?php echo e($passenger->arriveAt); ?></h6>
                            <span>Terminal:</span>
                            <h6>Terminal: <?php echo e($passenger->terminal); ?></h6>
                        </div>
                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/ticket.blade.php ENDPATH**/ ?>