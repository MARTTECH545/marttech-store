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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Manual Exchange')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Manual Exchange')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">

                        <?php if(Session::has('message')): ?>
                            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
                        <?php endif; ?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <?php echo e(trans('messages.Websites')); ?>

                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th><?php echo e(trans('messages.URL')); ?></th>
                                                <th><?php echo e(trans('messages.ACTION')); ?></th>

                                            </tr>
                                            </thead>
                                            <?php if(sizeof($websites)>0): ?>
                                                <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo e($website->website); ?></td>
                                                        <td><a target="_blank" href="<?php echo e($website->website); ?>"
                                                               id="link_click"  class="btn btn-primary btn-embossed "><i
                                                                        class="fa fa-forward"></i><?php echo e(trans('messages.Visit Site')); ?> </a></td>

                                                    </tr>
                                                    </tbody>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
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


<?php $__env->startSection('extra_js'); ?>
    <?php if(sizeof($websites)>0): ?>

        <script>

            $('#link_click').on('click', function () {
                $.ajax({
                    'url': '/api/check',
                    'type': 'GET',
                    'success': function (response) {

                        window.location = "/api/manual_exchange/<?php echo e($website->client_id); ?>?website=<?php echo e($website->website); ?>";

                        return true;
                    },
                    'error': function (response) {
                        return false;
                    }
                });

            });

        </script>

    <?php endif; ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/manual-exchange.blade.php ENDPATH**/ ?>