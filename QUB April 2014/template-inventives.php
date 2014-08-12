<?php
/*
Template Name: Template - The Inventives
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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/channel-ti.png" alt="" class="channel">
				<p class="channel_description">Each episode of “The Inventives” features influential individual(s) behind local businesses or communities whose passion has made an impact. Local business and communities featured are from various fields, included but not limited to: fashion, culinary, lifestyle, music, and art. Viewers are treated to how these people build their business, their philosophies, views and goals, and also the struggles and challenges they are facing along the road of entrepreneurship.</p>
			</figure>
			<figure class="item item-w4 item-h5 qub_box featured">
				<?php
		          $args=array(
		              'post_type' => 'the-inventives',
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
	              'post_type' => 'the-inventives',
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