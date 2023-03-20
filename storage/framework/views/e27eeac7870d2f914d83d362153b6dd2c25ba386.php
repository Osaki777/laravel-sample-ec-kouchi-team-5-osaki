<?php $__env->startSection('content'); ?>
	<div class="container contents">
		<div class="dog">
			<img class="d-block w-100" src="http://drive.google.com/uc?export=view&id=1cXer1Yvd4-f6BCa72lpBHy7eZHudHTiY"
			        alt="メイン画像">
		</div>
		<!--犬の写真カルーセル-->
		<div id="carouselExampleSlidesOnly" class="carousel slide"data-ride="carousel">
			  <!-- インジケータの設定 -->
			  <ol class="carousel-indicators">
			    <li data-target="carouselExampleSlidesOnly" data-slide-to="0"
			      class="active<">"></li>
			    <li data-target="carouselExampleSlidesOnly" data-slide-to="1"></li>
			    <li data-target="carouselExampleSlidesOnly" data-slide-to="2"></li>
			  </ol>
			  <!-- スライドさせる画像の設定 -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="http://drive.google.com/uc?export=view&id=1fvgDj2LVryIxg_TJTn5EF89Ai05dLM_4"
			        alt="第1スライド">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://drive.google.com/uc?export=view&id=1Ig6YHPjoMOBhiOu2gR7w1RqIH_hfhfUA"
			        alt="第2スライド">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://drive.google.com/uc?export=view&id=19qhPTAyTUusyuVaDy-3ZYFRzM7zyHrGJ"
			        alt="第3スライド">
			    </div>
			    <!-- /.carousel -->
			  </div>
			  <!-- /.carousel-inner -->
			  <!-- スライドコントロールの設定 -->
			  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly"
			    role="button" data-slide="prev"> <span
			    class="carousel-control-prev-icon" aria-hidden="true"></span> <span
			    class="sr-only">Previous</span>
			  </a> <a class="carousel-control-next" href="#carouselExampleSlidesOnly"
			    role="button" data-slide="next"> <span
			    class="carousel-control-next-icon" aria-hidden="true"></span> <span
			    class="sr-only">Next</span>
			  </a>
        </div>
        <!-- モーダル -->
　　　　<div class="modal fade" tabindex="-1" id="Modal1">
  　　　　　<div class="modal-dialog">
   　　　　 <div class="modal-content">
    　  　　　<div class="modal-header">
      　 　　 <h5 class="modal-title">首輪</h5>
      　 　　 <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
         　　<span aria-hidden="true">&times;</span>
       　　　 </button>
     　 　  　</div>
      　　  　<!-- /.modal-header -->
     　  　  <div class="modal-body">
        　　  <img class="img-fluid" src="images/1.jpg" />
       　   　  <p>カラーバリエーションも豊富に取り揃えています。</p>
        　  </div>
        　  <!-- /.modal-body -->
    　     </div>
       　　<!-- /.modal-content -->
      　 </div>
         <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		<div class="row">
			<div class="col-3">
				<h1>商品カテゴリ</h1>
			<div class="dropdown_top">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			首輪・ハーネス・リード
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    			<a class="dropdown-item" href="#">首輪</a>
	    			<a class="dropdown-item" href="#">ハーネス</a>
	    			<a class="dropdown-item" href="#">リード</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			ドックフード
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    			<a class="dropdown-item" href="#">子犬</a>
	    			<a class="dropdown-item" href="#">成犬</a>
	    			<a class="dropdown-item" href="#">高齢犬</a>
				</div>
			</div>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			洋服
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    			<a class="dropdown-item" href="#">服</a>
	    			<a class="dropdown-item" href="#">帽子</a>
	    			<a class="dropdown-item" href="#">おむつ</a>
				</div>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    			愛犬のおもちゃ
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
	    			<a class="dropdown-item" href="#">ボール</a>
	    			<a class="dropdown-item" href="#">ぬいぐるみ</a>
	    			<a class="dropdown-item" href="#">知育玩具</a>
				</div>
			</div>
			</div>
			</div>
			<div class="col-9">
			  <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				  <div class="card item">
					<div class="row item_row">
						<div class="col-6 item_figure">
						    <?php if($item->image !== ''): ?>
                    <img class="img-fluid" src="<?php echo e(secure_asset($item->image)); ?>">
                <?php else: ?>
                    <img src="<?php echo e(secure_asset('images/no_image.png')); ?>">
                <?php endif; ?>
						</div>
						<div class="col-6 item_description">
							<h2 class="item_title">
							    <a href="<?php echo e(route('items.show', $item)); ?>">
                      <?php echo e($item->name); ?>: 
                  </a>
              </h2>
              <?php if($item->stock > 0): ?>
                  <div><?php echo e($item->price); ?>円</div>
              <?php else: ?>
                  <div>売り切れ</div>
              <?php endif; ?>
							<div><?php echo e($item->description); ?></div>
							<button type="button" class="btn btn-primary"data-toggle="modal" data-target="#Modal1">Check!</button>
						</div>
					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <p>出品商品はありません。</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<footer class="text-center">
		<p><small>&copy;Team5 All Rights Reserved.</small></p>
	</footer>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.logged_in', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ec2-user/environment/laravel-sample-ec-kouchi-team-5/resources/views/market.blade.php ENDPATH**/ ?>