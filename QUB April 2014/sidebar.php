<style>
	/* The container wrapping ul.dropdown */
	#navwrap {
		float:left;
		/*font-family: "Conv_MODENINE";*/
		font-size: 18px;
		padding: 10px;
		font-family: 'Friz Quadrata Std' !important;
		-webkit-transition: none !important;
	  -moz-transition: none !important;
	  -o-transition: none !important;
	  -ms-transition: none !important;
	  transition: none !important;
	}

	/* Top level Unordered list */
	ul.dropdown {
		list-style:none;
		float:left;
		padding: 0 10px;
		z-index: 499;
	}

	ul.dropdown li{
		float:left; /* makes horiz list */
		position:relative; /* hey Submenu ULs, appear below! */
		border: 2px solid rgba(0,0,0,0);
	}

	ul.dropdown a {
		padding:12px; /*space the items, occupy entire height too.*/
		color: black;
		text-decoration:none;
	}
	ul.dropdown > li > a {
		height: 0;
		border-bottom: 10px solid rgba(0,0,0,0);
		padding-bottom: 10px;
		/*text-transform: uppercase;*/
		-webkit-transition-duration: none !important;
	  -moz-transition: none !important;
	  -o-transition: none !important;
	  -ms-transition: none !important;
	  transition: none !important;
	}

	/* Style the link hover */
	ul.dropdown li:hover {
		background: white;
		color: black;
		border: 2px solid black;
		-webkit-transition: none !important;
	  -moz-transition: none !important;
	  -o-transition: none !important;
	  -ms-transition: none !important;
	  transition: none !important;
	}
	ul.dropdown li:hover a {
		border-bottom: 10px solid black;
	}

	/* Displays the link as blocks. */
	ul.dropdown li ul a {
		display:block;
	}

	/* sub menus!!  */

	ul.dropdown ul {
		list-style: none;
		margin:0; /* Appear just below the hovering list */
		padding:0;
		width:200px; /* specify the width. */
		position:absolute; /* needed */
		z-index:500; /* specify the order */
	}

	ul.dropdown li ul {
		top: 34px; /* Positioning:Calc with top level horz list height */
		left: -2px;
		-moz-box-shadow:0 2px 10px #000; /* CSS 3 */
	}

	ul.dropdown ul ul {
		top:0;
		left:100%; /* Position the sub menus to right. */
	}

	ul.dropdown ul li {
		float:none; /* umm.. Appear below the previous one. mmkay? */
	}

	/* Drop Down! */

	/* Hide all the dropdowns (submenus) */
	ul.dropdown ul,
	ul.dropdown li:hover ul ul,
	ul.dropdown ul li:hover ul ul
	{ display: none; }

	/* Display the submenus only when li are hovered */
	ul.dropdown li:hover ul,
	ul.dropdown ul li:hover ul ,
	ul.dropdown ul li ul li:hover ul
	{ display: block;}

	ul.dropdown li * a:hover {
		/* Change color of links when hovered */
		
	}
	.sub-menu {
		border: 2px solid black;
	}
	.sub-menu li {
		background: white;
	}
	.sub-menu > li > a {
		border: none !important;
		height: auto;
		/*text-transform: lowercase !important;*/
		-webkit-transition: none !important;
	  -moz-transition: none !important;
	  -o-transition: none !important;
	  -ms-transition: none !important;
	  transition: none !important;
	}
	.sub-menu li:hover a {
		background: black !important;
		color: white !important;
	}
	
	#menu-item-788 a:hover {
		-webkit-transition: none !important;
	  -moz-transition: none !important;
	  -o-transition: none !important;
	  -ms-transition: none !important;
	  transition: none !important;
	}
	#s {
		border-radius: 24px;
		border: 2px solid black;
		padding: 5px;
		background-image: url('sbicon.png');
		background-position: 50% 95%;
		background-repeat: no-repeat;
		background-size: 16px;
	}
	.nav-menu-collapse {
		display: none;
	  position: absolute;
	  top: 16px;
	  right: 42px;
	  opacity: 0.5;
	  z-index: 499;
	}
	.nav-menu-collapse:hover {
		opacity: 1;
	}
	.nav-menu-collapse:before {
	  content: "";
	  position: absolute;
	  top: 0.25em;
	  left: 0;
	  width: 1.5em;
	  height: 0.250em;
	  border-top: 0.750em double #000;
	  border-bottom: 0.250em solid #000;
	}
@media screen and (max-width: 960px) {
	#navwrap {
		display: none;
		position: absolute;
		top: 0;
		right: 0;
		max-width: 240px;
	}
	.panel #navwrap {
		margin-top: 0;
	}
	#search {
		display: none;
	}
	.nav-menu-collapse {
		display: block !important;
	}
	#menu-navigation-menu {
		background: white;
		border: 2px solid black;
		padding: 20px;
	}
	#menu-navigation-menu > li {
		display: inline-block;
		width: 100%;
		text-align: center;
	}
}
@media screen and (max-width: 480px) {
	.qub_channel.isotope > figure:first-child {
		width: 100% !important;
	}
}
</style>
<?php 
	wp_nav_menu( array(
		'menu_class' => 'dropdown', //Adding the class for dropdowns
		'container_id' => 'navwrap', //Add CSS ID to the containter that wraps the menu.
		)
	);
?>

<div class="nav-menu-collapse"></div>
<ul id="search" style="float: right">
	<li>
		<form role="search" method="get" id="searchform" class="searchform" action="http://qub-tv.com" style="margin: 15px">
			<div>
				<input placeholder="Search..." name="s" id="s" type="text">
			</div>
		</form>
	</li>
</ul>

<script>
	$(document).ready( function(){
		$('.nav-menu-collapse').on('click', function(){
			$('#navwrap').fadeToggle();
		});
	});
</script>