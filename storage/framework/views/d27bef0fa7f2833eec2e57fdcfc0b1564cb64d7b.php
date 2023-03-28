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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-Short Links</h1>
                                <small class="text-muted">Share Short Links And Earn Points</small>
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
                                        Short Links
                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table m-b-none" ui-jq="footable" data-filter="#filter" data-page-size="10">
                                            <thead>
                                            <tr>
                                                <th>Website Link</th>
                                                <th>Short Link</th>
                                                <th>Status</th>


                                            </tr>
                                            </thead>
                                            <?php if(sizeof($websites)>0): ?>
                                                <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo e($website->website); ?></td>
                                                        <td><?php echo e($website->short_link); ?></td>
                                                        <?php if($website->status==1): ?>
                                                            <td>Running</td>
                                                        <?php else: ?>
                                                            <td>Waiting For approval</td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    </tbody>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </table>

                                        <tfoot class="hide-if-no-paging">
                                        <tr>
                                            <td colspan="5" class="text-center">
                                                <ul class="pagination"></ul>
                                            </td>
                                        </tr>
                                        </tfoot>


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




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/short_links.blade.php ENDPATH**/ ?>