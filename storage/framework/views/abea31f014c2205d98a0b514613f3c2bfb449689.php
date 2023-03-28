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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Support')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Support')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.Support form')); ?></div>
                                    <div class="panel-body">
                                        <?php if(Session::has('message')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                                        <?php endif; ?>
                                        <form role="form" method="post" action="/support">
                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Message Subject')); ?></label>
                                                <input type="text" name="subject" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.Message Subject')); ?>" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Your email address')); ?></label>
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.Your email address')); ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label> <?php echo e(trans('messages.How can we help you today?')); ?></label>
                                                <textarea class="form-control" name="message"
                                                          title="<?php echo e(trans('messages.How can we help you today?')); ?>" required></textarea></div>


                                            <button type="submit" class="btn btn-sm btn-primary"><?php echo e(trans('messages.Send Message')); ?></button>
                                        </form>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/support.blade.php ENDPATH**/ ?>