<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
/* Template Name: Blog */
get_header(); ?>

		<main id="main primary" class="site-main  col-sm-12 col-md-12 col-lg-8" role="main">
            <section class="content-area" >
                <div class="container ">
                    <div class="row justify-content-area ">
						<div class="col">
							<?php
	                		if ( have_posts() ) :?>
	                				<header class="entry-header">
	                					<h1 class="entry-title screen-reader-text"><?php single_post_title(); ?></h1>
	                				</header>

	                			<?php


	                			/* Start the Loop */
	                			while ( have_posts() ) : the_post();

	                				/*
	                				 * Include the Post-Format-specific template for the content.
	                				 * If you want to override this in a child theme, then include a file
	                				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	                				 */
	                				get_template_part( 'template-parts/content',"post");

	                			endwhile;

	                			the_posts_navigation();

	                		else :

	                			get_template_part( 'template-parts/content', 'none' );

	                		endif; ?>
						</div>
                    </div>

                </div>

            </section><!-- #primary -->
		</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
