<?php $__env->startSection('extra_js'); ?>

    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;
        function onYouTubeIframeAPIReady() {
            $video_id = $('#player').attr("data-video");
            player = new YT.Player('player', {
                height: '300',
                width: '600',
                videoId: $video_id,
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }



        // 5. The API calls this function when the player's state changes.
        //    The function indicates that when playing a video (state=1),
        //    the player should play for six seconds and then stop.
        var done = false;
        function onPlayerStateChange(event) {
            if(event.data === 0) {
                alert("Successfully Received Points");
                $video_id = $('#player').attr("data-video");
                $.ajax({
                    'type': 'GET',
                    'url': '/api/media',
                    data: {video_id: $video_id},
                    'success': function (response) {
                    }
                });

            }
        }
        function stopVideo() {
            player.stopVideo();
        }
    </script>


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
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">

                        <div class="row">
                            <div class="col-md-12">
                                <a href="/video_list" class="btn btn-info btn-md pull-right "><i
                                            class="fa fa-link"></i><?php echo e(trans('messages.My Videos')); ?> </a>

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
                                        Videos
                                    </div>
                                    <div class="row wrapper">


                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped b-t b-light">
                                            <thead>
                                            <tr>
                                                <th><?php echo e(trans('messages.VIDEO')); ?></th>
                                                <th><?php echo e(trans('messages.POINTS TO BE AWARDED')); ?></th>
                                                <th><?php echo e(trans('messages.SHUFFLE')); ?></th>


                                            </tr>
                                            </thead>
                                                <tbody>
                                                <?php if(isset($videos)): ?>
                                                    <tr>
                                                    <td> <div id="player" data-video="<?php echo e($videos->embed_code); ?>"></div></td>

                                                    <td><b><?php echo e($videos->points); ?> <?php echo e(trans('messages.POINTS')); ?></b></td>
                                                        <td><a href="javascript:location.reload(true)" class="btn btn-primary btn-md  "><i
                                                                        class="fa fa-refresh"></i><?php echo e(trans('messages.Refresh')); ?> </a></td>


                                                    </tr>
                                                    <?php endif; ?>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Booster\resources\views/video.blade.php ENDPATH**/ ?>