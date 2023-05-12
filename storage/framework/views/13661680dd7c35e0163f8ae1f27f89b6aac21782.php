<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="hidden">
        <p>Passengers</p>
        <?php $__currentLoopData = $passenger; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"><?php echo e($pass->lastName); ?></a>
            <a href="#" id="travel-type"><?php echo e($pass->travel); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="row mt-5 justify-content-center">
        <div class="col-6 bg-secondary rounded text-light">
            <p>Passengers Payment Form</p>
            <form id="form" role="form" action="/payment" method="post" class="mt-5 shadow-lg rounded p-5" data-cc-on-file="false"
                data-stripe-publishable-key="pk_test_51KmARWC1vnRWUUD4VR8NF4E7d9eTwsAjEEBaGr4msJUOSSV9VGVNZ75FDpYFWL5uU7TYPSryWf3tX8McRErhh93600RpBA1oak" id="payment-form">
                <?php $__currentLoopData = $passenger; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <input type="text" hidden name="fname[]" value="<?php echo e($pass->firstName); ?>">
                <input type="text" hidden name="mname[]" value="<?php echo e($pass->middleName); ?>">
                <input type="text" hidden name="lname[]" value="<?php echo e($pass->lastName); ?>">
                <input type="text" hidden name="phone[]" value="<?php echo e($pass->phone); ?>">
                <input type="text" name="token" hidden value="<?php echo e($pass->tokenID); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php echo csrf_field(); ?>
                <input type="hidden" name="token" id="token">
                <input type="hidden" name="total" id="total">
                <input type="hidden" name="user" id="user">

                <p class="alert alert-danger error p-2 hidden" id="error-message">Please fill the form!</p>


                <div class='col-sm-12 col-md-12 col-lg-12 mb-3'>
                    <label class='control-label'>Name on Card</label> <input class='form-control rounded' size='4' type='text' id="card_name" value="Lenny">
                </div>

                <div class='col-sm-12 col-md-12 col-lg-12 mb-3'>
                    <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control rounded card-number'
                        size='20' type='text' name="card_number" id="card_number" value="4242424242424242">
                </div>

                <div class="row pl-3 pr-3">
                    <div class='col-sm-12 col-md-12 col-lg-4 mb-3'>
                        <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control rounded card-cvc'
                            placeholder='ex. 311' size='4' type='text' id="cvc" value="123">
                    </div>
                    <div class='col-sm-12 col-md-12 col-lg-4 mb-3'>
                        <label class='control-label'>Expire Month</label> <input class='form-control rounded card-expiry-month'
                            placeholder='MM' size='2' type='text' id="exp_month" value="04">
                    </div>
                    <div class='col-sm-12 col-md-12 col-lg-4 mb-3'>
                        <label class='control-label'>Expire Year</label> <input class='form-control rounded card-expiry-year'
                            placeholder='YYYY' size='4' type='text' id="exp_year" value="2034">
                    </div>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                    <label class='control-label'>Price</label> <input class='form-control rounded card-price bg-success text-center text-light' type='tel' name="price" id="price" disabled>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                    <button type="submit" class="btn btn-primary w-100">Pay</button>
                </div>

                <span class="ml-4 mt-2">
                    <img src="<?php echo e(asset('img/credit-card.png')); ?>" class="ml-5" width="40px">
                    <img src="<?php echo e(asset("img/visa.png")); ?>" class="ml-5" width="40px">
                    <img src="<?php echo e(asset("img/master-card.png")); ?>" class="ml-5" width="40px">
                </span>

                <div class="reserve hidden"></div>

            </form>
        </div>

        </div>
    </div>

</div>



</body>
<script src="<?php echo e(asset("Js/jar.amd.min.js")); ?>"></script>
<script src="<?php echo e(asset("Js/cookies/paymentCookie.js")); ?>"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="<?php echo e(asset("Js/jquery-3.6.0.min.js")); ?>"></script>

<script>

    $('#form').on('submit', (e) => {

        const form = $('#form');

        e.preventDefault();

        const nameOnCard = $("#card_name").val();
        const cardNumber = $('#card_number').val();
        const cvc = $('#cvc').val();
        const expiryMonth = $('#exp_month').val();
        const expiryYear = $('#exp_year').val();

        if(!form.data('cc-on-file'))
        {
            Stripe.setPublishableKey(form.data('stripe-publishable-key'));

            Stripe.createToken({
                number: cardNumber,
                cvc: cvc,
                exp_month: expiryMonth,
                exp_year: expiryYear
            }, (status, response) => {
                if(response.error) return alert('Error occured')

                var token = response['id'];
                // let total = parseInt(jar.get('total'))

                total = Math.ceil(total)

                $('#token').attr('value', token);
                // $("#total").attr('value', total);
                // $("#user").attr('value', jar.get('user'))

                document.getElementById('form').submit();
            });
        }

    })



</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/payPal.blade.php ENDPATH**/ ?>