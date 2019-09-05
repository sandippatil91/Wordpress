
<form method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="text" name="s" id="search" value="" placeholder="<?php the_search_query(); ?>"/>
    <input type="image" class="search-submit" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>

