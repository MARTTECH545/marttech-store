<html>
<head>
	<title><?php echo e($site_settings->name); ?> <?php echo e(trans('messages.Traffic Exchanger')); ?></title>
	<link rel="stylesheet" href="/libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo e(trans('messages.Reset Password')); ?></div>
				<div class="panel-body">
					<?php if(count($errors) > 0): ?>
						<div class="alert alert-danger">
							<strong><?php echo e(trans('messages.Whoops!')); ?></strong> <?php echo e(trans('messages.There were some problems with your input.')); ?><br><br>
							<ul>
								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					<?php endif; ?>

					<form class="form-horizontal" role="form" method="post" action="/reset">
						<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
						<input type="hidden" name="code" value="<?php echo e($code); ?>">
						<input type="hidden" name="email" value="<?php echo e($email); ?>"/>



						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo e(trans('messages.Password')); ?></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo e(trans('messages.confirm password')); ?></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<?php echo e(trans('messages.Reset Password')); ?>

								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html><?php /**PATH D:\xampp\htdocs\Booster\resources\views/auth/reset.blade.php ENDPATH**/ ?>