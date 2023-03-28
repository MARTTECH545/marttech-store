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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-Withdrawals</h1>
                                <small class="text-muted">Withdrawals</small>
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
                                <a href="/withdraw" class="btn btn-info btn-md pull-right "><i
                                            class="fa fa-paper-plane"></i>Withdraw Points</a>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Withdrawals
                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th>Email</th>
                                                <th>Paypal Email</th>
                                                <th>Points Withdrawal</th>
                                                <th>Status</th>


                                            </tr>
                                            </thead>
                                            <?php if(sizeof($withdrawals)>0): ?>
                                                <?php $__currentLoopData = $withdrawals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrawal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo e($withdrawal->email); ?></td>
                                                        <td><?php echo e($withdrawal->paypal_email); ?></td>
                                                        <td><?php echo e($withdrawal->points); ?></td>
                                                        <td><?php echo e($withdrawal->status); ?></td>

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




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/withdrawal_list.blade.php ENDPATH**/ ?>