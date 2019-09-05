<?php

get_header();

if(have_posts()):
	while(have_posts()):the_post(); ?>
		<article class="post">
		<?php 
		global $post;
		$args = array(
			'child_of' => $post->ID,
			'title_li' => ''
		);	
		wp_list_pages($args);
		?>
		<h2><?php the_title(); ?></h2>
		<p><?php the_content(); ?> </p>
		</article>
	<?php
	endwhile;
	
	else:
		echo '<h2>No post fond </h2>';
	endif;

get_footer();

?>