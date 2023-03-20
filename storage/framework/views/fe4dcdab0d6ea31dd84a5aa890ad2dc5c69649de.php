<?php $__env->startSection('content'); ?>
    <h1><?php echo e($title); ?></h1>

    <p><?php echo e($user->name); ?> さん</p>

    <h2>【購入履歴】</h2>
    
       <style>
        h2{
            color: #77969A;
            font-size: 30px;
            background-color: #FB9966;
        }
    </style>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logged_in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/users/show.blade.php ENDPATH**/ ?>