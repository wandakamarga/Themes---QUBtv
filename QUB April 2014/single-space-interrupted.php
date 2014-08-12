<?php get_header(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script-channelpage.js"></script>
	</head>
	<body>
		<div class="panel">
			<div class="panel_logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qublogo.png" alt="">
				</a>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<div class="qub_channel">
			<figure class="item item-w6 item-h7 qub_box featured">
				<div class="qub_box_video_container">
					<?php echo(types_render_field( "featured-video-url", array( "output" => "raw" ) )); ?></a>
				</div>
			</figure>
			<figure  class="item item-w6 item-h9 qub_box qub_page">
				<div class="qub_page_content">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/channel-si.png" alt="" class="channel">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3 style="margin-bottom: 40px;"><?php echo get_the_title(); ?></h3>
							<?php the_content(); ?>
							<?php get_template_part( 'content', 'share' ); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</figure>
			<?php
	          $args=array(
	              'post_type' => 'space-interrupted',
	              'post_status' => 'publish',
	              'order' => 'DSC',
	              'posts_per_page' => 3,
	          );
	          $my_query = null;
	          $my_query = new WP_Query($args);
	          if( $my_query->have_posts() ) {
	          while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<figure class="item item-w2 item-h5 qub_box">
				<div class="qub_box_video_container">
				<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?>
				<h1><?php echo get_the_title(); ?></h1></a>
				<p><?php echo get_the_excerpt(); ?></p>
				<a class="more" href="<?php echo get_permalink(); ?>">Read More</a>
			</figure>
			<?php endwhile; } wp_reset_query(); ?>
		</div>
		<?php get_footer(); ?>


		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
		<script>
			$(document).ready(function(){
    		$(".qub_box_video_container").fitVids();
    		$(".qub_page_content").fitVids();
  		});
			(function ($) {
				var $container = $('.qub_channel'),
					colWidth = function () {
						var w = $container.width(),
							columnNum = 1,
							columnWidth = 0;
						if (w > 1200) {
							columnNum  = 8;
						} else if (w > 900) {
							columnNum  = 6;
						} else if (w > 600) {
							columnNum  = 6;
						} else if (w > 300) {
							columnNum  = 6;
						}
						columnWidth = Math.floor(w/columnNum);
						$container.find('.item').each(function() {
							var $item = $(this),
								multiplier_w = $item.attr('class').match(/item-w(\d)/),
								multiplier_h = $item.attr('class').match(/item-h(\d)/),
								width = multiplier_w ? columnWidth*multiplier_w[1]-4 : columnWidth-4,
								height = multiplier_h ? columnWidth*multiplier_h[1]*0.5-4 : columnWidth*0.5-4;
							$item.css({
								width: width,
								height: height
							});
						});
						return columnWidth;
					},
					isotope = function () {
						$container.isotope({
							resizable: false,
							itemSelector: '.item',
							masonry: {
								columnWidth: colWidth(),
								gutterWidth: 4
							}
						});
					};
				isotope();
				$(window).smartresize(isotope);
			}(jQuery));
		</script>
	</body>