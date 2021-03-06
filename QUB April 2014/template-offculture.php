<?php
/*
Template Name: Template - Off Culture
*/
?>
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
			<figure class="item item-w2 item-h5">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/channel-oc.png" alt="" class="channel">
				<p class="channel_description">On each episode we ask our friend (or our crew) to choose a simple topic, hit the street and discuss it with random strangers. Watch how people define urban culture with their own ideas and quirks.</p>
			</figure>
			<figure class="item item-w4 item-h5 qub_box featured">
				<?php
		          $args=array(
		              'post_type' => 'offculture',
		              'post_status' => 'publish',
		              'order' => 'DSC',
						'posts_per_page' => 1,
		          );
		          $my_query = null;
		          $my_query = new WP_Query($args);
		          if( $my_query->have_posts() ) {
		          while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<div class="qub_box_video_container">
				<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a> 
				<a class="more" href="<?php echo get_permalink(); ?>">Read More</a>
				</div>
				<?php endwhile; } wp_reset_query(); ?>
			</figure>
			<?php
	          $args=array(
	              'post_type' => 'offculture',
	              'post_status' => 'publish',
	              'order' => 'DSC',
	              'offset' => '1',
	          );
	          $my_query = null;
	          $my_query = new WP_Query($args);
	          if( $my_query->have_posts() ) {
	          while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<figure class="item item-w2 item-h5 qub_box">
				<div class="qub_box_video_container">
				<a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?>
				<h1 class="fit"><?php echo get_the_title(); ?></h1></a>
				<p><?php echo get_the_excerpt(); ?></p>
				<a class="more" href="<?php echo get_permalink(); ?>">Read More</a>
				</div>
			</figure>
			<?php endwhile; } wp_reset_query(); ?>
		</div>
		<?php get_footer(); ?>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fitvids.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/fluidgrid.js"></script>
	</body>