<?php $__env->startSection('extra_js'); ?>

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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>-<?php echo e(trans('messages.Media Exchange')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.Media Exchange (View Videos And Earn points)')); ?></small>

                            </div>
                            <a data-toggle="modal" data-target="#myModal" type="button"
                               class="btn btn-lg btn-primary pull-right" style="margin-right: 10px"><i class="fa fa-plus"></i><?php echo e(trans('messages.Add
                                Video')); ?></a>
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
                        <!-- stats -->
                                <div class="row">
                                    <div class="col-md-12">

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
                                                <?php echo e(trans('messages.Videos')); ?>

                                            </div>
                                            <div class="row wrapper">


                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-striped b-t b-light">
                                                    <thead>
                                                    <tr>
                                                        <th><?php echo e(trans('messages.VIDEO')); ?></th>
                                                        <th><?php echo e(trans('messages.ACTION')); ?></th>


                                                    </tr>
                                                    </thead>
                                                    <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tbody>
                                                        <tr>
                                                            <td> <iframe width="300" height="169" style="padding-left: 20px" src="https://www.youtube.com/embed/<?php echo e($video->embed_code); ?>?controls=0" frameborder="0" allowfullscreen></iframe>
                                                            </td>
                                                            <td><a href="/video/delete/<?php echo e($video->id); ?>"
                                                                   class="btn btn-danger btn-embossed "><i
                                                                            class="fa fa-trash"></i><?php echo e(trans('messages.Delete')); ?> </a></td>

                                                        </tr>
                                                        </tbody>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </table>


                                            </div>

                                            <div class="pull-right">
                                                <?php echo $videos->render(); ?>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <!-- / stats -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="/video/add" method="post">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><?php echo e(trans('messages.Add Videos')); ?></h4>
                                                </div>
                                                <div class="modal-body">


                                                    <?php if(Session::has('success-msg')): ?>
                                                        <p class="alert alert-danger"><?php echo e(Session::get('success-msg')); ?></p>
                                                    <?php endif; ?>
                                                    <div class="input-group input-group-md">
                                                        <span class="input-group-addon" id="sizing-addon1"><?php echo e(trans('messages.Video URL')); ?></span>
                                                        <input type="url" name="embed_code" value="<?php echo e(old('embed_code')); ?>"
                                                               class="form-control" placeholder="https://www.youtube.com/watch?v=IrgqUZaeRuc"
                                                               aria-describedby="sizing-addon1" required>
                                                    </div>

                                                    <div class="input-group input-group-md">
                                                        <span class="input-group-addon" id="sizing-addon1"> <?php echo e(trans('messages.Points')); ?></span>
                                                        <input type="number" name="points"
                                                               value="<?php echo e(old('points')); ?>" class="form-control"
                                                               placeholder="Set Points"
                                                               aria-describedby="sizing-addon1" required>
                                                    </div>


                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal"><?php echo e(trans('messages.Close')); ?>

                                                    </button>
                                                    <button type="submit" class="btn btn-success"><?php echo e(trans('messages.Save changes')); ?>

                                                    </button>
                                                </div>
                                            </form>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/video_list.blade.php ENDPATH**/ ?>