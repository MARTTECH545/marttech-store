<?php $__env->startSection('content'); ?>

    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">
            <div class="bg-light lter b-b wrapper-md">
                <h1 class="m-n font-thin h3"><?php echo e(trans('messages.Websites')); ?></h1>
            </div>
            <div class="wrapper-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo e(trans('messages.Websites')); ?>

                    </div>
                    <div class="panel-body b-b b-light">
                        <?php echo e(trans('messages.Search')); ?>: <input id="filter" type="text" class="form-control input-sm w-sm inline m-r"/>
                    </div>
                    <div>
                        <table class="table m-b-none" ui-jq="footable"  data-page-size="10">
                            <thead>
                            <tr>
                                <th data-toggle="true">
                                    <?php echo e(trans('messages.Id')); ?>

                                </th>
                                <th>
                                    <?php echo e(trans('messages.Website')); ?>

                                </th>
                                <th data-hide="phone,tablet">
                                    <?php echo e(trans('messages.Status')); ?>

                                </th>
                                <th data-hide="phone,tablet">
                                    <?php echo e(trans('messages.Action')); ?>

                                </th>

                            </tr>
                            </thead>
                            <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                <tr>
                                    <td><?php echo e($website->id); ?></td>
                                    <td><?php echo e($website->website); ?></td>
                                    <td><a href="/administrator/website/status/<?php echo e($website->id); ?>"
                                           class="btn btn-primary btn-sm"><?php if($website->status == 0): ?> Enable <?php else: ?> Disable <?php endif; ?></a>
                                    </td>
                                    <td><a href="/administrator/website/delete/<?php echo e($website->id); ?>"  class="btn btn-danger btn-sm"><?php echo e(trans('messages.Delete')); ?></a></td>

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
<?php echo $__env->make('administrator.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/administrator/websites.blade.php ENDPATH**/ ?>