<?php

get_header();

if(have_posts()):
	while(have_posts()):the_post(); ?>
		<h2>
			<?php 
			if(is_category()){
				single_cat_title();
			}elseif(is_author()){
				// the_post();
				// echo "Author Archive: ".get_the_author();
				// rewind_posts();
			}elseif(is_tag()){
				single_tag_title();
			}elseif(is_month()){
				echo "This is month". get_the_date('F Y');
			}elseif(is_day()){
				echo "This is day". get_the_date();
			}elseif(is_year()){
				echo "This is year". get_the_date('Y');
			}else{
				//echo "This is Archive";
			}

			?>
		</h2>

		<article class="post">
		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
		 <p><?php the_time('F jS, Y g:i a'); ?> | By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?> </a> Posted in 
		 	<?php
		 		$categories = get_the_category();
		 		$seperator = ", ";
		 		$output = "";
		 		if($categories){
		 			foreach($categories as $category){
			 		$output .= '<a href="'. get_category_link($category->term_id).'">'. $category->cat_name .'</a>'. $seperator;
			 		}
		 		}
		 		echo trim($output, $seperator);
		 	?>
		 	</p> 
		<p><?php the_content(); ?> </p>
		</article>
	<?php
	endwhile;
	
	else:
		echo '<h2>No post fond </h2>';
	endif;

get_footer();

?>