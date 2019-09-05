<?php

get_header(); ?>
<p>Veg Category </p>
<?php

	$vegPosts = new WP_Query ('cat=4&orderby=title&order=ASC');
	if($vegPosts->have_posts()):
		while($vegPosts->have_posts()):$vegPosts->the_post(); ?>

			<h2> <?php the_title(); ?> </h2>
		<?php
	endwhile;
	else: 
		echo "No veg category post found";
	endif;
	wp_reset_postdata();



if(have_posts()):
	while(have_posts()):the_post(); 
	get_template_part('content');
	endwhile;
	// previous_posts_link();
	// next_posts_link();
	// echo paginate_links(array(
	// 	'total' => $vegPosts->max_num_pages
	// ));
	echo paginate_links();
	else:
		echo '<h2>No post fond </h2>';
	endif;
	get_footer();

?>