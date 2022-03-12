<?php get_header();
?>

<?php get_template_part( 'hero' );
?>
<h1>Date post:
<?php
if ( is_month() ) {
    echo get_query_var( 'monthnum' );
}
?>
</h1>

<?php while( have_posts() ):the_post();
?>

<h2><a href = '<?php the_permalink(); ?>'><?php the_title();
?></a></h2>

<?php endwhile;
?>

<?php get_footer();
?>