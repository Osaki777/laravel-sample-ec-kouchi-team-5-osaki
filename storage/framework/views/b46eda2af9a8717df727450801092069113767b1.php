<?php $__env->startSection('content'); ?>
    <h1><?php echo e($title); ?></h1>
    <a href="<?php echo e(route('items.create')); ?>">新規追加</a>

	<table class="item_table">
		<thead>
			<tr>
				<th>名前</th>
				<th>金額</th>
				<th>在庫数</th>
				<th>説明</th>
				<th>画像</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
		    <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<tr>
				<td><?php echo e($item->name); ?></td>
				<td><?php echo e($item->price); ?></td>
				<td><?php echo e($item->stock); ?></td>
				<td><?php echo e($item->description); ?></td>
				<td>
				    <?php if($item->image !== ''): ?>
                        <img class="img-fluid" src="<?php echo e(secure_asset('storage/' . $item->image)); ?>">
                    <?php else: ?>
                        <img src="<?php echo e(secure_asset('images/no_image.png')); ?>">
                    <?php endif; ?>
				<td>
				    <a href="<?php echo e(route('items.edit', $item)); ?>">
                      編集
                    </a>
					<form method="POST" action="<?php echo e(route('items.destroy', $item)); ?>">
						<?php echo csrf_field(); ?>
            			<?php echo method_field('delete'); ?>
                        <input type="submit" value="削除" >
                    </form>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>商品はありません。</p>
			<?php endif; ?>
		</tbody>
	</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logged_in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/admin.blade.php ENDPATH**/ ?>