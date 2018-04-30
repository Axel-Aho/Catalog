<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
				<article class="post">
					<h3><a ><?php the_title(); ?></a></h3>
					<small><?php the_category(); ?></small>

					<p><?php the_content(); ?></p>
				</article>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();

?>
