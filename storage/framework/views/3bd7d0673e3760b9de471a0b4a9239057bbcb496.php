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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Dashboard')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Welcome to booster app')); ?></small>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row row-sm text-center">
                                    <div class="col-xs-12">
                                        <div class="panel padder-v item">
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Points Available')); ?></span>

                                            <div class="h1 text-info font-thin h1"><?php echo e(Auth::user()->points); ?></div>
                                            <span class="text-muted text-xs"> <?php echo e(trans('messages.points description')); ?></span><br><br>
                                            <a href="/points" style="width:60%" class="btn btn-lg btn-success"><i
                                                        class="fa fa-shopping-cart"></i><?php echo e(trans('messages.Purchase')); ?></a>

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
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Membership Type')); ?></span>
                                            <?php if(Auth::user()->membership=='free'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(trans('messages.Free membership')); ?></div>
                                                <span class="text-muted text-xs"> <?php echo e(trans('messages.free_membership')); ?> </span>
                                                <br><br>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->membership=='paid'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(trans('messages.Premium membership')); ?></div>
                                                <span class="text-muted text-xs"> <?php echo e(trans('messages.premium_membership')); ?></span>
                                                <br><br>
                                            <?php endif; ?>
                                            <a href="/subscriptions" style="width:60%" class="btn btn-lg btn-primary"><i
                                                        class="fa fa-info"></i><?php echo e(trans('messages.More Info')); ?></a>

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
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Website Slots')); ?></span>
                                            <?php if(Auth::user()->membership=='free'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(count(\App\Websites::where('client_id',Auth::user()->id)->get())); ?>

                                                    /3 <?php echo e(trans('messages.website slot(s) used')); ?>

                                                </div>
                                                <span class="text-muted text-xs"> <?php echo e(trans('messages.free slots')); ?></span>
                                                <br><br>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->membership=='paid'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(count(\App\Websites::where('client_id',Auth::user()->id)->get())); ?>

                                                    /unlimited  <?php echo e(trans('messages.website slot(s) used')); ?>

                                                </div>
                                                <span class="text-muted text-xs"> <?php echo e(trans('messages.premium slots')); ?></span>
                                                <br><br>
                                            <?php endif; ?>
                                            <a href="/subscriptions" style="width:60%" class="btn btn-lg btn-danger"><i
                                                        class="fa fa-plus"></i><?php echo e(trans('messages.Add Slots')); ?></a>

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
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.Hits Received')); ?></div>
                                    <div class="panel-body">
                                        <div ui-jq="plot" ui-options="
              [
                { data: <?php echo e(json_encode($graph_values)); ?>, points: { show: true, radius: 6}, splines: { show: true, tension: 0.45, lineWidth: 5, fill: 0 } }
              ],
              {
                colors: ['#23b7e5'],
                series: { shadowSize: 3 },
                xaxis:{
                  font: { color: '#ccc' },
                  position: 'bottom',
                  ticks: <?php echo e(json_encode($graph_ticks)); ?>

                                                },
                                                yaxis:{ font: { color: '#ccc' } },
                                                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                                                tooltip: true,
                                                tooltipOpts: { content: '%x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                                              }
                                            " style="height:240px">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading font-bold"><?php echo e(trans('messages.Points Earned')); ?></div>
                                    <div class="panel-body">
                                        <div ui-jq="plot" ui-options="
              [
                { data: <?php echo e(json_encode($graph_points)); ?>, points: { show: true, radius: 6}, splines: { show: true, tension: 0.45, lineWidth: 5, fill: 0 } }
              ],
              {
                colors: ['#23b7e5'],
                series: { shadowSize: 3 },
                xaxis:{
                  font: { color: '#ccc' },
                  position: 'bottom',
                  ticks: <?php echo e(json_encode($graph_ticks)); ?>

                                                },
                                                yaxis:{ font: { color: '#ccc' } },
                                                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#ccc' },
                                                tooltip: true,
                                                tooltipOpts: { content: '%x.1 is %y.4',  defaultTheme: false, shifts: { x: 0, y: 20 } }
                                              }
                                            " style="height:240px">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/index.blade.php ENDPATH**/ ?>