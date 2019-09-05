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
	<p><?php echo get_the_excerpt();?> 
	<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
	</p>
	
</article>