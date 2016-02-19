<?php while ( have_posts() ) : the_post(); ?>

<div class="entry-meta">
	<div class="container">
		<?php ultra_posted_on(); ?>
	</div><!-- .container -->	
</div><!-- .entry-meta -->		

<div class="container">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php get_template_part( 'content', 'book' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

			<div class="photo-list-link">
				<p><a href="/step-by-step-photo-guide/" target="_blank">Click here for a step-by-step guid on collecting photos for this book. (Opens in new window.)</a></p>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .container -->