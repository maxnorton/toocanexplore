<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-meta">
	<div class="container">
		<?php ultra_posted_on(); ?>
	</div><!-- .container -->	
</div><!-- .entry-meta -->		

<div class="container">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'single' ); ?>

 			<?php if ( siteorigin_setting( 'navigation_post_nav' ) ) the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .container -->