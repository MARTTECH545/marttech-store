<?php $__env->startSection('content'); ?>


    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">


            <div class="hbox hbox-auto-xs hbox-auto-sm">
                <!-- main -->
                <div class="col">
                    <!-- main header -->
                    <div class="bg-light lter b-b wrapper-md">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>- Transfer Points</h1>
                                <small class="text-muted">Transfer Points</small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.Transfer Points')); ?></div>
                                    <div class="panel-body">
                                        <?php if(Session::has('message')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                                        <?php endif; ?>

                                        <form role="form" method="post" action="/transfers">
                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Users Email')); ?></label>
                                                <input type="email" name="email" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.Users Email')); ?>" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Points')); ?></label>
                                                <input type="number" name="points"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.Points')); ?>" required
                                                >
                                            </div>


                                            <button type="submit" class="btn btn-sm btn-primary"><?php echo e(trans('messages.Transfer')); ?>

                                            </button>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/transfers.blade.php ENDPATH**/ ?>