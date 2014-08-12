<?php
/*
Template Name: Template - Space Interrupted
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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/channel-si.png" alt="" class="channel">
				<p class="channel_description">Features musicians playing at unusual places. The aim is to offer an alternatives point of view for audiences to enjoy intimate music show apart from conservative TV shows, and also to documenting the local music scene.
In each series different musicians will choose one unusual place (not stage or music studio) to perform. QUBtv will film the performance, (and at some moments) the interaction between the artists with unexpected audiences.</p>
			</figure>
			<figure class="item item-w4 item-h5 qub_box featured">
				<?php
		          $args=array(
		              'post_type' => 'space-interrupted',
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
	              'post_type' => 'space-interrupted',
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