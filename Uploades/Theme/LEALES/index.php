<?php get_header(); ?>


<section>
	

<?php 	
	$a = get_field( "pageID", 1567 );
	query_posts('page_id=' . $a);
	
	if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
	}
	wp_reset_query();
?>
</section>


<?php get_footer(); ?>