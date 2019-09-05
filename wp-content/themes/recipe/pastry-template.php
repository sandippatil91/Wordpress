<?php 
/*
Template Name: Pastry list
*/

get_header();

$arg = array(
	'post_type' => 'pastry',
	'post_per_page' => 5,
	'orderby' => 'title',
	'order' => 'ASC'
);?>

<div class="container">
<div class="row mt-5 mb-5">

<?php

$pastry_query = new WP_Query($arg);

if($pastry_query->have_posts()):
	while($pastry_query->have_posts()):$pastry_query->the_post();
	$image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
	?>

	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center pb-4">
		<div class="box">
		<img src="<?php echo $image[0]; ?>" class="mb-3 pastry-img">
		</div>
		<p class="text-center pt-2"><a href="<?php the_permalink($post->ID); ?>" class="pastry-title"><?php the_title(); ?></a></p>

	</div> 

	<?php
	endwhile;
	wp_reset_postdata(); 
else:
	echo "No posts found";

endif;

?>
</div>
</div>	
<?php
get_footer();

?>