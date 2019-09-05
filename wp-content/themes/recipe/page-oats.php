<?php

get_header();

if(have_posts()):
	while(have_posts()):the_post(); 

	get_template_part('content');

	endwhile;
	else:
		echo '<h2>No post fond </h2>';
	endif;
	get_footer();

?>