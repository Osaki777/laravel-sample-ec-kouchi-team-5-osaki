<?php $__env->startSection('header'); ?>
<header>
    <?php echo csrf_field(); ?>
    <ul class="header_nav">
        <li>
          <a href="<?php echo e(route('register')); ?>">
            新規登録
          </a>
        </li>
    </ul>
</header>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/layouts/not_logged_in.blade.php ENDPATH**/ ?>