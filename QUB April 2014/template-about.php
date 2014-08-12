<?php
/*
	Template Name: Template - About
*/
?>

	<?php get_header(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script-channelpage.js"></script>
		<style>
			.item {
				-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
					 -moz-box-sizing: border-box; /* Firefox, other Gecko */
								box-sizing: border-box; /* Opera/IE 8+ */
				overflow: auto;
				margin: 0 !important;
				padding: 0 !important;
				background: white;
				cursor: move;
				height: auto;
			}

			.qub_box {
				border: 3px solid black !important;
			}
			.qub_box p {
				display: block !important;
				padding: 10px !important;
				font-size: 0.75em;
			}
			.photo-container {
				height: 50%;
				overflow: hidden;
			}
		</style>
	</head>
	<body>
		<!-- Navigation Bar -->
		<div class="panel">
			<div class="panel_logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qublogo.png" alt="">
				</a>
			</div>
			<?php get_sidebar(); ?>
		</div> <!-- End of Navigation Bar -->

		<!-- About Page Title -->
		<div class="qub_channel">
			<figure class="item item-w2 item-h8">
				<h3>About</h3>
				<p class="channel_description">QUBtv is an online television network produces short-form videos, available for free via our website: qub-tv.com. The website spans topics such as cutting-edge entertainment, culture, interview, lifestyle, and everything in between. We believes that good information can be entertaining, delivered in short time and easy to digest.</p>
			</figure>
			<!-- Query for Owner Profile Post -->
			<?php
				$args = array(
					'post_type' => 'owner-profile',
					'post_status' => 'publish',
					'order' => 'DSC'
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post();
			?>
				<figure class="item item-w4 item-h8 qub_box">
					<div class="qub_box_video_container">
						<div class="photo-container">
							<?php echo types_render_field("owner-photo") ?>
						</div>
						<h1><?php echo types_render_field("owner-name") ?></h1>
						<p><?php echo types_render_field("owner-bio") ?></p>
					</div>
				</figure>

			<?php endwhile; } wp_reset_query(); ?>
			<!-- Query for Team Profile Post -->
			<?php
				$args = array(
					'post_type' => 'team-profile',
					'post_status' => 'publish',
					'order' => 'DSC'
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post();
			?>
				<figure class="item item-w2 item-h8 qub_box">
					<div class="qub_box_video_container">
						<?php echo types_render_field("team-photo") ?>
						<h1><?php echo types_render_field("team-name") ?></h1>
						<p><?php echo types_render_field("team-bio") ?></p>
					</div>
				</figure>

			<?php endwhile; } wp_reset_query(); ?>
		<!-- Query for About Photograph Post -->
			<?php
				$args = array(
					'post_type' => 'about-photograph',
					'post_status' => 'publish',
					'order' => 'DSC'
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post();
			?>
				<figure class="item item-w2 item-h4 qub_box">
					<?php echo types_render_field("photograph") ?>
				</figure>

			<?php endwhile; } wp_reset_query(); ?>
		</div>
		<?php get_footer(); ?>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/packery.pkgd.min.js"></script>
		<script>
			$(document).ready(function(){
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
								columnNum  = 4;
							} else if (w > 300) {
								columnNum  = 4;
							} else if (w > 200) {
								columnNum  = 4;
							}
							columnWidth = Math.floor(w/columnNum);
							$container.find('.item').each(function() {
								var $item = $(this),
									multiplier_w = $item.attr('class').match(/item-w(\d)/),
									multiplier_h = $item.attr('class').match(/item-h(\d)/),
									width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
									height = multiplier_h ? columnWidth*multiplier_h[1]*0.5 : columnWidth*0.5;
								$item.css({
									width: width,
									height: height
								});
							});
							return columnWidth;
						},
						initPackery = function () {
							$container.packery({
								itemSelector: '.item',
								columnWidth: colWidth(),
								gutter: 0
							});
							// Get item elements, jQuery-ify them
							var $itemElems = $( $container.packery('getItemElements') );
							// Make item elements draggable
							$itemElems.draggable();
							// Bind draggable events to Packery
							$container.packery( 'bindUIDraggableEvents', $itemElems );
						};
					initPackery();
					$(window).resize(initPackery);
				}(jQuery));
			});
		</script>
	</body>

</html>