<?php
/*
Template Name: Template - Home
*/
?>
<?php get_header(); ?>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/draggabilly.pkgd.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.65656.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script-frontpage.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/anystretch.js"></script>
		<script>
		    $.anystretch("<?php echo(types_render_field( "fullscreen-image", array( ‘output’ => ‘html’ ) )); ?>", {speed: 150});
	    </script>
	</head>

	<body>
		</div>
		<video autoplay loop id="bgvid" class="video">
		  <source src="<?php echo(types_render_field( "video-background", array( ‘output’ => ‘html’ ) )); ?>" type="video/mp4">
		  <source src="<?php echo(types_render_field( "firefox-video", array( ‘output’ => ‘html’ ) )); ?>" type="application/ogg">
		</video>
		<div class="panel_fold">
			<div class="panel_logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/qublogo.png" alt="">
			</div>
			<div class="panel_social">
				<ul>
					<li><a href="http://instagram.com/qubtv">instagram</a></li>
					<li><a href="http://www.facebook.com/QUBtv">facebook</a></li>
					<li><a href="http://twitter.com/QUBtv">twitter</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</div>
			<?php get_sidebar(); ?>
		</div>
		<div class="logo draggable">
			<img src="<?php echo(types_render_field( "qub-logo", array( "output" => "raw" ) )); ?>" alt="" class="drag">
		</div>
		<div class="ad1 draggable">
			<?php echo(types_render_field( "ad-1-image", array( "output" => "html" ) )); ?>
		</div>
		<div class="window4 draggable">
			<div class="window_top4 drag">
				<div class="window_close4 window_icon"><span class="typcn typcn-times"><span></div>
				<div class="window_maximize4 window_icon"><span class="typcn typcn-plus"><span></div>
				<div class="window_minimize4 window_icon"><span class="typcn typcn-minus"><span></div>
			</div>
			<div class="window_content4 drag">
				<div class="window_content_thumbnail">
					<?php echo(types_render_field( "window-4-image" )); ?>
				</div>
				<h1><a href="<?php echo(types_render_field( "window-4-link", array( "output" => "raw" ) )); ?>"><?php echo(types_render_field( "window-4-title" )); ?></a></h1>
				<p><?php echo(types_render_field( "window-4-excerpt" )); ?></p>
				<div class="window_content_buttons">
					<a href="<?php echo(types_render_field( "window-4-link", array( "output" => "raw" ) )); ?>">continue reading</a>
				</div>
			</div>
		</div>
		<div class="window3 draggable">
			<div class="window_top3 drag">
				<div class="window_close3 window_icon"><span class="typcn typcn-times"><span></div>
				<div class="window_maximize3 window_icon"><span class="typcn typcn-plus"><span></div>
				<div class="window_minimize3 window_icon"><span class="typcn typcn-minus"><span></div>
			</div>
			<div class="window_content3 drag">
				<div class="window_content_thumbnail">
					<?php echo(types_render_field( "window-3-image" )); ?>
				</div>
				<h1><a href="<?php echo(types_render_field( "window-3-link", array( "output" => "raw" ) )); ?>"><?php echo(types_render_field( "window-3-title" )); ?></a></h1>
				<p><?php echo(types_render_field( "window-3-excerpt" )); ?></p>
				<div class="window_content_buttons">
					<a href="<?php echo(types_render_field( "window-3-link", array( "output" => "raw" ) )); ?>">continue reading</a>
				</div>
			</div>
		</div>
		<div class="window2 draggable">
			<div class="window_top2 drag">
				<div class="window_close2 window_icon"><span class="typcn typcn-times"><span></div>
				<div class="window_maximize2 window_icon"><span class="typcn typcn-plus"><span></div>
				<div class="window_minimize2 window_icon"><span class="typcn typcn-minus"><span></div>
			</div>
			<div class="window_content2 drag">
				<div class="window_content_thumbnail">
					<?php echo(types_render_field( "window-2-image" )); ?>
				</div>
				<h1><a href="<?php echo(types_render_field( "window-3-link", array( "output" => "raw" ) )); ?>"><?php echo(types_render_field( "window-2-title" )); ?></a></h1>
				<p><?php echo(types_render_field( "window-2-excerpt" )); ?></p>
				<div class="window_content_buttons">
					<a href="<?php echo(types_render_field( "window-2-link", array( "output" => "raw" ) )); ?>">continue reading</a>
				</div>
			</div>
		</div>
		<div class="window draggable">
			<div class="window_top drag">
				<div class="window_close window_icon"><span class="typcn typcn-times"><span></div>
				<div class="window_maximize window_icon"><span class="typcn typcn-plus"><span></div>
				<div class="window_minimize window_icon"><span class="typcn typcn-minus"><span></div>
			</div>
			<div class="window_content drag">
				<div class="window_content_thumbnail">
					<?php echo(types_render_field( "window-1-image" )); ?>
				</div>
				<h1><a href="<?php echo(types_render_field( "window-3-link", array( "output" => "raw" ) )); ?>"><?php echo(types_render_field( "window-1-title" )); ?></a></h1>
				<p><?php echo(types_render_field( "window-1-excerpt" )); ?></p>
				<div class="window_content_buttons">
					<a href="<?php echo(types_render_field( "window-1-link", array( "output" => "raw" ) )); ?>">continue reading</a>
				</div>
			</div>
		</div>
		<script src="js/modernizr.custom.65656.js"></script>
	    <script>
		//modernizr touch
		if(Modernizr.touch){
		      $( "video" ).remove();
		} else {
		      $( "video" ).add();
		}
	    </script>
	</body>
</html>