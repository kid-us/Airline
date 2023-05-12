 

 <?php $__env->startSection('content'); ?>

 <div class="container mt-5">
    <div class="rounded shadow-lg m-5">

        
    </div>
        <h5 class="">Your Flight Results</h5>
        <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row justify-content-center mt-4 shadow-lg rounded pt-4 pb-4">
            <div class="col-sm-4 col-md-4 col-lg-2">
                <h5><?php echo e(date('h:i', strtotime($info->departTime))); ?> <?php echo e($info->origin); ?></h5>
                <p class=""><?php echo e($info->origin); ?> - <?php echo e($info->destination); ?></p>
                <p> <span><img src="<?php echo e(asset('img/logo-2.png')); ?>" width="26px" alt=""></span> <?php echo e($info->flightNo); ?>: <?php echo e($info->aircraft); ?> </p>
                <p> Operated by: Ethiopian Airlines</p>
                <p><?php echo e(date('D-d-M', strtotime($info->departDate))); ?></p>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-1 text-center">
               <span class="far fa-clock"></span>
                <p class=""><?php echo e($info->flightTime); ?></p>
                <p class=" text-danger"><?php echo e($info->flightStop); ?></p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-2">
                <h5><?php echo e(date('h:i', strtotime($info->returnTime))); ?> <?php echo e($info->destination); ?></h5>
                <p class=""><?php echo e($info->origin); ?> - <?php echo e($info->destination); ?></p>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">Economy</p>
                    <p class="mt-2"><?php echo e($info->economyPrice); ?> ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger" class="btn-link btn-links btn btn-outline-warning w-50">
                        <span
                            data-price="<?php echo e($info->economyPrice); ?>"
                            data-origin="<?php echo e($info->origin); ?>"
                            data-destination="<?php echo e($info->destination); ?>"
                            data-stops="<?php echo e($info->flightStop); ?>"
                            data-number="<?php echo e($info-> flightNo); ?>"
                            data-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                            data-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                            data-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                            data-class="Economy"
                            >Select
                        </span>
                    </a>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">First Class</p>
                    <p class="mt-2"><?php echo e($info->firstPrice); ?> ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger" class="btn-link btn-links btn btn-outline-warning w-50">
                        <span
                            data-price="<?php echo e($info->firstPrice); ?>"
                            data-origin="<?php echo e($info->origin); ?>"
                            data-destination="<?php echo e($info->destination); ?>"
                            data-stops="<?php echo e($info->flightStop); ?>"
                            data-number="<?php echo e($info-> flightNo); ?>"
                            data-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                            data-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                            data-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                            data-class="First"
                        >Select
                        </span>
                    </a>

                </div>
             </div>

             <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">Business</p>
                    <p class="mt-2"><?php echo e($info->businessPrice); ?> ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger" class="btn-link btn-links btn btn-outline-warning mb-2 w-50">
                        <span
                            data-price="<?php echo e($info->businessPrice); ?>"
                            data-origin="<?php echo e($info->origin); ?>"
                            data-destination="<?php echo e($info->destination); ?>"
                            data-stops="<?php echo e($info->flightStop); ?>"
                            data-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                            data-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                            data-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                            data-number="<?php echo e($info-> flightNo); ?>"
                            data-class="Business"
                            >Select
                        </span>
                    </a>
                </div>
             </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/result.blade.php ENDPATH**/ ?>