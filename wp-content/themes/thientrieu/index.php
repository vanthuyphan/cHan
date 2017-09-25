<?php get_header(); ?>
<div class="container">
	<?php do_action( 'woocommerce_before_shop_loop' ); ?>
</div>
	<div id="content">
		<div class="container">
			<div class="row block-slider">
				<div class="col-md-8 col-sm-12">
					<?php get_template_part('slider'); ?>
				</div>
				<div class="col-md-4 col-sm-12">
					<ul class="block-banner">
						<li><a href="<?php echo $hk_options[link1]; ?>" class="img"><img src="<?php echo $hk_options[r1][url]; ?>" /></a></li>
						<li><a href="<?php echo $hk_options[link2]; ?>" class="img"><img src="<?php echo $hk_options[r2][url]; ?>" /></a></li>
					</ul>
				</div>
			</div> <!-- end block-slider -->
			<div class="block-product">
				<ul class="list-news">
					<?php $args = array( 'post_type' => 'product',50,); ?>
			        <?php $getposts = new WP_query( $args);?>
			        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
			        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
			        <?php global $product; ?>
					<li>
						<div class="post-img">
						<a href="<?php the_permalink(); ?>" class="img"><?php show_thumb(270,300,1,'c'); ?></a>
						<form action="" method="post">
						<input type="hidden" name="add-to-cart" value="<?php the_id(); ?>">
						<button class="addc"><i class="fa fa-cart-plus" aria-hidden="true"></i> Thêm vào giỏ</button>
						</form>
						<a class="viewm" href="<?php the_permalink(); ?>"><i class="fa fa-search-plus" aria-hidden="true"></i> Chi tiết</a>
						</div>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="score-callback" data-score="4"></div>
						<p><span class="price-pro"><?php echo $product->get_price_html(); ?></span></p>
						<?php if($product->sale_price) { ?>
						<div class="sale">
							<?php  $percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
								   echo $price . sprintf( __('%s', 'woocommerce' ), $percentage . '%' ); ?>
						</div>
						<?php } ?>
					</li>
					<?php endwhile; ?>
				</ul>
			</div> <!-- end block-product -->

			<div class="register">
				<a href="<?php echo $hk_options[linktt]; ?>" class="img"><img src="<?php echo $hk_options[tt][url]; ?>" /></a>
			</div> <!-- end register -->

			<div class="block-fashion">
				<div class="row">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sanpham') ) : ?><?php endif; ?>
				</div>
			</div> <!-- end block-fashion -->
		</div>
	</div> <!-- end content -->
<?php get_footer(); ?>
