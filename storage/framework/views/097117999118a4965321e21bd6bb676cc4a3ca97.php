 

 <?php $__env->startSection('content'); ?>

 <div class="container mt-5">
    

        
    
        <?php if(isset($error)): ?>
            <div class="rounded shadow-lg text-center alert alert-danger w-100 h-100">
                <p><?php echo e($error); ?></p>
                <a href="/air" class="btn btn-outline-info w-50 ">Try Again</a>
            </div>
        <?php else: ?>
            <h5 class="">Hi there this is Your Round-Trip Flight Results</h5>

            <div class="row justify-content-center mt-4 pb-4">
            
            <div class="col-sm-12 colmd-6 col-lg-6 w-100 h-100 border-r">
                <fieldset  id="depart-container" class="rounded shadow-lg bg-dark text-light">
                    <?php if( session()->has('flight-error')): ?>
                        <p class="text-danger"><?php echo e(session('flight-error')); ?></p>
                    <?php endif; ?>
                    <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row rounded mb-5 p-4">
                        <div class="col-5">
                            <h4>Arrive On <?php echo e(date('D-d-M', strtotime($info->departDate))); ?></h4>
                            <h5><?php echo e(date('h:i', strtotime($info->departTime))); ?> <?php echo e($info->origin); ?></h5>
                            <p class=""><?php echo e($info->origin); ?> Airport</p>
                            <p> <span><img src="<?php echo e(asset('img/logo-2.png')); ?>" width="26px" alt=""></span> <?php echo e($info->flightNo); ?>: <?php echo e($info->aircraft); ?> </p>
                            <p> Operated by: Ethiopian Airlines</p>

                        </div>

                        <div class="col-2">
                            <h1>-</h1>
                            <span class="far fa-clock"></span>
                            <p class=""><?php echo e($info->flightTime); ?></p>
                            <p class=" text-danger"><?php echo e($info->flightStop); ?></p>
                        </div>

                        <div class="col-4 mt-2">
                            <h5><?php echo e(date('h:i', strtotime($info->returnTime))); ?> <?php echo e($info->destination); ?></h5>
                            <p class=""><?php echo e($info->destination); ?> Airport</p>
                        </div>

                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> Economy </p>
                                <p class="mt-2"><?php echo e($info->economyPrice); ?> ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="<?php echo e($info->economyPrice); ?>"
                                        data-depart-origin="<?php echo e($info->origin); ?>"
                                        data-depart-destination="<?php echo e($info->destination); ?>"
                                        data-depart-stops="<?php echo e($info->flightStop); ?>"
                                        data-depart-number="<?php echo e($info-> flightNo); ?>"
                                        data-depart-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                                        data-depart-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                                        data-depart-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                                        data-depart-class="First"
                                        data-depart-date=" <?php echo e($info->departDate); ?>"
                                        data-depart-seats="<?php echo e($info->seats - $info->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> First </p>
                                <p class="mt-2"><?php echo e($info->firstPrice); ?> ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="<?php echo e($info->firstPrice); ?>"
                                        data-depart-origin="<?php echo e($info->origin); ?>"
                                        data-depart-destination="<?php echo e($info->destination); ?>"
                                        data-depart-stops="<?php echo e($info->flightStop); ?>"
                                        data-depart-number="<?php echo e($info-> flightNo); ?>"
                                        data-depart-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                                        data-depart-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                                        data-depart-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                                        data-depart-class="First"
                                        data-depart-date=" <?php echo e($info->departDate); ?>"
                                        data-depart-seats="<?php echo e($info->seats - $info->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> Business </p>
                                <p class="mt-2"><?php echo e($info->businessPrice); ?> ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="<?php echo e($info->businessPrice); ?>"
                                        data-depart-origin="<?php echo e($info->origin); ?>"
                                        data-depart-destination="<?php echo e($info->destination); ?>"
                                        data-depart-stops="<?php echo e($info->flightStop); ?>"
                                        data-depart-number="<?php echo e($info-> flightNo); ?>"
                                        data-depart-arrive="<?php echo e(date('h:i', strtotime($info->returnTime))); ?>"
                                        data-depart-depart-date="<?php echo e(date('D-d-M', strtotime($info->departDate))); ?>"
                                        data-depart-depart="<?php echo e(date('h:i', strtotime($info->departTime))); ?>"
                                        data-depart-class="First"
                                        data-depart-date=" <?php echo e($info->departDate); ?>"
                                        data-depart-seats="<?php echo e($info->seats - $info->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color:  #fff">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </fieldset>
            </div>

            <a href="/passenger/round-trip" id="next-btn" class="btn btn-primary next-btn hidden">Next</a>

            
            <div class="col-sm-12 colmd-6 col-lg-6 w-100 h-100">
                <fieldset id="return-container" class="shadow-lg rounded mt-5 fieldset-cursor" disabled>

                    <?php if(session()->has('return-error')): ?>
                        <p class="text-danger"><?php echo e(session('return-error')); ?></p>
                    <?php endif; ?>
                    <?php $__currentLoopData = $returns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $return): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row  mb-5 p-4">
                            <div class="col-5">
                                <h4>Return On <?php echo e(date('D-d-M', strtotime($return->departDate))); ?></h4>
                                <h5><?php echo e(date('h:i', strtotime($return->departTime))); ?> <?php echo e($return->origin); ?></h5>
                            <p class=""><?php echo e($return->origin); ?> Airport</p>
                            <p> <span><img src="<?php echo e(asset('img/logo-2.png')); ?>" width="26px" alt=""></span> <?php echo e($return->flightNo); ?>: <?php echo e($return->aircraft); ?> </p>
                            <p> Operated by: Ethiopian Airlines</p>

                        </div>

                        <div class="col-2">
                            <h1>-</h1>
                            <span class="far fa-clock"></span>
                            <p class=""><?php echo e($return->flightTime); ?></p>
                            <p class=" text-danger"><?php echo e($return->flightStop); ?></p>
                        </div>

                        <div class="col-4 mt-2">
                            <h5><?php echo e(date('h:i', strtotime($return->returnTime))); ?> <?php echo e($return->destination); ?></h5>
                            <p class=""><?php echo e($return->destination); ?> Airport</p>
                        </div>

                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> Economy </p>
                                <p class="mt-2"><?php echo e($return->economyPrice); ?> ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="<?php echo e($return->economyPrice); ?>"
                                        data-return-origin="<?php echo e($return->origin); ?>"
                                        data-return-destination="<?php echo e($return->destination); ?>"
                                        data-return-stops="<?php echo e($return->flightStop); ?>"
                                        data-return-number="<?php echo e($return-> flightNo); ?>"
                                        data-return-arrive="<?php echo e(date('h:i', strtotime($return->returnTime))); ?>"
                                        data-return-depart-date="<?php echo e(date('D-d-M', strtotime($return->departDate))); ?>"
                                        data-return-depart="<?php echo e(date('h:i', strtotime($return->departTime))); ?>"
                                        data-return-class="First"
                                        data-return-date = "<?php echo e($return->departDate); ?>"
                                        data-return-seats="<?php echo e($return->seats - $return->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> First </p>
                                <p> Economy </p>
                                <p class="mt-2"><?php echo e($return->firstPrice); ?> ETB</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="<?php echo e($return->firstPrice); ?>"
                                        data-return-origin="<?php echo e($return->origin); ?>"
                                        data-return-destination="<?php echo e($return->destination); ?>"
                                        data-return-stops="<?php echo e($return->flightStop); ?>"
                                        data-return-number="<?php echo e($return-> flightNo); ?>"
                                        data-return-arrive="<?php echo e(date('h:i', strtotime($return->returnTime))); ?>"
                                        data-return-depart-date="<?php echo e(date('D-d-M', strtotime($return->departDate))); ?>"
                                        data-return-depart="<?php echo e(date('h:i', strtotime($return->departTime))); ?>"
                                        data-return-class="First"
                                        data-return-date = "<?php echo e($return->departDate); ?>"
                                        data-return-seats="<?php echo e($return->seats - $return->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> Business </p>
                                <p> Economy </p>
                                <p class="mt-2"><?php echo e($return->businessPrice); ?> ETB</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="<?php echo e($return->businessPrice); ?>"
                                        data-return-origin="<?php echo e($return->origin); ?>"
                                        data-return-destination="<?php echo e($return->destination); ?>"
                                        data-return-stops="<?php echo e($return->flightStop); ?>"
                                        data-return-number="<?php echo e($return-> flightNo); ?>"
                                        data-return-arrive="<?php echo e(date('h:i', strtotime($return->returnTime))); ?>"
                                        data-return-depart-date="<?php echo e(date('D-d-M', strtotime($return->departDate))); ?>"
                                        data-return-depart="<?php echo e(date('h:i', strtotime($return->departTime))); ?>"
                                        data-return-class="First"
                                        data-return-date = "<?php echo e($return->departDate); ?>"
                                        data-return-seats="<?php echo e($return->seats - $return->reserved); ?>"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #fff">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </fieldset>
            </div>
        </div>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/round-trip.blade.php ENDPATH**/ ?>