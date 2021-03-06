<?php
/*
Template Name: Fullwidth
*/

get_header();
?>
    <?if(!is_front_page()):?>
    <style>
        .site-content{
            padding-top: 0;
            background: #fff;
        }
        .page-header{
            padding-bottom: 0;
            padding-top: 125px;
            background: #fff;

        }
    </style>
    <?endif;?>
    <?if(is_wishlist()):?>
    <style>
        .page-header{
            margin-bottom: 0;
        }
    </style>
    <?endif;?>
<div id="primary" class="content-area fullwidth">
	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
