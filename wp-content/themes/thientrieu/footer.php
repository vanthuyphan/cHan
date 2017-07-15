		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&p=2&post_type=page'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<p><?php echo teaser(50); ?><a style="color:#fff" href="<?php the_permalink(); ?>">Xem thêm</a></p>
					<?php endwhile; wp_reset_postdata(); ?>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<h3>Thời trang</h3>
						<ul>
						<!-- Get category -->
						<?php $args = array( 
						    'hide_empty' => 0,
						    'taxonomy' => 'product_cat',
						    'orderby' => id,
						    'parent' => 0
						    ); 
						    $cates = get_categories( $args ); 
						    foreach ( $cates as $cate ) {  ?>
								<li>
									<a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name ?></a>
								</li>
						<?php } ?>
						</ul>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<h3>Tài khoản</h3>
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/tai-khoan">Tài khoản của bạn</a></li>
							<li><a href="<?php bloginfo('url'); ?>/gio-hang">Giỏ hàng</a></li>
							<li><a href="<?php bloginfo('url'); ?>/tin-tuc">Tin tức</a></li>
							<li><a href="<?php bloginfo('url'); ?>/">Liên hệ</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
					<?php global $hk_options; ?>
						<h3>Liên hệ với chúng tôi</h3>
						<p>
							<span>Địa chỉ: <?php echo $hk_options[addft]; ?></span>
							<span>Email: <?php echo $hk_options[emailft]; ?></span>
							<span>Điện thoại: <?php echo $hk_options[phoneft]; ?></span>
							<span>Website: <?php echo $hk_options[web]; ?></span>
						</p>
					</div>
				</div>
			</div>
			<div class="copyright"> <?php echo $hk_options[copyr]; ?> - Xây dựng và phát triển bởi <a href="http://huykira.net">Huy Kira</a> </div>
		</div> <!-- end footer -->
	</div> <!-- end wrapper -->
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/simpleMobileMenu.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/slick.min.js"></script>
	<script> var Homeurl = '<?php echo bloginfo("template_directory"); ?>'; </script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/jquery.raty.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/js/common.js"></script>
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=750688268378229";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<?php wp_footer(); ?>
</body>
</html>