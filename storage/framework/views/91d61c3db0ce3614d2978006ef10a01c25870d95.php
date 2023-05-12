<?php $__env->startSection('content'); ?>


<div class="container mt-5">
       <?php if(isset($error)): ?>
           <div class="rounded shadow-lg text-center alert alert-danger w-100 h-100">
               <p><?php echo e($error); ?></p>
               <a href="/air" class="btn btn-outline-info w-50 ">Try Again</a>
           </div>
       <?php else: ?>

       <h5 class="">Information About Your Searched Flight</h5>
       <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="row justify-content-center mt-4 shadow-lg rounded p-5 w-75 ml-5 mb-5">

            <div class="col-sm-12 col-md-12 col-lg-5">
                <h5>Flight On: <?php echo e(date('D d M y', strtotime($info->departDate))); ?></h5>
                <h5>From</h5>
                <h5><span class="text-success"> <?php echo e($info->origin); ?> </span> </h5>
                <h5>Departing Time: <span><?php echo e(date('h:i', strtotime($info->departTime))); ?></span></h5>
                <h6>Terminal: <span><?php echo e($info->terminal); ?></span></h6>
                <h6>Flight Number: <span><?php echo e($info->flightNo); ?></span></h6>
                <h6>Aircraft: <span><?php echo e($info->aircraft); ?></span></h6>
                <h6>Flight Stops: <span><?php echo e($info->flightStop); ?></span></h6>
                <h6>Available Seats: <span><?php echo e($info->seats); ?></span></h6>
                <h6>Operated by Ethiopians Airlines</h6>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-5 mb-5">
                <h5>-</h5>
                <h5>To</h5>
                <h5> <span class="text-danger"><?php echo e($info->destination); ?></span></h5>
                <h5>Arriving Time: <span><?php echo e(date('h:i', strtotime($info->returnTime))); ?></span></h5>
                <h6>Terminal: <span><?php echo e($info->terminal); ?></span></h6>

                <a href="/air" class="mt-5 btn btn-success w-50">Book Now</a>
            </div>
       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/flight-info.blade.php ENDPATH**/ ?>