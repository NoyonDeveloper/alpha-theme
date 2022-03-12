<?php get_header();
?>

<body <?php body_class();
?>>

<div class = 'continer'>
<?php get_template_part( 'hero' );
?>

<div class = 'searchh'>
<?php
if ( !have_posts() ) {
    _e( 'Search Not Found', 'alpha' );
}
?>
</div>

<?php
while( have_posts() ) {
    the_post();
    get_template_part( 'post-format/content', get_post_format() );
}
?>
</div>

<?php get_footer();
?>