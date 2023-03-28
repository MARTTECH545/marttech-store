<!-- aside -->
<aside id="aside" class="app-aside hidden-xs bg-dark">
    <div class="aside-wrap">
        <div class="navi-wrap">

            <!-- nav -->
            <nav ui-nav class="navi clearfix">
                <ul class="nav">
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span><?php echo e(trans('messages.Navigation')); ?></span>
                    </li>
                    <li>
                        <a href="/dashboard" >
                  <span class="pull-right text-muted" >
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="glyphicon glyphicon-home icon text-primary-dke"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Dashboard')); ?></span>
                        </a>
                    </li>

                    <?php if($control_settings->traffic_exchange == "enable"): ?>

                    <li>
                        <a href="/traffic-exchange">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-shuffle fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Traffic Exchange')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>

                    <?php if($control_settings->manual_exchange == "enable"): ?>


                    <li>
                        <a href="/manual-exchange">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-rocket fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Manual Exchange')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>

                    <?php if($control_settings->social_exchange == "enable"): ?>

                    <li>
                        <a href="/social">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-share fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Social Exchange')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>

                    <?php if($control_settings->media_exchange == "enable"): ?>


                    <li>
                        <a href="/videos">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-camera fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Media Exchange')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>



                    <li>
                        <a href="/websites">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-globe fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Websites')); ?></span>
                        </a>
                    </li>


                    <li>
                        <a href="/short_links">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-link fa-fw"></i>
                            <span class="font-bold">Short Links</span>
                        </a>
                    </li>

                    <?php if($control_settings->referral == "enable"): ?>

                    <li>
                        <a href="/referrals">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-users fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Referrals')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>


                    <li>
                        <a href="/subscriptions">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-basket fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Subscriptions')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="/points">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-wallet fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Points')); ?></span>
                        </a>
                    </li>

                    <?php if($control_settings->points == "enable"): ?>

                    <li>
                        <a href="/transferlist">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-paper-plane fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Transfers')); ?></span>
                        </a>
                    </li>

                    <?php endif; ?>

                    <li>
                        <a href="/withdrawallist">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-briefcase fa-fw"></i>
                            <span class="font-bold">WithDrawals</span>
                        </a>
                    </li>

                    <li>
                        <a href="/downloads">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-cloud-download fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Downloads')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="/support">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-question fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Support')); ?></span>
                        </a>
                    </li>


                    <li>
                        <a href="/settings">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-settings fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Settings')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="/logout">
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw  text"></i>
                    <i class="fa fa-fw  text-active"></i>
                  </span>
                            <i class="icon-logout fa-fw"></i>
                            <span class="font-bold"><?php echo e(trans('messages.Logout')); ?></span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- nav -->


        </div>
    </div>
</aside>
<!-- / aside --><?php /**PATH D:\xampp\htdocs\Booster\resources\views/layouts/aside.blade.php ENDPATH**/ ?>