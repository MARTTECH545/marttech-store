<?php $__env->startSection('extra_js'); ?>
    <script src="js/source.js"></script>

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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.My Traffic Exchange Sessions')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.My Traffic Exchange Sessions')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row row-sm text-center">
                                    <div class="col-xs-12">
                                        <div class="panel padder-v item">
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Booster Extensions')); ?></span><br>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.extension')); ?></span><br><br>
                                            <a target="_blank" style="width:50%;" class="btn btn-lg btn-success"
                                               href="http://www.alexa.com/toolbar"><?php echo e(trans('messages.Alexa Toolbar')); ?></a>

                                            <div class="top text-right w-full">
                                                <i class=" text-warning m-r-sm"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row row-sm text-center">
                                    <div class="col-xs-12">
                                        <div class="panel padder-v item">
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Points Available')); ?></span>

                                            <div class="h1 text-info font-thin h1"><?php echo e(Auth::user()->points); ?></div>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.points description')); ?></span><br><br>
                                            <a href="/points" style="width:60%" class="btn btn-lg btn-success"><i
                                                        class="fa fa-shopping-cart"></i><?php echo e(trans('messages.Purchase')); ?></a>

                                            <div class="top text-right w-full">
                                                <i class=" text-warning m-r-sm"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- / stats -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                       <?php echo e(trans('messages. My Sessions(Allow popups)')); ?>

                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th><?php echo e(trans('messages.IP')); ?></th>
                                                <th><?php echo e(trans('messages.POINTS AVAILABLE')); ?></th>
                                                <th><?php echo e(trans('messages.STATUS')); ?></th>
                                                <th><?php echo e(trans('messages.ACTION')); ?></th>
                                                <th><?php echo e(trans('messages.PROGRESS')); ?></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><?php echo e(Request::getClientIp()); ?></td>
                                                <td><?php echo e(Auth::user()->points); ?></td>
                                                <td id="status">Not Running</td>
                                                <td><a id="source" class="btn btn-primary btn-embossed"> <i
                                                                class="glyphicon glyphicon-new-window"></i>
                                                        <?php echo e(trans('messages.Start Regular Browser Session')); ?></a><a id="pause"
                                                                                      class="btn btn-danger btn-embossed">
                                                        <i class="glyphicon glyphicon-alert"></i><?php echo e(trans('messages. Stop Regular Browser
                                                        Session')); ?></a></td>
                                                <td>
                                                    <div id="progress" class="progress-bar progress-bar-info"
                                                         role="progressbar"  style="width: 30%;">

                                                    </div>
                                                </td>
                                            </tr>



                                            </tbody>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/traffic-exchange.blade.php ENDPATH**/ ?>