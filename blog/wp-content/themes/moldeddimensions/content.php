<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
	<header class="entry-header<?php if ( is_single() ) : echo " blog-single"; endif; ?>">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<em style="font-size: 90%;">Posted on <?php echo get_the_date(); ?> by <?php echo get_the_author(); ?></em>
	</header>

	<div class="entry-content">
		<?php the_content( __( ' Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
	</div>

	<footer class="entry-footer">
		Posted in <?php echo the_category(', '); ?><br>
		<?php echo the_tags(); ?>
    
    <?php
		if ( is_single() ) :
			// Previous/next post navigation.
			the_post_navigation( array(
				'prev_text'          => __( '<i class="fa fa-angle-double-left" aria-hidden="true"></i>', 'twentysixteen' ),
				'next_text'          => __( '<i class="fa fa-angle-double-right" aria-hidden="true"></i>', 'twentysixteen' )
			) );
		endif;
		?>
	</footer><!-- .entry-footer -->
</article>