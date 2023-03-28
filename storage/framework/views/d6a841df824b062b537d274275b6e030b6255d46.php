<?php $__env->startSection('extra_js'); ?>
    <script>
        var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");


        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.User Settings')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.User Settings')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.User Settings')); ?></div>
                                    <div class="panel-body">
                                        <?php if(Session::has('success_msg')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></p>
                                        <?php endif; ?>
                                        <?php if(Session::has('error_msg')): ?>
                                            <p class="alert alert-danger"><?php echo e(Session::get('error_msg')); ?></p>
                                        <?php endif; ?>
                                        <form role="form" method="post" action="/change_password">
                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.old password')); ?></label>
                                                <input type="password" name="old_password" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.old password')); ?>" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.new password')); ?></label>
                                                <input type="password" pattern=".{6,}" id="password" name="new_password"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.new password')); ?>" required
                                                       title="Password must be minimum of six characters">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.confirm password')); ?></label>
                                                <input type="password" id="confirm_password" name="confirm_password"
                                                       class="form-control" placeholder="<?php echo e(trans('messages.confirm password')); ?>" required>
                                            </div>

                                            <button type="submit" class="btn btn-sm btn-primary"><?php echo e(trans('messages.change password')); ?>

                                            </button>
                                        </form>

                                    </div>
                                    <a href="/account/delete" Onclick="return ConfirmDelete();" type="button"
                                       style="width:100%"
                                       class="btn btn-lg btn-danger align-right"><i class="fa fa-trash"></i>
                                        <?php echo e(trans('messages.Delete Account')); ?></a>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/settings.blade.php ENDPATH**/ ?>