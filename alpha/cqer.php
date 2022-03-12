<?php
/**
* Template Name: Custom Query1
*/

get_header();
get_template_part( 'hero' );
$pagnaton = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$poscount = array( 31, 21, 1, 28, 25, 37, 41, 48 );
$postperpage = 2;
$postttt = get_posts( array(
    'post__in' => $poscount,
    'order_by' =>  'post__in',
    'posts_per_page' => $postperpage,
    'paged' => $pagnaton
) );
foreach ( $postttt as $post ) {
    setup_postdata( $post );
    ?>
    <h1 style = 'text-align: center;'><a href = '<?php the_permalink(); ?>'><?php the_title();
    ?></a></h1>
    <?php
}
wp_reset_postdata();

?>
<div class = 'p' style = 'text-align: center;'>
<?php
echo paginate_links( array(
    'total' => ceil( count( $poscount )/$postperpage ),

) );
?>
</div>

<?php

get_footer();
?>