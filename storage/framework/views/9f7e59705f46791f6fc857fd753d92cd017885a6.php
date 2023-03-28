<?php $__env->startSection('content'); ?>

    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">

            <div class="bg-light lter b-b wrapper-md">
                <h1 class="m-n font-thin h3">Activities</h1>
            </div>
            <div class="wrapper-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Activities
                    </div>
                    <div class="panel-body b-b b-light">
                        <?php echo e(trans('messages.Search')); ?>

                        <form action="/administrator/activities" method="post">
                            <input name="search" type="text" class="form-control input-sm w-sm inline m-r"/>
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="submit" style="position: absolute; left: -9999px"/>

                        </form>
                    </div>
                    <div>
                        <table class="table m-b-none"  >
                            <thead>
                            <tr>
                                <th data-toggle="true">
                                    ID
                                </th>
                                <th data-toggle="true">
                                    Email
                                </th>
                                <th>
                                    Activity
                                </th>
                                <th >
                                    Link
                                </th>

                            </tr>
                            </thead>
                            <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($activity->client_id); ?></td>
                                    <td><?php echo e($activity->email); ?></td>
                                    <td><?php echo e($activity->activity); ?></td>
                                    <td><?php echo e($activity->link); ?></td>

                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </table>

                    </div>
                    <div class="pull-right">
                        <?php echo $activities->render(); ?>

                    </div>
                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/administrator/activities.blade.php ENDPATH**/ ?>