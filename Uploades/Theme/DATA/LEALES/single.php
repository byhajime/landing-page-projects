<?php get_header(); ?>


<section>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} ?>
</section>


</body>
<?php get_footer(); ?>