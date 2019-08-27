<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leto
 */

?>

			</div>
		</div>
	</div><!-- #content -->

	<?php do_action( 'leto_before_footer' ); ?>

	<footer id="colophon" class="site-footer">
        <div class="footer">
            <div class="contact">
                <div class="media footer_li">
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <div class="number">
                        <p>+38 044 369 59 53</p>
                    </div>
                </div>
            </div>

            <div class="center_footer footer_li">
                <div class="search-container">
<!--                    <div class="search-icon-btn">-->
<!--                        <img src="img/Search.png" alt="">-->
<!--                    </div>-->
<!--                    <div class="search-input">-->
<!--                        <input type="search" class="search-bar" placeholder="Search...">-->
<!--                    </div>-->
	                <?php
	                $enable_search = get_theme_mod( 'leto_enable_search', 1 );
	                if ( $enable_search ) : ?>
                        <div class="nav-link-search" style="text-align: center">
                            <a href="#" class="toggle-search-box">
                                <i class="ion-ios-search" style="font-size: 33px;"></i>
                            </a>
                        </div>
	                <?php endif; ?>
                </div>
                <div class="star-container">
	                <?=do_shortcode('[ti_wishlist_products_counter]')?>
                </div>

	            <?php $cart_content = WC()->cart->cart_contents_count; ?>

                <div class="nav-link-cart" style="width: 60px;">
                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="header-cart-link">
                        <i class="ion-bag" style="    font-size: 33px;"></i>
                        <span class="screen-reader-text"><?php esc_html_e( 'Cart', 'leto' ); ?></span>
                        <span class="cart-count">(<?php echo intval($cart_content); ?>)</span>
                    </a>
                </div>
            </div>



            <div class="right_footer">  <a class=" footer_li " href="">КОМПАНИЯ</a>
                <a class=" footer_li " href="">КОНТАКТИ</a>
                <a class=" footer_li " href="">СОТРУДНИЧЕСТВО</a>
                <div class="footer_li ruua">
	                <?dynamic_sidebar('footer-4')?>
                </div>
            </div>
        </div>
		<?php
        //do_action( 'leto_footer' );
        ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php do_action( 'leto_after_page' ); ?>

<?php wp_footer(); ?>

</body>
</html>
