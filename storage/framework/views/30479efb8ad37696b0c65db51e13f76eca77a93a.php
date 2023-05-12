<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center mt-1">
        <?php if('success'): ?>
            <p><?php echo e(session('success')); ?></p>
        <?php endif; ?>
        <?php $__currentLoopData = $reserve; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="mt-5 mb-5 shadow-lg rounded p-3 w-75">
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


                <form action="/ticket" method="post">
                    <?php echo csrf_field(); ?>
                    
                    <p><a href="#" id="cancel-link" class="bg-info text-dark p-1 rounded" style="text-decoration: none">Do you want to cancel this flight?</a></p>
                    <div id="cancel-form" class="w-25 hidden">
                        <label for="ticket">Ticket-No</label>
                        <input type="text" autocomplete="off" class="form-control" name="ticket-no" placeholder="ET-">
                        <button type="submit" class="btn btn-danger mt-3 w-50">Cancel</button>
                    </div>
                </form>


            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

    <script>
        const cancelLink = document.getElementById("cancel-link");
        const cancelForm = document.getElementById("cancel-form");

        cancelLink.addEventListener("click", function () {
            if (cancelForm.classList.contains("hidden")) {
                cancelForm.classList.remove("hidden");
            } else {
                cancelForm.classList.add("hidden");
            }
        });

    </script>
<?php $__env->stopSection(); ?>

    


<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/check-in.blade.php ENDPATH**/ ?>