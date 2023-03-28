<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2><?php echo e(trans('messages.Verify Your Email Address')); ?></h2>

<div>


            <h4>Hi , <?php echo $name; ?></h4>

            <p>Please click on the click , In order to reset the password <a
                        href="<?php echo e($reset_url); ?>">Click Here</a></p>

</div>

</body>
</html><?php /**PATH D:\xampp\htdocs\Booster\resources\views/auth/verify.blade.php ENDPATH**/ ?>