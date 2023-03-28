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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Referrals')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Referrals')); ?></small>
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
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Current Points')); ?></span><br>

                                            <div class="h1 text-info font-thin h1"><?php echo e(Auth::user()->points); ?></div>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.Refer')); ?></span><br><br>
                                                <span class="h3  font-thin h3">  <?php echo e(trans('messages.Referral')); ?></span>
                                            <input type="text" onfocus="this.select();" onmouseup="return false;"
                                                   class="form-control form-white username"
                                                   value="<?php echo e(Request::root()); ?>/register/ref_id=<?php echo e(Auth::user()->id); ?>">

                                            <div class="top text-right w-full">
                                                <i class=" text-warning m-r-sm"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>


                    </div>
                    <!-- / stats -->


                </div>
            </div>
            <!-- / main -->

        </div>


    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/referrals.blade.php ENDPATH**/ ?>