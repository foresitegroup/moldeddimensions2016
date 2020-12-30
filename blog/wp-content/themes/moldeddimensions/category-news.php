<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
    <h1 class="page-title screen-reader-text">MD in the News</h1>
		<?php if (have_posts()): ?>
			<?php if (is_home() && !is_front_page()): ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			$counter = 1;

			// Start the loop.
			while (have_posts()) : the_post();
        if ($counter > 1) echo "<hr>\n";
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
					<header class="entry-header<?php if (is_single()) : echo " blog-single"; endif; ?>">
						<?php
						if (has_post_thumbnail()) the_post_thumbnail('full', array('class' => 'one-fourth-right'));

						the_title('<h2>', '</h2>');

						if (isset($post->newsblog_subtitle)) echo "<em>".$post->newsblog_subtitle."</em><br>\n";
						?>

						<strong>
							<?php
							if (isset($post->newsblog_byline)) echo "By ".$post->newsblog_byline." | ";
							echo get_the_date();
							?>
						</strong>
					</header>

					<div class="entry-content">
						<?php
						the_content('');

						$TheLink = (isset($post->newsblog_link)) ? $post->newsblog_link : get_the_permalink();
						?>

						<a href="<?php echo $TheLink; ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</article>

				<?php
				$counter++;

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text' => __( '<i class="fa fa-angle-double-left" aria-hidden="true"></i>', 'twentysixteen' ),
				'next_text'  => __( '<i class="fa fa-angle-double-right" aria-hidden="true"></i>', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part('content', 'none');

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
