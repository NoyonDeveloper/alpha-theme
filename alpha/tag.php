<?php get_header();
?>

<?php get_template_part( 'hero' );
?>
<h1>Tag Under: <?php single_tag_title();
?></h1>

<?php
while( have_posts() ) : the_post();
?>

<h2><a href = '<?php the_permalink(); ?>'><?php the_title();
?></a></h2>

<?php endwhile;
?>

<?php get_footer();
?>