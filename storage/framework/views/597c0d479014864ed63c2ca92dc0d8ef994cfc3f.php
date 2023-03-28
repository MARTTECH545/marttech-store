<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo e($site_settings->name); ?> <?php echo e(trans('messages.Traffic Exchanger')); ?></title>
    <meta name="description" content="<?php echo e($site_settings->meta); ?>" />
    <meta name="keywords" content="<?php echo e($site_settings->meta); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="referrer" content="no-referrer">

    <link rel="stylesheet" href="/libs/assets/animate.css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <style>
        .loading-image {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 10;
        }
        .loader
        {
            display: none;
            width:250px;
            height: 250px;
            position: fixed;
            overflow-x: hidden;
            overflow-y: hidden;
            top: 50%;
            left: 50%;
            text-align:center;
            margin-left: -50px;
            margin-top: -100px;
            z-index:2;
        }
    </style>
    <?php echo $__env->yieldContent('extra_css'); ?>


</head>
<body>

<div class="loader">
    <center>
        <img class="loading-image" src="/loading.gif" alt="loading..">
    </center>
</div>

<div class="app app-header-fixed ">

   <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


           <!-- content -->
                <?php echo $__env->yieldContent('content'); ?>
        <!-- / content -->

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</div>

<script src="/libs/jquery/jquery/dist/jquery.js"></script>
<script src="/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="/js/ui-load.js"></script>
<script src="/js/ui-jp.config.js"></script>
<script src="/js/ui-jp.js"></script>
<script src="/js/ui-nav.js"></script>
<script src="/js/ui-toggle.js"></script>
<script>
    $.ajax({
        // your ajax code
        beforeSend: function(){
            $('.loader').show()
        },
        complete: function(){
            $('.loader').hide();
        }
    });
</script>
<?php echo $__env->yieldContent('extra_js'); ?>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\Booster\resources\views/layouts/master.blade.php ENDPATH**/ ?>