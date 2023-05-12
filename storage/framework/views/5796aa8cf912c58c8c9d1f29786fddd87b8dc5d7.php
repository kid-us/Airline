<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('Css/style.css')); ?>">
    
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
      />
    <title>Passenger</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center mt-5">

        <div class="col-9 adult-forms mt-5">
            <h5> <span id="passenger-type"><?php echo e($user); ?></span> passenger </h5>
            <div class="passenger-info p-3">
                <div class="passenger-type">

                    <h5 class="ml-4"> Passengers ⥱
                        <img src="<?php echo e(asset('img/adult.png')); ?>" width="25px"  class="mr-1 ml-2" > Adult:
                        <span id="adult-indicator"></span>
                        <img src="<?php echo e(asset('img/child.png')); ?>" width="25px" class="ml-5 mr-1"> Children:
                        <span id="child-indicator"> </span>
                        <img src="<?php echo e(asset("img/infant.png")); ?>" class="ml-5 mr-1" width="25px">Infant:
                        <span id="infant-indicator""></span>
                        <span id="all-indicator" class="hidden"> </span>
                        <span id="token-values" class="hidden"></span>
                        <span> <a href="#" id="info-link" class="rise-shake float-right mr-4 pt-3"><img class="rise-shake" src="<?php echo e(asset('img/info.png')); ?>" width="20px" alt=""></a></span>
                    </h5>
                    <h4 id="lol" class="hidden">0</h4>

                    <p id="infos" class="ml-3 alert alert-info hidden mt-4"> Names you enter must match with your passport and Name change not allowed once booking completed. Please use English Characters only.</p>
                </div>

                <div class="child-forms"></div>
                <div class="infant-forms"></div>
                <form action="/passenger/check" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="sumbitted-form mb-5 hidden">
                        <input type="text" name="travel" value="<?php echo e($user); ?>">
                    </div>
                    <button id="btn-come" type="submit" class="btn btn-warning hidden next-btn">Next</button>
                </form>
            </div>

        </div>

        <div class="col-3">
        </div>
        <div class="ticket-preview mt-5 stay">
        </div>
    </div>
</div>


<script src="<?php echo e(asset('Js/jar.amd.min.js')); ?>"></script>
<script src="<?php echo e(asset('Js/cookies/getPassengerCookie.js')); ?>"></script>
<script src="<?php echo e(asset("Js/cookies/validation.js")); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/passenger.blade.php ENDPATH**/ ?>