<?php get_header(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script-channelpage.js"></script>
		<?php wp_head(); ?>
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
		
		<div class="qub_channel qub_channel_longer">
			<figure class="item item-w2 item-h9">
				<h3>QUBTV Blog</h3>
				<p class="channel_description">Where you’ll find inside scoop, behind the scenes photographs, interviews, or just some random things we’d like to share.</p>
			</figure>
			<figure class="item item-w6 item-h8 qub_box qub_box_blog" style="border: none!important;">
				<div class="qub_box_video_container">
				<?php if (have_posts()) : ?>
    			<?php while (have_posts()) : the_post(); ?>
					<h1><?php echo get_the_title(); ?></h3>
					<?php the_content(); ?>
					<?php get_template_part( 'content', 'share' ); ?>
				<?php endwhile; ?>
			    <?php else : ?>
				<?php endif; ?>
			</figure>
		</div>
		<?php get_footer(); ?>


		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
		
		<script>
			$(document).ready(function(){
    		$(".qub_box_video_container").fitVids();
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
							columnNum  = 8;
						} else if (w > 600) {
							columnNum  = 8;
						} else if (w > 300) {
							columnNum  = 8;
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
								//height: height
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
		<?php wp_footer(); ?>
	</body>