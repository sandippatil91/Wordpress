<?php
get_header();
?>
 <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                <div class="single-page-post-heading">
                <h1 style="padding: 29px 0px 15px;font-size: 25px;line-height: 25px;color: #000;"><?php the_title(); ?></h1>
                </div>
                <div class="content-here">
                <p><?php the_post_thumbnail('banner_image');?></p>
                <p><?php  the_content(); ?> </p>
                <h3 style="font-size:22px;text-decoration: underline;">Recipe Details</h3>
                <p><strong>*</strong> Recipe Servings : <?php 
                if(get_field('recipe_servings') && get_field('recipe_servings') != '') echo get_field('recipe_servings'); else echo '-'; ?></p>
                <p><strong>*</strong> Prep Time : <?php if(get_field('prep_time') && get_field('prep_time') != '') echo get_field('prep_time'); else echo '-'; ?></p>
                <p><strong>*</strong> Cook Time : <?php if(get_field('cook_time') && get_field('cook_time') != '') echo get_field('cook_time'); else echo '-'; ?></p>
                <p><strong>*</strong> Total Cook Time : <?php if(get_field('total_cook_time') && get_field('total_cook_time') != '') echo get_field('total_cook_time'); else echo '-';?></p>
                <p><strong>*</strong> Difficulty Level : <?php if(get_field('difficulty_level') && get_field('difficulty_level') != '') echo get_field('difficulty_level'); else echo '-'; ?></p>
                <p><strong>*</strong> Chef : <?php if(get_field('chef') && get_field('chef') != '') echo get_field('chef'); else echo '-'; ?></p>
                </div>
                <div class="comment-section-here">
              
                </div>
                </div>

<?php endwhile; 
get_footer();
?>






