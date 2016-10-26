<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @package quadrosh
 * @subpackage 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<!-- хранение -->
					<?php if (is_page(13))  { include __DIR__ . '/section_hran.php';} ?> 
					<!-- доставка -->
					<?php if (is_page(11))  { include __DIR__ . '/section_delivery.php';} ?> 
					<!-- поставки опт -->
					<?php if (is_page(18))  { include __DIR__ . '/section_contract.php';} ?> 
					<!-- о компании -->
					<?php if (is_page(8))  { include __DIR__ . '/section_about.php';} ?>	
					

					<footer class="entry-meta">

						
						

					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>