<?php get_header();
?>

<body <?php body_class();
?>>

<div class = 'continer'>
<?php get_template_part( 'hero' );
?>

<?php
while( have_posts() ) {
    the_post();
    get_template_part( 'post-format/content', get_post_format() );
}
?>
</div>
<div class="post-pag">
    <?php
    the_posts_pagination( array(
        'screen_reader_text' => ' ',
        'prev_text' => 'preview',
        'next_text' => 'nextpage'
    ));
    ?>
</div>

<?php get_footer();
?>