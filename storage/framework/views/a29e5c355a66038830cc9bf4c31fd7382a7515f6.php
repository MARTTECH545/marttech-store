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

        $('#customButton').on('click', function (e) {
            // Open Checkout with further options
            handler.open({
                name: 'Booster',
                description: 'You will be charged <?php echo e($memberships->amount); ?> $',
                amount: '<?php echo e(($memberships->amount)*100); ?>'
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
                'url': '/api/stripe?stripeToken=' + token
            });
            alert("Payment Successfully Done");
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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Subscriptions')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Subscriptions')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-sm text-center">

                                    <div class="col-xs-12">
                                        <div class="panel padder-v item">
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Membership Features')); ?></span>

                                            <div class="h1 text-info font-thin h1"><?php echo e(isset($memberships->amount)?$memberships->amount:''); ?>

                                                $
                                            </div>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.UNLIMITED SITES')); ?></span><br><br>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.100% EARNING RATIO')); ?></span><br><br>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.NO COMMISSION')); ?></span><br><br>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.FREE SUPPORT')); ?></span><br><br>
                                            <?php if(Auth::user()->membership == 'paid'): ?>
                                                <a style="width:60%" class="btn btn-lg btn-primary"><i
                                                            class="fa fa-angle-double-up"></i><?php echo e(trans('messages.You are already a premium
                                                    member')); ?></a>                                                <i
                                                        class=" text-warning m-r-sm"></i>
                                            <?php else: ?>
                                                <?php if($control_settings->stripe == "enable"): ?>

                                                <a id="customButton" style="width:30%" class="btn btn-lg btn-primary"><i
                                                            class="fa fa-angle-double-up"></i><?php echo e(trans('messages.Pay With Stripe')); ?></a>
                                                <i class=" text-warning m-r-sm"></i>

                                                <?php endif; ?>

                                                    <?php if($control_settings->paypal == "enable"): ?>

                                                    <a href="/membership/<?php echo e($memberships->amount); ?>" style="width:30%"
                                                   class="btn btn-lg btn-primary"><i
                                                            class="fa fa-angle-double-up"></i><?php echo e(trans('messages.Pay With Paypal')); ?></a>
                                                <i class=" text-warning m-r-sm"></i>

                                                        <?php endif; ?>



                                            <?php endif; ?>
                                        </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/subscriptions.blade.php ENDPATH**/ ?>