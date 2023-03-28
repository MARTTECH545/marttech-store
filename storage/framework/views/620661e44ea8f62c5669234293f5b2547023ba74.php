<?php $__env->startSection('extra_js'); ?>
    <script>
        var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
<?php $__env->stopSection(); ?>

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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.System Settings')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.System Settings')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.System Settings')); ?></div>
                                    <div class="panel-body">
                                        <?php if(Session::has('message')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                                        <?php endif; ?>

                                        <form role="form" method="post" enctype="multipart/form-data" action="/administrator/system">
                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Website Name')); ?></label>
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.Website Name')); ?>" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Website Logo')); ?></label>
                                                <input type="file"  name="logo"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.Website Logo')); ?>" required
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Meta Tags')); ?></label>
                                                <input type="text"  name="meta"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.Meta Tags')); ?>" required
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Point Value')); ?></label>
                                                <input type="number"  step="any" name="point_value"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.Point Value')); ?>" required
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label>Sharing Limit</label>
                                                <input type="number"  step="any" name="share_limit"
                                                       class="form-control" placeholder="Sharing Limit" required
                                                >
                                            </div>


                                            <button type="submit" class="btn btn-sm btn-primary"><?php echo e(trans('messages.Set Settings')); ?>

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
<?php echo $__env->make('administrator.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/administrator/system.blade.php ENDPATH**/ ?>