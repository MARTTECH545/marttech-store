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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Points')); ?> <?php echo e(trans('messages.Settings')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Points')); ?> <?php echo e(trans('messages.Settings')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.Points')); ?> <?php echo e(trans('messages.Settings')); ?></div>
                                    <div class="panel-body">
                                        <?php if(Session::has('message')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                                        <?php endif; ?>

                                        <form role="form" method="post" action="/administrator/points">
                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Amount')); ?></label>
                                                <input type="number" name="amount" class="form-control"
                                                       placeholder="<?php echo e(trans('messages.Enter Amount')); ?>" required>
                                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Points')); ?></label>
                                                <input type="number"  name="points"
                                                       class="form-control" placeholder="Enter Points<?php echo e(trans('messages.Enter Points')); ?>" required
                                                >
                                            </div>

                                            <div class="form-group">
                                                <label><?php echo e(trans('messages.Type')); ?></label><br>
                                                <select name="type" required>
                                                    <option value="basic"><?php echo e(trans('messages.Basic')); ?></option>
                                                    <option value="premium"><?php echo e(trans('messages.Premium')); ?></option>
                                                    <option value="professional"><?php echo e(trans('messages.Professional')); ?></option>
                                                    <option value="gold">Gold<?php echo e(trans('messages.Gold')); ?></option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-sm btn-primary"><?php echo e(trans('messages.Set Package')); ?>

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
<?php echo $__env->make('administrator.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/administrator/points.blade.php ENDPATH**/ ?>