<?php

get_header();

if(have_posts()):
	while(have_posts()):the_post(); ?>
		 <article class="post">
		<h2 class="post-title"><?php the_title(); ?></h2>
		
		</article> 
	<?php
	endwhile;
	
	else:
		echo '<h2>No post fond </h2>';
	endif;

get_footer();

?>