<?php $__env->startSection('header'); ?>
<header>
	<ul class="header_nav navbar-light bg-light">
		<li>こんにちは、<?php echo e(Auth::user()->name); ?>さん！</li>
			<li>
				<a href="<?php echo e(route('users.show', Auth::user())); ?>">
					プロフィール
				</a>
			</li>
			<li>
				<form action="<?php echo e(route('logout')); ?>" method="POST">
					<?php echo csrf_field(); ?>
					<input type="submit" value="ログアウト">
				</form>
			</li>
			<li>
				<form class="search">
					<div class="input-group">
						<input class="form-control" type="text" name="keyword" placeholder="キーワード検索">
						<span class="input-group-append">
							<input class="btn btn-outline-secondary" type="submit" value="検索" >
						</span>
					</div>
				</form>	
			</li>
		</ul>
</header>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/layouts/logged_in.blade.php ENDPATH**/ ?>