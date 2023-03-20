<?php $__env->startSection('content'); ?>
    <h1><?php echo e($title); ?></h1>

    <dl>
        <dt>商品名</dt>
        <dd><?php echo e($item->name); ?></dd>
        <dt>画像</dt>
        <dd class="item_image">
            <?php if($item->image !== ''): ?>
                <img src="<?php echo e(secure_asset('storage/item_photos/' . $item->image)); ?>">
            <?php else: ?>
                <img src="<?php echo e(secure_asset('images/no_image.png')); ?>">
            <?php endif; ?>
            <?php if($item->user_id === Auth::user()->id): ?>
                <a href="<?php echo e(route('items.edit_image', $item)); ?>">
                    画像を変更
                </a>
            <?php endif; ?>
        </dd>
        <dt>カテゴリ</dt>
        <dd><?php echo e($item->category->name); ?></dd>
        <dt>価格</dt>
        <dd><?php echo e($item->price); ?>円</dd>
        <dt>説明</dt>
        <dd><?php echo e($item->description); ?></dd>
    </dl>
    <a href="<?php echo e(route('items.confirm', $item)); ?>">
        購入する
    </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logged_in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/items/show.blade.php ENDPATH**/ ?>