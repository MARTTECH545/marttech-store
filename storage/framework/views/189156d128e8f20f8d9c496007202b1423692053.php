<?php $__env->startSection('content'); ?>

    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">

            <div class="bg-light lter b-b wrapper-md">
                <h1 class="m-n font-thin h3"><?php echo e(trans('messages.Support')); ?></h1>
            </div>
            <div class="wrapper-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo e(trans('messages.Support')); ?>

                    </div>
                    <div class="panel-body b-b b-light">
                        <?php echo e(trans('messages.Search')); ?>: <input id="filter" type="text" class="form-control input-sm w-sm inline m-r"/>
                    </div>
                    <div>
                        <table class="table m-b-none" ui-jq="footable" data-filter="#filter" data-page-size="10">
                            <thead>
                            <tr>
                                <th data-hide="phone,tablet">
                                    <?php echo e(trans('messages.Email')); ?>

                                </th>

                                <th data-toggle="true">
                                    <?php echo e(trans('messages.Subject')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('messages.Message')); ?>

                                </th>


                            </tr>
                            </thead>
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($message->email); ?></td>
                                    <td><?php echo e($message->subject); ?></td>
                                    <td><?php echo e($message->message); ?></td>
                                </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tfoot class="hide-if-no-paging">
                            <tr>
                                <td colspan="5" class="text-center">
                                    <ul class="pagination"></ul>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/administrator/support.blade.php ENDPATH**/ ?>