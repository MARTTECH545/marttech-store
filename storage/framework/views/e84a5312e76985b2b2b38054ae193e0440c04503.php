<?php $__env->startSection('extra_js'); ?>
    <script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js"></script>

    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '<?php echo e(env('APP_ID')); ?>',
                xfbml: true,
                version: 'v2.5'
            });
        };

        function fb_share($link) {
            FB.ui({
                method: 'feed',
                link: $link
            }, function (response) {
                if (response !== null &&  response.post_id !== 'undefined') {
                    getPoints($link);

                }
            });

        }


        function getPoints($link) {
            $.ajax({
                'type': 'GET',
                'url': '/api/social',
                data: {link: $link},
                'success': function (response) {
                    window.location.reload();
                }
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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Social Exchange')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Social Exchange (Share Links And Earn points)')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">

                        <?php if(Session::has('success_msg')): ?>
                            <p class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></p>
                        <?php endif; ?>
                        <?php if(Session::has('error_msg')): ?>
                            <p class="alert alert-danger"><?php echo e(Session::get('error_msg')); ?></p>
                        <?php endif; ?>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="/links" class="btn btn-info btn-md pull-right "><i
                                            class="fa fa-link"></i><?php echo e(trans('messages.My Links')); ?> </a>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <?php if(count($errors) > 0): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                        Links
                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th><?php echo e(trans('messages.URL')); ?></th>
                                                <th><?php echo e(trans('messages.POINTS TO BE AWARDED')); ?></th>
                                                <th><?php echo e(trans('messages.Share')); ?> </th>

                                            </tr>
                                            </thead>
                                            <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tbody>
                                                <tr>
                                                    <td><?php echo e($website->link); ?></td>
                                                    <td><?php echo e($website->points); ?></td>
                                                    <td><a onclick="fb_share('<?php echo e($website->link); ?>')"
                                                           class="btn btn-primary btn-embossed "><i
                                                                    class="fa fa-facebook"></i> <?php echo e(trans('messages.Share')); ?> </a></td>


                                                </tr>
                                                </tbody>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>


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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/social.blade.php ENDPATH**/ ?>