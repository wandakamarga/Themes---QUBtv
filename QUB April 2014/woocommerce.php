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
		<div class="qub_box_shoptitle">
			<h3><a href="http://qub-tv.com/?page_id=126">QUBTV STORE</a></h3>
			<!--mini cart-->
			<div class="qub_cart">
			<h4>shopping cart</h4>
			<?php if ( sizeof( WC()->cart->get_cart() ) > 0 ) : ?>

				<?php
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
						$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

						if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

							$product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
							$thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
							$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );

							?>
							<li>
								<a href="<?php echo get_permalink( $product_id ); ?>">
								<?php echo $thumbnail; ?>
								</a>
								<br>
								<?php echo $product_name; ?>
								<br>
								<?php echo WC()->cart->get_item_data( $cart_item ); ?>
								<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span><br>', $cart_item, $cart_item_key ); ?>
							</li>
							<?php
						}
					}
				?>
			<?php else : ?>

				<li class="empty"><?php _e( 'No products in the cart.', 'woocommerce' ); ?></li>

			<?php endif; ?>
			<p class="channel_description">
			<span>Your Cart Total :</span>	
			<br>
			<span><?php wc_cart_totals_subtotal_html(); ?></span>	
			</p>
			<a href="http://qub-tv.com/?page_id=9" class="checout">Checkout</a>
			</div>
			<!--end mini cart-->
		</div>
		<div class="qub_box_shopcontent">
			<?php woocommerce_content(); ?>
		</div>

		<?php wp_footer(); ?>
		<?php get_footer(); ?>
	</body>