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
                                <h1 class="m-n font-thin h1 text-black"><?php echo e($site_settings->name); ?>

                                    -<?php echo e(trans('messages.My Websites')); ?></h1>
                                <small class="text-muted"><?php echo e(trans('messages.My Websites')); ?></small>
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
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Website Slots')); ?></span>
                                            <?php if(Auth::user()->membership=='free'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(count(\App\Websites::where('client_id',Auth::user()->id)->get())); ?>

                                                    /3 <?php echo e(trans('messages.website slot(s) used')); ?></div>
                                                <span class="text-muted text-xs"><?php echo e(trans('messages.free slots')); ?></span>
                                                <br><br>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->membership=='paid'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(count(\App\Websites::where('client_id',Auth::user()->id)->get())); ?>

                                                    /unlimited <?php echo e(trans('messages.website slot(s) used')); ?></div>
                                                <span class="text-muted text-xs"><?php echo e(trans('messages.premium slots')); ?></span>
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
                            <div class="col-md-4">
                                <div class="row row-sm text-center">
                                    <div class="col-xs-12">
                                        <div class="panel padder-v item">
                                            <span class="h3  font-thin h3"><?php echo e(trans('messages.Points Available')); ?></span>

                                            <div class="h1 text-info font-thin h1"><?php echo e(Auth::user()->points); ?></div>
                                            <span class="text-muted text-xs"><?php echo e(trans('messages.points description')); ?></span><br><br>
                                            <a href="/points" style="width:60%" class="btn btn-lg btn-success"><i
                                                        class="fa fa-shopping-cart"></i><?php echo e(trans('messages.Purchase')); ?>

                                            </a>

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
                                                <div class="h1 text-info font-thin h1"><?php echo e(trans('messages.Free membership')); ?> </div>
                                                <span class="text-muted text-xs"><?php echo e(trans('messages.free_membership')); ?> </span>
                                                <br><br>
                                            <?php endif; ?>
                                            <?php if(Auth::user()->membership=='paid'): ?>
                                                <div class="h1 text-info font-thin h1"><?php echo e(trans('messages.Premium membership')); ?> </div>
                                                <span class="text-muted text-xs"><?php echo e(trans('messages.premium_membership')); ?>

                                                    .</span><br><br>
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
                        </div>
                        <!-- / stats -->

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
                                        <?php if(Session::has('success_msg')): ?>
                                            <p class="alert alert-success"><?php echo e(Session::get('success_msg')); ?></p>
                                        <?php endif; ?>
                                        <?php if(Session::has('error_msg')): ?>
                                            <p class="alert alert-danger"><?php echo e(Session::get('error_msg')); ?></p>
                                        <?php endif; ?>
                                        <?php echo e(trans('messages.My Websites')); ?>

                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th><?php echo e(trans('messages.URL')); ?></th>
                                                <th><?php echo e(trans('messages.ENABLE')); ?></th>
                                                <th><?php echo e(trans('messages.ACTION')); ?></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($website->website); ?></td>
                                                    <?php if($website->status==1): ?>
                                                        <td>Running</td>
                                                    <?php else: ?>
                                                        <td>Waiting For approval</td>
                                                    <?php endif; ?>

                                                    <td><a href="/website/delete/<?php echo e($website->id); ?>" style="width:60%"
                                                           class="btn btn-danger btn-embossed"><?php echo e(trans('messages.Delete')); ?></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pull-right">
                                        <?php echo $websites->render(); ?>

                                    </div>
                                    <a data-toggle="modal" data-target="#myModal" type="button" style="width:100%"
                                       class="btn btn-lg btn-warning align-center"><i
                                                class="fa fa-plus"></i><?php echo e(trans('messages.Add a website')); ?></a>

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                         aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form action="/website/add" method="post">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title"
                                                            id="myModalLabel"><?php echo e(trans('messages.Add a website')); ?></h4>
                                                    </div>
                                                    <div class="modal-body">


                                                        <?php if(Session::has('success-msg')): ?>
                                                            <p class="alert alert-danger"><?php echo e(Session::get('success-msg')); ?></p>
                                                        <?php endif; ?>
                                                        <div class="input-group input-group-md">
                                                            <span class="input-group-addon"
                                                                  id="sizing-addon1"><?php echo e(trans('messages.URL')); ?></span>
                                                            <input type="url" name="website"
                                                                   value="<?php echo e(old('website')); ?>" class="form-control"
                                                                   placeholder="Website URL"
                                                                   aria-describedby="sizing-addon1" required>
                                                        </div><br>


                                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><?php echo e(trans('messages.Close')); ?></button>
                                                        <button type="submit"
                                                                class="btn btn-success"><?php echo e(trans('messages.Save changes')); ?></button>
                                                    </div>
                                                </form>

                                            </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/websites.blade.php ENDPATH**/ ?>