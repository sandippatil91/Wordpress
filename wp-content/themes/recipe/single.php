<?php

get_header();

if(have_posts()):
	while(have_posts()):the_post(); ?>
		<article class="post">
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
		 <p><?php the_time('F jS, Y g:i a'); ?> | By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?> </a> Posted in 
		 	<?php

		 		$categories = get_the_category();
		 		$seperator = ", ";
		 		$output = "";

		 		foreach($categories as $category){
		 			$output .= '<a href="'. get_category_link($category->term_id).'">'. $category->cat_name .'</a>'. $seperator;

		 		}

		 		echo trim($output, $seperator);
		 	?>

		 	</p> 
		 	<p><?php the_post_thumbnail('banner_image'); ?></p>
		<p><?php the_content(); ?> </p>
		<p><strong>Company URL:</strong>&nbsp;<?php echo get_field('company'); ?> </p>
		<p><strong>Project Brief:</strong>&nbsp;<?php echo get_field('project_brief'); ?> </p>
		<p><strong>Company Address:</strong>&nbsp;<?php echo get_field('company_address'); ?> </p>
		</article>
	<?php
	endwhile;
	
	else:
		echo '<h2>No post fond </h2>';
	endif;

get_footer();

?>