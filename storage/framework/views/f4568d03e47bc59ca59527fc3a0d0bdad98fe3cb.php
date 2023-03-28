<?php $__env->startSection('extra_js'); ?>

    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script>


        var handler = StripeCheckout.configure({
            key: '<?php echo e(env('STRIPE_API_KEY')); ?>',
            image: '/logo.ico',
            locale: 'auto',
            token: function (token) {
                console.log(token);
                // Use the token to create the charge with a server-side script.
                // You can access the token ID with `token.id`
                getSession(token.id);
            }
        });

        $('.stripe').on('click', function (e) {

            global_val = $(this).data('value');
            points_val = $(this).data('points');


            // Open Checkout with further options
            handler.open({
                name: 'Booster',
                description: 'You will be charged ' + global_val / 100 + '$',
                amount: global_val
            });

            e.preventDefault();

        });

        // Close Checkout on page navigation
        $(window).on('popstate', function () {
            handler.close();
        });

        function getSession(token) {
            $.ajax({
                'type': 'GET',
                'url': '/api/points?stripeToken=' + token + '&amount=' + global_val + '&points=' + points_val
            });
        }
    </script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>


    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">


            <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false;
    app.settings.asideDock = false;
  ">
                <!-- main -->
                <div class="col">
                    <!-- main header -->
                    <div class="bg-light lter b-b wrapper-md">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Purchase Points')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Purchase Points')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">

                        <div class="row no-gutter">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="panel b-a">
                                    <div class="panel-heading wrapper-xs bg-primary no-border">
                                    </div>
                                    <div class="wrapper text-center b-b b-light">
                                        <h4 class="text-u-c m-b-none"><?php echo e(trans('messages.Basic')); ?></h4>

                                        <h2 class="m-t-none">
                                            <sup class="pos-rlt" style="top:-22px">$</sup>
                                            <span class="text-2x text-lt"><?php echo e(isset($basic->amount)?$basic->amount:''); ?></span>
                                        </h2>
                                    </div>
                                    <ul class="list-group text-center no-borders m-t-sm">
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(isset($basic->points)?$basic->points:''); ?>

                                            points
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i>
                                            Upto <?php echo e(isset($basic->points)?$basic->points:''); ?> hits
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e((isset($basic->points)?$basic->points:'')/(isset($basic->amount)?$basic->amount:'1')); ?>

                                            hits/$
                                        </li>

                                    </ul>
                                    <div class="panel-footer text-center">
                                        <?php if($control_settings->stripe == "enable"): ?>

                                        <a data-value="<?php echo e((isset($basic->amount)?$basic->amount:'')*100); ?>"
                                           data-points="<?php echo e(isset($basic->points)?$basic->points:''); ?>"
                                           class="stripe btn btn-primary font-bold m"><?php echo e(trans('messages.Pay With Stripe')); ?></a>
                                       <?php endif; ?>

                                            <?php if($control_settings->paypal == "enable"): ?>

                                            <a href="/payment/<?php echo e(isset($basic->amount)?$basic->amount:''); ?>"
                                           class="btn btn-md btn-primary font-bold m"> <?php echo e(trans('messages.Pay With Paypal')); ?></a>

                                                <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="panel b-a m-t-n-md m-b-xl">
                                    <div class="panel-heading wrapper-xs bg-warning dker no-border">

                                    </div>
                                    <div class="wrapper bg-warning text-center m-l-n-xxs m-r-n-xxs">
                                        <h4 class="text-u-c m-b-none"><?php echo e(trans('messages.Professional')); ?></h4>

                                        <h2 class="m-t-none">
                                            <sup class="pos-rlt" style="top:-22px">$</sup>
                                            <span class="text-2x text-lt"><?php echo e(isset($professional->amount)?$professional->amount:''); ?></span>
                                        </h2>
                                    </div>
                                    <ul class="list-group text-center no-borders m-t-sm">
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(isset($professional->points)?$professional->points:''); ?>

                                            points
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i>
                                            Upto <?php echo e(isset($professional->points)?$professional->points:''); ?> hits
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(ceil((isset($professional->points)?$professional->points:'')/(isset($professional->amount)?$professional->amount:'1'))); ?>

                                            hits/$
                                        </li>

                                    </ul>
                                    <div class="panel-footer text-center b-t m-t bg-light lter">
                                        <div class="m-t-sm">Recommanded for you</div>
                                        <?php if($control_settings->stripe == "enable"): ?>

                                        <a data-value="<?php echo e((isset($professional->amount)?$professional->amount:'')*100); ?>"
                                           data-points="<?php echo e(isset($professional->points)?$professional->points:''); ?>"
                                           class="stripe btn btn-warning font-bold m"><?php echo e(trans('messages.Pay With Stripe')); ?></a>
                                        <?php endif; ?>

                                        <?php if($control_settings->paypal == "enable"): ?>


                                        <a href="/payment/<?php echo e(isset($professional->amount)?$professional->amount:''); ?>"
                                           class="btn btn-md btn-primary font-bold m"> <?php echo e(trans('messages.Pay With Paypal')); ?></a>

                                            <?php endif; ?>


                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="panel b-a">
                                    <div class="panel-heading wrapper-xs bg-primary no-border">
                                    </div>
                                    <div class="wrapper text-center b-b b-light">
                                        <h4 class="text-u-c m-b-none"><?php echo e(trans('messages.Premium')); ?></h4>

                                        <h2 class="m-t-none">
                                            <sup class="pos-rlt" style="top:-22px">$</sup>
                                            <span class="text-2x text-lt"><?php echo e(isset($premium->amount)?$premium->amount:''); ?></span>
                                        </h2>
                                    </div>
                                    <ul class="list-group text-center no-borders m-t-sm">
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(isset($premium->points)?$premium->points:''); ?>

                                            points
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i>
                                            Upto <?php echo e(isset($premium->points)?$premium->points:''); ?> hits
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(ceil((isset($premium->points)?$premium->points:'')/(isset($premium->amount)?$premium->amount:'1'))); ?>

                                            hits/$
                                        </li>

                                    </ul>
                                    <div class="panel-footer text-center">
                                        <?php if($control_settings->stripe == "enable"): ?>

                                        <a data-value="<?php echo e((isset($premium->amount)?$premium->amount:'')*100); ?>"
                                           data-points="<?php echo e(isset($premium->points)?$premium->points:''); ?>"
                                           class="stripe btn btn-primary font-bold m"><?php echo e(trans('messages.Pay With Stripe')); ?></a>
                                       <?php endif; ?>

                                            <?php if($control_settings->paypal == "enable"): ?>

                                            <a href="/payment/<?php echo e(isset($premium->amount)?$premium->amount:''); ?>"
                                           class="btn btn-md btn-primary font-bold m"> <?php echo e(trans('messages.Pay With Paypal')); ?></a>
                                           <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 hidden-md">
                                <div class="panel b-a">
                                    <div class="panel-heading wrapper-xs bg-primary no-border">
                                    </div>
                                    <div class="wrapper text-center b-b b-light">
                                        <h4 class="text-u-c m-b-none"><?php echo e(trans('messages.Gold')); ?></h4>

                                        <h2 class="m-t-none">
                                            <sup class="pos-rlt" style="top:-22px">$</sup>
                                            <span class="text-2x text-lt"><?php echo e(isset($gold->amount)?$gold->amount:''); ?></span>
                                        </h2>
                                    </div>
                                    <ul class="list-group text-center no-borders m-t-sm">
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(isset($gold->points)?$gold->points:''); ?>

                                            points
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i>
                                            Upto <?php echo e(isset($gold->points)?$gold->points:''); ?> hits
                                        </li>
                                        <li class="list-group-item">
                                            <i class="icon-check text-success m-r-xs"></i> <?php echo e(ceil((isset($gold->points)?$gold->points:'')/(isset($gold->amount)?$gold->amount:'1'))); ?>

                                            hits/$
                                        </li>

                                    </ul>
                                    <div class="panel-footer text-center">
                                        <?php if($control_settings->stripe == "enable"): ?>

                                        <a data-value="<?php echo e((isset($gold->amount)?$gold->amount:'')*100); ?>"
                                           data-points="<?php echo e(isset($gold->points)?$gold->points:''); ?>"
                                           class="stripe btn btn-primary font-bold m"><?php echo e(trans('messages.Pay With Stripe')); ?></a>
                                        <?php endif; ?>

                                            <?php if($control_settings->paypal == "enable"): ?>


                                            <a href="/payment/<?php echo e(isset($gold->amount)?$gold->amount:''); ?>"
                                           class="btn btn-md btn-primary font-bold m"> <?php echo e(trans('messages.Pay With Paypal')); ?></a>
                                                  <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- / main -->

            </div>


        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/points.blade.php ENDPATH**/ ?>