<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Payment</title>
</head>

<body>


    <div class="container">

        <form id="form" role="form" action="/pay" method="post" class="col-sm-7" data-cc-on-file="false"
            data-stripe-publishable-key="pk_test_51KmARWC1vnRWUUD4VR8NF4E7d9eTwsAjEEBaGr4msJUOSSV9VGVNZ75FDpYFWL5uU7TYPSryWf3tX8McRErhh93600RpBA1oak"
            id="payment-form">
            @csrf
            <input type="hidden" name="token" id="token">
            <input type="hidden" name="total" id="total">
            <input type="hidden" name="user" id="user">



            <div class='form-group'>

                <label class='control-label'>Name on Card</label> <input class='form-control' size='4'
                    type='text' id="card_name" value="Lenny">

            </div>
            <div class='form-group'>
                <label class='control-label'>Card Number</label> <input autocomplete='off'
                    class='form-control card-number' size='20' type='text' name="card_number" id="card_number"
                    value="4242424242424242">
            </div>

            <div class='form-group'>
                <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc'
                    placeholder='ex. 311' size='4' type='text' id="cvc" value="123">
            </div>
            <div class='form-group'>
                <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month'
                    placeholder='MM' size='2' type='text' id="exp_month" value="04">
            </div>
            <div class='form-group'>
                <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year'
                    placeholder='YYYY' size='4' type='text' id="exp_year" value="2034">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Pay</button>
            </div>

    </div>

    </form>

    </div>


</body>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jar.min.js"></script>
<script>
    $('#form').on('submit', (e) => {

        const form = $('#form');

        e.preventDefault();

        const nameOnCard = $("#card_name").val();
        const cardNumber = $('#card_number').val();
        const cvc = $('#cvc').val();
        const expiryMonth = $('#exp_month').val();
        const expiryYear = $('#exp_year').val();

        if (!form.data('cc-on-file')) {
            Stripe.setPublishableKey(form.data('stripe-publishable-key'));

            Stripe.createToken({
                number: cardNumber,
                cvc: cvc,
                exp_month: expiryMonth,
                exp_year: expiryYear
            }, (status, response) => {
                if (response.error) return alert('Error occured')

                var token = response['id'];
                let total = parseInt(jar.get('total'))

                total = Math.ceil(total)

                $('#token').attr('value', token);
                $("#total").attr('value', total);
                $("#user").attr('value', jar.get('user'))

                document.getElementById('form').submit();
            });
        }

    })
</script>

</html>
