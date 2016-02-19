<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ultra
 */

get_header(); ?>

	<header class="page-header">
		<div class="container">
			<div class="title-wrapper">
				<h1 class="page-title">
				<?php 
					$archive_title = get_the_archive_title(); 
					$archive_title_clean = preg_replace('/[A-Za-z]+\:\s/', '', $archive_title);
					echo $archive_title_clean;
					the_archive_description( '<div class="taxonomy-description">', '</div>' ); 
				?>
				</h1>
			</div><!-- .title-wrapper --><?php ultra_breadcrumb(); ?>
		</div><!-- .container -->
	</header><!-- .page-header -->	

	<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
				<?php get_template_part( 'loops/loop-shop' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>

</div><!-- .container -->

<?php get_footer(); ?>