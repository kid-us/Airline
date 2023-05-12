        

        <?php $__env->startSection('contetnt'); ?>

        
        <div class="container">
            <div id="overlay" class="hidden"></div>
            <div class="row mb-5">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-5 col-xl-8 mt-3 text-light">
                    <h1 class="text-shadow"><?php echo e($site->slogan); ?></h1>
                    <h5 class="mb-4 text-shadow">To get the best of your adventure you just need to leave and go where you like. we are waiting you</h5>
                    
                </div>
            </div>

            <div class="rounded shadow-lg p-3 w-100 flight-form bg-light">
            
                <div class=" d-block d-md-none ">
                    <div class="row justify-content-center mt-4 mb-4">
                        <div class="col-4">
                            <button class="btns active-flight-btn" id="sm-flight">
                                <span class="fas fa-plane"></span> Book
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btns " id="sm-booking">
                                <span class="fas fa-calendar-alt"></span> Booking
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btns" id="sm-check-in">
                                <span class="far fa-check-circle"></span> Check-in
                            </button>
                        </div>
                    </div>

                    <form action="#" class="mt-2 rounded p-4 w-100 mt-2">
                        <div class="row justify-content-center ml-2 mb-4">
                            <div class="col-4">
                                
                                <a id="trip-link-sm" class="default-link">Round-trip</a>
                                    <span class="fas fa-caret-down"></span>
                            </div>
                            <div class="col-4">
                                
                                <a id="passenger-link-sm" class="default-link">
                                    <span id="passenger-no-sm">1</span> Passenger </a>
                                    <span class="fas fa-caret-down"></span>

                            </div>
                            <div class="col-4">
                                
                                <a id="class-link-sm" class="default-link">Economy </a>
                                <span class="fas fa-caret-down"></span>
                            </div>
                        </div>

                        <div id="book-sm-page">
                            <p class="text-center font-weight-bold">Hi, where would you like to go?</p>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" id="from" name="from" placeholder="From" class="form-control-plaintext border-bottom  mr-3">
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" id="to" placeholder="To" name="to" class="form-control-plaintext border-bottom  mr-3 mb-3">
                            </div>

                                <span class="ml-4">Depart</span>
                                <span class="return">Return</span>
                                <div class="form-inline ml-4">
                                    <input type="date" name="date" id="date" class="form-control date-input mr-2">
                                    <input type="date" name="date" id="date" class="form-control date-input">
                                </div>
                                <input type="text" id="class-type-sm" name="class-type" value="Economy" hidden>
                                <input type="text" id="trip-type-sm" name="trip-type" value="Round-trip" hidden>
                                <input type="text" id="passenger-size-sm" name="passenger-size-sm" hidden value="1" >
                                <button type="submit" name="find-flight" class="btn btn-danger shadow-lg mt-4 mb-3 w-100">Search Flight</button>
                        </div>

                        
                        <div id="booking-sm-page" class="hidden">
                            <p class="text-center font-weight-bold">Manage your upcoming trip</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-mail-bulk"></span>
                                </div>
                                <input type="email" id="email" name="email" placeholder="Email" class="form-control-plaintext border-bottom mr-3">
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-pen-alt"></span>
                                </div>
                                <input type="text" id="last-name" placeholder="Last Name" name="last-name" class="form-control-plaintext border-bottom mr-3">
                            </div>
                            <button type="submit" name="booking" class="btn btn-danger shadow-lg mt-4  mb-3  w-100">Retrieve Booking</button>
                        </div>

                        
                        <div id="check-page" class="hidden">
                            <p class="text-center font-weight-bold">Check in for your flight at your convenience</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-ticket-alt"></span>
                                </div>
                                <input type="text" id="ticket-no" name="ticket-no" placeholder="Ticket Number" class="form-control-plaintext border-bottom mr-3">
                            </div>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-pen-alt"></span>
                                </div>
                                <input type="text" id="last-name" placeholder="Last Name" name="to" class="form-control-plaintext border-bottom mr-3">
                            </div>
                            <button type="submit" name="check-in" class="btn btn-danger shadow-lg mt-4  mb-3  w-100">Check-in</button>
                        </div>
                    </form>

                    
                    
                    <div id="trip-modal-sm" class="trip-view-sm rounded shadow-lg hidden">
                        <button id="round-trip-sm" class="w-100 modal-btn text-dark">Round-trip</button>
                        <button id="one-way-sm" class="w-100 modal-btn text-dark">One Way</button>
                        <button id="multi-city-sm" class="w-100 modal-btn text-dark">Multi-City</button>
                    </div>

                    
                    <div id="passenger-modal-sm" class="passenger-view-sm rounded shadow-lg p-3 hidden">
                        <div class="row justify-content-center">
                        
                        <div class="col-6">
                            <span class="font-weight-bold">Adult</span> <span id="adult-sm" class="hidden">s</span>
                            <p class="small">12+ Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="adult-minus-sm" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="adult-no-sm">1</span>
                                <button id="adult-plus-sm" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        
                        <div class="col-6">
                            <span class="font-weight-bold">Children</span>
                            <p class="small">2-11 Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="children-minus-sm" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="children-no-sm">0</span>
                                <button id="children-plus-sm" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        
                        <div class="col-6">
                            <span class="font-weight-bold">Infant</span>
                            <p class="small">0-1 Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="infant-minus-sm" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="infant-no-sm">0</span>
                                <button id="infant-plus-sm" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        </div>
                    </div>

                    <div id="class-modal-sm" class="class-view-sm rounded shadow-lg hidden">
                        <button id="economy-value-sm" class="w-100 modal-btn text-dark">Economy</button>
                        <button id="business-value-sm" class="w-100 modal-btn text-dark">Business</button>
                    </div>
                </div>
        

                
                <div class="d-none d-md-block">
                    <p><?php echo e(session('status')); ?></p>

                    <div id="book-page">
                        <form action="/flight/find" method="POST" class="mt-1 ml-2 rounded">
                            <?php echo csrf_field(); ?>
                        
                        <a  id="trip-link" class="default-link ml-2">One-way</a> <span class="fas fa-caret-down"></span>
                        
                        <a  id="passenger-link" class="default-link ml-5"> <span id="passenger-no">1 </span> Passengers</a> <span class="fas fa-caret-down"></span>
                        
                        
                        <p class="pl-3 pt-2 mt-3">Hi, where would you like to go? Select your Flight</p>
                            <div class="form-inline input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" id="from" name="from" placeholder="From" class="form-control-plaintext mr-4 <?php $__errorArgs = ['from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('from')); ?>">

                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
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

                                <button type="submit" id="show-flights" name="show-flight" class="finder-btn shadow-lg">Show Flights</button>
                            </div>
                        </form>
                    </div>

                        
                        <div id="booking-page" class="hidden">
                            <form action="/flight/booking" method="POST" class="mt-1 ml-2 rounded p-3">
                                <?php echo csrf_field(); ?>
                                <p class="ml-2 font-weight-bold">Manage your upcoming trip</p>
                                <div class="form-inline input-group" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-mail-bulk"></span>
                                    </div>
                                    <input type="email" name="email" placeholder="Email" class="form-control-plaintext mr-4 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-pen-alt"></span>
                                    </div>
                                    <input type="text" placeholder="Last Name" name="last-name" class="form-control-plaintext mr-4 <?php $__errorArgs = ['last-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <button type="submit" name="booking" class="finder-btn shadow-lg">Retrieve Booking</button>
                                </div>
                            </form>
                        </div>

                        
                        <div id="flight-info-page" class="hidden">
                            <form action="/flight/status" method="POST" class="mt-1 ml-2 rounded p-3">
                                <?php echo csrf_field(); ?>
                                <p class="ml-2 font-weight-bold">Search for Ethiopian Airways flight status</p>
                                <div class="form-inline input-group" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-plane-departure"></span>
                                    </div>
                                <input type="text" name="from" placeholder="Origin" class="form-control-plaintext mr-4 <?php $__errorArgs = ['from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" id="destination" placeholder="Destination" name="to" class="form-control-plaintext mr-4 <?php $__errorArgs = ['to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <input type="date" name="date" class="form-control date-input mr-3 rounded <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" title="Depart Date">
                                <button type="submit" name="find-flight" class="finder-btn shadow-lg">Search Flights</button>
                            </div>
                            </form>
                        </div>

                        
                        <div id="check-in-page" class="hidden">
                            <form action="/flight/check-in" method="POST" class="mt-1 ml-2 rounded p-3">
                                <?php echo csrf_field(); ?>
                                <p class="ml-2 font-weight-bold">Check in for your flight at your convenience</p>
                                <div class="form-inline input-group" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-ticket-alt"></span>
                                    </div>
                                    <input type="text" id="ticket-no" name="ticket-no" placeholder="Ticket Number" class="form-control-plaintext mr-4 <?php $__errorArgs = ['ticket-no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text fas fa-pen-alt"></span>
                                    </div>
                                    <input type="text" id="last-name" placeholder="Last Name" name="last-name" class="form-control-plaintext mr-4 <?php $__errorArgs = ['last-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"">
                                    <button type="submit" name="check-in" class="finder-btn shadow-lg">Check-in</button>
                                </div>
                            </form>
                        </div>

                    <div class="rounded text-center mt-3 mb-2">
                        <button type="button" id="flight" class="flight-btn actived mr-5">
                            <span class="fas fa-plane"></span> Book Flights
                        </button>
                        <button type="button" id="booking" class="flight-btn v mr-5">
                            <span class="fas fa-calendar-alt"></span> My Booking
                        </button>
                        <button type="button" id="flight-info" class="flight-btn mr-5">
                            <span class="fas fa-info"></span> Flight Information</button>
                        <button type="button" id="check-in" class="flight-btn">
                            <span class="far fa-check-circle"></span> Check-in
                        </button>
                    </div>

                    
                    
                    <div id="trip-modal" class="trip-view rounded shadow-lg hidden">
                        <button id="one-way" class="w-100 modal-btn text-dark">One-Way</button>
                        <button id="round-trip" class="w-100 modal-btn text-dark">Round-trip</button>
                    </div>

                    
                    <div id="passenger-modal" class="passenger-view rounded shadow-lg p-3 hidden">
                        <div class="row justify-content-center">
                        
                        <div class="col-6">
                            <span class="font-weight-bold">Adult</span> <span id="adult" class="hidden">s</span>
                            <p class="small">12+ Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="adult-minus" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="adult-no">1</span>
                                <button id="adult-plus" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        
                        <div class="col-6">
                            <span class="font-weight-bold">Children</span>
                            <p class="small">2-11 Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="children-minus" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="children-no">0</span>
                                <button id="children-plus" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        
                        <div class="col-6">
                            <span class="font-weight-bold">Infant</span>
                            <p class="small">0-1 Years</p>
                        </div>
                        <div class="col-6 mt-2">
                            <span>
                                <button id="infant-minus" class="passenger-btn mr-1 modal-number">-</button>
                                <span id="infant-no">0</span>
                                <button id="infant-plus" class="passenger-btn ml-1 modal-number">+</button>
                            </span>
                        </div>

                        </div>
                    </div>

                    

                    

                </div> 
            </div>

            <div class="mt-5">
                <p class="ml-5">Dear Passengers</p>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-2 collg-1 col-xl-1">
                        <span class="badge rounded-circle badge-bg p-0"> <span class="fas fa-info m-3 text-light bg-success"></span></span>
                    </div>
                    <div class="col-md-10 col-lg-11 col-xl-11">
                        <p>
                            We recommend that you review our important announcements page for developments related to domestic and international travel due to COVID-19, including flights suspended between countries and similar information. Please see our Türkiye Travel Rules page for information regarding the rules applicable to arrival in Turkey and country-specific travel restrictions page for travel requirements for other countries.
                        </p>
                    </div>
                </div>
                <hr style="background: 1px solid #03422d">
                <p class="ml-5">Dear Passengers</p>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-2 collg-1 col-xl-1">
                        <span class="badge rounded-circle badge-bg p-0"> <span class="fas fa-info m-3 text-light "></span></span>
                    </div>
                    <div class="col-md-10 col-lg-11 col-xl-11">
                        <p>You can access the announcements regarding our flights to Ukraine, Belarus and Russia and the rights granted to our passengers for our flights to these countries here</p>
                    </div>
                </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-sm-12 col-md-3 col-lg-4 col-xl-4 mb-3 mt-5">
                        <div class="rounded shadow p-4  bg-light">
                            <a href="#" class="text-dark" style="text-decoration: none">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?php echo e(asset('img/destination.png')); ?>" alt="" width="30px">
                                    </div>
                                    <div class="col-9">
                                        <p class="mt-2 font-weight-bold" id="title-3">Our Destinations <span class="float-right">❱</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-4 col-xl-4 mb-3 mt-5">
                        <div class="rounded shadow p-4  bg-light">
                            <a href="#" class="text-dark" style="text-decoration: none">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?php echo e(asset('img/advisor.png')); ?>" alt="" width="30px">
                                    </div>
                                    <div class="col-9">
                                        <p class="mt-2 font-weight-bold" id="title-3">Travel advisory <span class="float-right">❱</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-4 col-xl-4 mb-3 mt-5">
                        <div class="rounded shadow p-4  bg-light">
                            <a href="#" class="text-dark" style="text-decoration: none">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="<?php echo e(asset('img/covid.png')); ?>" alt="" width="30px">
                                    </div>
                                    <div class="col-9">
                                        <p class="mt-2 font-weight-bold" id="title-3">Covid-19 related assistance <span class="float-right">❱</span></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            
            <h4 class="border-left-bg mt-5"> &nbsp; Highlights</h4>
            <div class="d-none d-md-block mt-4">
                <div class="row text-center mb-4">
                    <div class="col-2">
                        <button type="button" class="flight-btn actived" id="domestic">Domestic</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="flight-btn" id="africa">Africa</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="flight-btn" id="america">America</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="flight-btn" id="europe">Europe</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="flight-btn" id="asia">Asia</button>
                    </div>
                    <div class="col-2">
                        <button type="button" class="flight-btn" id="middle-east">Middle East</button>
                    </div>
                </div>

                
                <form action="/flight/selected" method="post"  id="domestic-page">
                    <?php echo csrf_field(); ?>
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" placeholder="From" class="form-control-plaintext  mt-2 mb-4 w-50 <?php $__errorArgs = ['departure-airpor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    </div>

                    <div class="row">
                            <div id="img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                                <img id="img-1" src="<?php echo e(asset('img/Domestic/Addis Abeba.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Addis Abeba" height="518px">
                                <div id="book-btn-1" class="hover-lg border rounded p-5 shadow hidden text-center">
                                    <p class="country-name mt-5">Addis Abeba</p>
                                    <p>Addis Abeba Ethiopia</p>

                                    <p>Lorem ipsum dolor sit amet consectetur.</p>

                                    <input type="text" name="city-name" hidden value="Addis Abeba">
                                    <button id="adis-btn" type="submit" class="btn btn-danger w-50 p-2">Book</button>
                                    </div>
                            </div>

                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div id="img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                    
                                    <img id="img-2" src="<?php echo e(asset('img/Domestic/Gondar.jpg')); ?>" class="img w-100 shadow-lg rounded border" alt="Gondar" height="250px">
                                    <div id="book-btn-2" class="hover shadow rounded border hidden text-center pt-5">
                                        <p class="country-name">Gondar Ethiopia</p>
                                        <p class="wrap">Gondar Ethiopia</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Gondar">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="img-3" src="<?php echo e(asset('img/Domestic/Lalibela.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Lalibela" height="250px">
                                    <div id="book-btn-3" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Lalibela Ethiopia</p>
                                        <p class="">Lalibela Ethiopia</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Lalibela">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="img-4" src="<?php echo e(asset('img/Domestic/Axum.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Axum" height="250px">
                                    <div id="book-btn-4" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Axum Ethiopia</p>
                                        <p class="">Axum Ethiopia</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Axum">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="img-5" src="<?php echo e(asset('img/Domestic/Semera.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Semera Afar" height="250px">
                                    <div id="book-btn-5" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Semera Afar</p>
                                        <p class="">Semera Afar Ethiopia</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Semera">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="img-6" src="<?php echo e(asset('img/Domestic/Mekele.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Mekele" height="250px">
                            <div id="book-btn-6" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Mekele</p>
                                <p class="">Mekele Ethiopia</p>
                                <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Mekele">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="img-7" src="<?php echo e(asset('img/Domestic/Harar.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Harar" height="250px">
                            <div id="book-btn-7" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Harar</p>
                                <p>Harar Ethiopia</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Mekele">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                            <img id="img-8" src="<?php echo e(asset('img/Domestic/Bahirdar.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Bahirdar" height="250px">
                            <div id="book-btn-8" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Bahirdar</p>
                                <p>Bahirdar Ethiopia</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Bahirdar">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                    </div>
                </form>

                
                <form action="#" method="post" class="hidden" id="africa-page">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" id="departure-airport" placeholder="From" class="form-control-plaintext border-bottom-lg mt-2 mb-4 w-50">
                    </div>

                    <div class="row">
                        <div id="af-img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                            <img id="af-img-1" src="<?php echo e(asset('img/Africa/Accra.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Accra" height="518px">
                            <div id="af-book-btn-1" class="hover-lg border rounp-5 shadow hid text-center pt-5 hidden text-center">
                                <p class="country-name mt-5">Accra</p>
                                <p>Africa Ghana</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Accra">
                                <button type="submit" class="btn btn-danger w-50 p-2">Book</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div id="af-img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="af-img-2" src="<?php echo e(asset('img/Africa/Lalibela.jpg')); ?>" class="img w-100 shadow-lg rounded border" height="250px" alt="Lalibela">
                                    <div id="af-book-btn-2" class="hover shadow rouunded border hidden text-center pt-5">
                                        <p class="country-name">Lalibela</p>
                                        <p class="">Africa Ethiopia</p>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Lalibela">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="af-img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="af-img-3" src="<?php echo e(asset('img/Africa/Casablanca.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Casablanca">
                                    <div id="af-book-btn-3" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Casablanca</p>
                                        <p class="">Africa Morrocow</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Casablanca">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="af-img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="af-img-4" src="<?php echo e(asset('img/Africa/Nairobbi.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Nairobbi">
                                    <div id="af-book-btn-4" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Nairobbi</p>
                                        <p class="">Africa Kenya</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Nairobbi">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="af-img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="af-img-5" src="<?php echo e(asset('img/Africa/Cairo.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Cairo">
                                    <div id="af-book-btn-5" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Cairo</p>
                                        <p class="">Africa Egypt</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Cairo">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="af-img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="af-img-6" src="<?php echo e(asset('img/Africa/tunis.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Tunis">
                            <div id="af-book-btn-6" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Tunis</p>
                                <p class="">Africa Tunisia</p>
                                <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Tunis">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="af-img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="af-img-7" src="<?php echo e(asset('img/Africa/Johannesburg.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Johannesburg">
                            <div id="af-book-btn-7" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Johannesburg</p>
                                <p>Africa South-Africa</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Johannesburg">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="af-img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                            <img id="af-img-8" src="<?php echo e(asset('img/Africa/asmara.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Asmara">
                            <div id="af-book-btn-8" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Asmara</p>
                                <p>Africa Ertriea</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Asmara">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                    </div>
                </form>

                
                <form action="#" method="" id="america-page" class="hidden">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" id="departure-airport" placeholder="From" class="form-control-plaintext border-bottom-lg mt-2 mb-4 w-50">
                    </div>

                    <div class="row">
                        <div id="ame-img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                            <img id="ame-img-1" src="<?php echo e(asset('img/America/Rio de Jinero.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Rio de Jinero" height="518px">
                            <div id="ame-book-btn-1" class="hover-lg border rounded p-5 shadow hidden text-center">
                                <p class="country-name mt-5">Rio de Jinero</p>
                                <p>South America Brazil</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Rio de Jinero">
                                <button type="submit" class="btn btn-danger w-50 p-2">Book</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div id="ame-img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="ame-img-2" src="<?php echo e(asset('img/America/Canada.jpg')); ?>" class="img w-100 shadow-lg rounded border" alt="Canada" height="250px">
                                    <div id="ame-book-btn-2" class="hover shadow rounded border hidden text-center pt-5">
                                        <p class="country-name">Canada</p>
                                        <p class="">America Canada</p>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Canada">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="ame-img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="ame-img-3" src="<?php echo e(asset('img/America/Mexico City.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Mexico City" height="250px">
                                    <div id="ame-book-btn-3" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Mexico City</p>
                                        <p class="">America Mexico</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Mexico City">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="ame-img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="ame-img-4" src="<?php echo e(asset('img/America/Machu Picchu.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Machu Picchu">
                                    <div id="ame-book-btn-4" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Machu Picchu</p>
                                        <p class="">South America Peru</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Machu Picchu">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="ame-img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="ame-img-5" src="<?php echo e(asset('img/America/Washington Dc.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Washington Dc" height="250px">
                                    <div id="ame-book-btn-5" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Washington Dc</p>
                                        <p class="">America USA</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Washington Dc">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ame-img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="ame-img-6" src="<?php echo e(asset('img/America/Bogota.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Bogota" height="250px">
                            <div id="ame-book-btn-6" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Bogota</p>
                                <p class="">South America Colombia</p>
                                <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Bogota">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="ame-img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="ame-img-7" src="<?php echo e(asset('img/America/Buenos Aires.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Buenos Aires" height="250px">
                            <div id="ame-book-btn-7" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Buenos Aires</p>
                                <p>South America Argentina</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Buenos Aires">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="ame-img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                            <img id="ame-img-8" src="<?php echo e(asset('img/America/New York.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="New York" height="250px">
                            <div id="ame-book-btn-8" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">New York</p>
                                <p>America USA</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="New York">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                    </div>
                </form>

                
                <form action="#" method="" id="europe-page" class="hidden">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" id="departure-airport" placeholder="From" class="form-control-plaintext border-bottom-lg mt-2 mb-4 w-50">
                    </div>

                    <div class="row">
                        <div id="eu-img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                            <img id="eu-img-1" src="<?php echo e(asset('img/Europe/Paris.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Paris" height="518px">
                            <div id="eu-book-btn-1" class="hover-lg border rounded p-5 shadow hidden text-center">
                                <p class="country-name mt-5">Paris</p>
                                <p>Europe France</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Paris">
                                <button type="submit" class="btn btn-danger w-50 p-2">Book Now</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div id="eu-img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="eu-img-2" src="<?php echo e(asset('img/Europe/London.jpg')); ?>" class="img w-100 shadow-lg rounded border" alt="London" height="250px">
                                    <div id="eu-book-btn-2" class="hover shadow rounded border hidden text-center pt-5">
                                        <p class="country-name">London</p>
                                        <p class="">Europe England.</p>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="London">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="eu-img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="eu-img-3" src="<?php echo e(asset('img/Europe/Amsterdam.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Amsterdam" height="250px">
                                    <div id="eu-book-btn-3" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                        <p class="country-name">Amsterdam</p>
                                        <p class="">Europe Netherlands</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Amsterdam">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="eu-img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="eu-img-4" src="<?php echo e(asset('img/Europe/Vienna.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Vienna" height="250px">
                                    <div id="eu-book-btn-4" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                        <p class="country-name">Vienna</p>
                                        <p class="">Europe Austria</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Vienna">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="eu-img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="eu-img-5" src="<?php echo e(asset('img/Europe/Barcelona.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Barcelona" height="250px">
                                    <div id="eu-book-btn-5" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                        <p class="country-name">Barcelona</p>
                                        <p class="">Eroupe Spain</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Barcelona">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="eu-img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="eu-img-6" src="<?php echo e(asset('img/Europe/Prague.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Prague" height="250px">
                            <div id="eu-book-btn-6" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                <p class="country-name">Prague</p>
                                <p class="">Europe Czech Republic</p>
                                <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Prague">
                                <button  class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="eu-img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="eu-img-7" src="<?php echo e(asset('img/Europe/Istanbul.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Istanbul" height="250px">
                            <div id="eu-book-btn-7" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                <p class="country-name">Istanbul</p>
                                <p>Eroupe Turkye</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Istanbul">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="eu-img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                            <img id="eu-img-8" src="<?php echo e(asset('img/Europe/Rome.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Rome" height="250px">
                            <div id="eu-book-btn-8" class="hover border rounded p-5 shadow hidden text-center pt-5">
                                <p class="country-name">Rome</p>
                                <p>Europe Italy</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Rome">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                    </div>
                </form>

                
                <form action="#" method="" id="asia-page" class="hidden">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" id="departure-airport" placeholder="From" class="form-control-plaintext border-bottom-lg mt-2 mb-4 w-50">
                    </div>


                    <div class="row">
                        <div id="as-img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                            <img id="as-img-1" src="<?php echo e(asset('img/Asia/Dubai.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Dubai" height="518px">
                            <div id="as-book-btn-1" class="hover-lg border rounded p-5 shadow hidden text-center">
                                <p class="country-name mt-5">Dubai</p>
                                <p>Asia UAE</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Dubai">
                                <button type="submit" class="btn btn-danger w-50 p-2">Book</button>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="row">
                                <div id="as-img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="as-img-2" src="<?php echo e(asset('img/Asia/Delhi.jpg')); ?>" class="img w-100 shadow-lg rounded border" alt="Delhi" height="250px">
                                    <div id="as-book-btn-2" class="hover shadow rounded border hidden text-center pt-5">
                                        <p class="country-name">Delhi</p>
                                        <p class="">Asia India</p>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Delhi">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="as-img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                    <img id="as-img-3" src="<?php echo e(asset('img/Asia/Kuala Lampur.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Kuala Lampur" height="250px">
                                    <div id="as-book-btn-3" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Kuala Lampur</p>
                                        <p class="">Asia Malaysia</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Kuala Lampur">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="as-img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="as-img-4" src="<?php echo e(asset('img/Asia/Seoul.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Seoul" height="250px">
                                    <div id="as-book-btn-4" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Seoul</p>
                                        <p class="">Asia South Korea</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Seoul">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                                <div id="as-img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                    <img id="as-img-5" src="<?php echo e(asset('img/Asia/Bankok.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Bankok" height="250px">
                                    <div id="as-book-btn-5" class="hover border rounded shadow hidden text-center pt-5">
                                        <p class="country-name">Bankok</p>
                                        <p class="">Asia Thailand</p>
                                        <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                        <input type="text" name="city-name" hidden value="Bankok">
                                        <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="as-img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="as-img-6" src="<?php echo e(asset('img/Asia/Singapore.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Singapore" height="250px">
                            <div id="as-book-btn-6" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Singapore</p>
                                <p class="">Asia Singapore</p>
                                <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Singapore">
                                <button  class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="as-img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                            <img id="as-img-7" src="<?php echo e(asset('img/Asia/Tokyo.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Tokyo" height="250px">
                            <div id="as-book-btn-7" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Tokyo</p>
                                <p>Asia Japan</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Tokyo">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                        <div id="as-img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                            <img id="as-img-8" src="<?php echo e(asset('img/Asia/Beijing.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Beijing" height="250px">
                            <div id="as-book-btn-8" class="hover border rounded shadow hidden text-center pt-5">
                                <p class="country-name">Beijing</p>
                                <p>Asia China</p>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <input type="text" name="city-name" hidden value="Beijing">
                                <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                            </div>
                        </div>
                    </div>
                </form>

                
                <form action="#" method="" id="middle-east-page" class="hidden">
                    <div class="input-group w-25">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-pencil-alt"></span>
                        </div>
                        <input type="text" name="departure-airport" id="departure-airport" placeholder="From" class="form-control-plaintext border-bottom-lg mt-2 mb-4 w-50">
                    </div>

                <div class="row">
                    <div id="md-img-container-1" class="col-md-6 col-lg-6 col-xl-6 mb-3">
                        <img id="md-img-1" src="<?php echo e(asset('img/Middle/Abu Dahbi.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Abu Dahbi" height="518px">
                        <div id="md-book-btn-1" class="hover-lg border rounded p-5 shadow hidden text-center">
                            <p class="country-name mt-5">Abu Dhabi</p>
                            <p>Middle East UAE</p>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <input type="text" name="city-name" hidden value="Abu Dhabi">
                            <button type="submit" class="btn btn-danger w-50 p-2">Book</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="row">
                            <div id="md-img-container-2" class="col-md-6 col-lg-6 col-xl-6">
                                <img id="md-img-2" src="<?php echo e(asset('img/Middle/Jerusalem.jpg')); ?>" class="img w-100 shadow-lg rounded border" alt="Jerusalem" height="250px">
                                <div id="md-book-btn-2" class="hover shadow rounded border hidden text-center pt-5">
                                    <p class="country-name">Jerusalem</p>
                                    <p class="">Middle East Israel</p>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <input type="text" name="city-name" hidden value="Jerusalem">
                                    <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                </div>
                            </div>
                            <div id="md-img-container-3" class="col-md-6 col-lg-6 col-xl-6">
                                <img id="md-img-3" src="<?php echo e(asset('img/Middle/Petra.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Petra" height="250px">
                                <div alt="" id="md-book-btn-3" class="hover border rounded shadow hidden text-center pt-5">
                                    <p class="country-name">Petra</p>
                                    <p class="">Middle East Jordan</p>
                                    <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                    <input type="text" name="city-name" hidden value="Petra">
                                    <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                </div>
                            </div>
                            <div id="md-img-container-4" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                <img id="md-img-4" src="<?php echo e(asset('img/Middle/Beirut.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Beirut" height="250px">
                                <div alt="" id="md-book-btn-4" class="hover border rounded shadow hidden text-center pt-5">
                                    <p class="country-name">Beirut</p>
                                    <p class="">Middle East Lebanon</p>
                                    <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                    <input type="text" name="city-name" hidden value="Beirut">
                                    <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                </div>
                            </div>
                            <div id="md-img-container-5" class="col-md-6 col-lg-6 col-xl-6 mt-3">
                                <img id="md-img-5" src="<?php echo e(asset('img/Middle/Manama.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Manama" height="250px">
                                <div alt="" id="md-book-btn-5" class="hover border rounded shadow hidden text-center pt-5">
                                    <p class="country-name">Manama</p>
                                    <p class="">Middle East Bahrain</p>
                                    <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                                    <input type="text" name="city-name" hidden value="Manama">
                                    <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="md-img-container-6" class="col-md-3 col-lg-3 col-xl-3">
                        <img id="md-img-6" src="<?php echo e(asset('img/Middle/Kuwait.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Kuwait" height="250px" alt="">
                        <div id="md-book-btn-6" class="hover border rounded shadow hidden text-center pt-5">
                            <p class="country-name">Kuwait</p>
                            <p class="">Middle East Kuwait</p>
                            <p class="">Lorem ipsum dolor sit amet consectetur.</p>
                            <input type="text" name="city-name" hidden value="Kuwait">
                            <button  class="btn btn-danger w-75 p-2">Book</button>
                        </div>
                    </div>
                    <div id="md-img-container-7" class="col-md-3 col-lg-3 col-xl-3">
                        <img id="md-img-7" src="<?php echo e(asset('img/Middle/Salalah.jpg')); ?>" class="border rounded img w-100 shadow-lg" alt="Salalah" height="250px" alt="">
                        <div id="md-book-btn-7" class="hover border rounded shadow hidden text-center pt-5">
                            <p class="country-name">Salalah</p>
                            <p>Middle East Oman</p>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <input type="text" name="city-name" hidden value="Salalah">
                            <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                        </div>
                    </div>
                    <div id="md-img-container-8" class="col-md-6 col-xl-6 col-xl-6">
                        <img id="md-img-8" src="<?php echo e(asset('img/Middle/Doha.jpg')); ?>" class="border rounded img w-100 shadow-lg" height="250px" alt="Doha">
                        <div id="md-book-btn-8" class="hover border rounded shadow hidden text-center pt-5">
                            <p class="country-name">Doha</p>
                            <p>Middle East Qatar</p>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                            <input type="text" name="city-name" hidden value="Doha">
                            <button type="submit" class="btn btn-danger w-75 p-2">Book</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div id="arrow-container-1" class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3 mt-5">
                <div class="rounded shadow p-3  bg-light">
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <h6 class="mt-2 text-center font-weight-bold"  id="title-1">
                            Travel restrictions <span id="arrow-1" class="float-right arrow hidden">❱</span></h6>
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo e(asset('img/travel.png')); ?>" alt="" width="50px" class="m-3">
                            </div>
                            <div class="col-9">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure eaque suscipit similique aut ipsum illo ipsam, nemo dolorum tempore laboriosam dicta nihil!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="arrow-container-2" class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3 mt-5">
                <div class="rounded shadow p-3  bg-light">
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <h6 class="mt-2 text-center font-weight-bold"  id="title-2">Bagage Policy<span id="arrow-2" class="float-right arrow hidden">❱</span></h6>
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo e(asset('img/bagagge.png')); ?>" alt="" width="50px" class="m-3">
                            </div>
                            <div class="col-9">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure eaque suscipit similique aut ipsum illo ipsam, nemo dolorum tempore laboriosam dicta nihil!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="arrow-container-3" class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3 mt-5">
                <div class="rounded shadow p-3  bg-light">
                    <a href="#" class="text-dark" style="text-decoration: none">
                        <h6 class="mt-2 text-center font-weight-bold" id="title-3">Our Destination <span id="arrow-3" class="float-right arrow hidden">❱</span></h6>
                        <div class="row">
                            <div class="col-3">
                                <img src="<?php echo e(asset('img/destination.png')); ?>" alt="" width="50px" class="m-3">
                            </div>
                            <div class="col-9">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure eaque suscipit similique aut ipsum illo ipsam, nemo dolorum tempore laboriosam dicta nihil!</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> 

    
    <div class="d-block d-md-none rounded-lg shadow-lg subscribe-img mt-5 mb-5 text-light text-center">
        <p class="hidden">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, temporibus.
        </p>
        <div class="p-4 rounded w-50 award-view-sm mt-4">
            <h5>Best Africa Airline</h5>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem non dolor ipsam. Assumenda, eos voluptatum magnam dolores tempore at dolore dolorum tempora.
            </p>
            <a href="#" class="btn btn-outline-success ">View our Awards</a>
        </div>
    </div>

    
    <div class="d-none d-md-block rounded-lg shadow-lg subscribe-img mt-5 mb-5 text-light">
        <div class="p-4 rounded float-right award-view">
            <h5>Best Africa Airline</h5>
            <p">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem non dolor ipsam. Assumenda, eos voluptatum magnam dolores tempore at dolore dolorum tempora.
            </p>
            <a href="#" class="text-center btn btn-outline-success ml-5 ">View our Awards</a>
        </div>
    </div>

    <div class="container">
        <span class="border-left-bg"><span class="news">&nbsp; News</span> <a href="#" class="float-right mr-5">Read all News</a> </span>
        <div class="row justify-content-center mt-3">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <hr style="background-color: #03422d">
                <span> <span>07 JUL 2022</span> <span class="badge badge-pill bg-success ml-2">New</span> </span>
                <p>
                    Ethiopian Airlines is implementing Free Rebooking/Rerouting and Refund Ticket policies for its passengers’ domestic and international flights.
                </p>

                <hr style="background-color: #03422d">
                <span> <span>07 JUL 2022</span> <span class="badge badge-pill bg-success ml-2">New</span> </span>
                <p>Ethiopian Airlines (Ethiopian) is the fastest growing Airline in Africa. In its seventy plus years of operation, Ethiopian has become one of the continent’s leading carriers, unrivalled in efficiency and operational success.</p>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <hr style="background-color: #03422d">
                <p> <?php echo e(date('D-d-M', strtotime($news->created_at))); ?> </p>
                <p> <?php echo e($news->news); ?> </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kid_us\Desktop\Project\Moon\resources\views/Layout/home.blade.php ENDPATH**/ ?>