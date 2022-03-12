<?php
/**
* Template Name: wp query
*/

get_header();

get_template_part( 'hero' );
$pagnaton = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$poscount = array( 31, 21, 1, 28, 25, 37, 41, 48 );
$postperpage = 3;
$querycooo = new WP_Query( array(
    // 'category_name' => 'uncategorized',
    // 'psot__in' => $poscount,
    'posts_per_page' => $postperpage,
    'order_by' => 'post__in',
    'paged' => $pagnaton,
    // 'tax_query' => array(
    //     'relation' => 'OR',
    //     array(
    //         'taxonomy'  => 'category',
    //         'field'     => 'slug',
    //         'terms'     => array( 'uncategorized' ),
    //     ),
    //     array(
    //         'taxonomy'  => 'post_tag',
    //         'field'     => 'slug',
    //         'terms'     => array( 'spacial' ),
    //     ),
    // )

    

    // 'monthnum' => 5,
    // 'year' => 2020,
    // 'post_status' => 'published',

    /**
     * post format retrip
     */
    // 'tax_query' => array(
    //     'relation' => 'OR',
    //     array(
    //         'taxonomy' => 'post_format',
    //         'field' => 'slug',
    //         'terms' => array(
    //             'post-format-audio',
    //             'post-format-video'
    //         ),
    //         'operator' => 'NOT IN'
    //     )
    // ),

    /**
     * meta field retripe
     */
    // 'meta_query' => array(
    //     'relation' => 'AND',
    //     array(
    //         'key' => 'noyon',
    //         'value' => '1',
    //         'compare' => '='
    //     ),
    //     array(
    //         'key' => 'homepage',
    //         'value' => '1',
    //         'compare' => '='
    //     )
    // )


) );

while ( $querycooo->have_posts() ) {
    $querycooo->the_post();
    ?>
    <h1 style = 'text-align: center;'><a href = '<?php the_permalink(); ?>'><?php the_title();
    ?></a></h1>
    <?php
}
wp_reset_query();
?>
<div class = 'pagai'>
<?php
echo paginate_links( array(
    'total' => $querycooo->max_num_pages,
    'current' => $pagnaton,
    'prev_next' => false
) );
?>
</div>

<?php get_footer();
?>


/***
file include:
<?php /**
    the_content();
    if(get_post_format() == 'image') :?>
    <strong>camera Name: </strong><?php the_field('camera'); ?><br>
    <strong>Location: </strong>
    <?php $location_alpha = get_field('location');
    echo esc_html( $location_alpha );
    ?><br>
    <strong>congrlacton: </strong><?php the_field("congrlacton") ?><br>
    <strong>Random Image:</strong> 
    <?php
     $image_esc = get_field('random_image');
     $image_srccc = wp_get_attachment_image_src( $image_esc, "alphp_square");
     echo "<img src='". esc_url($image_srccc[0])."'</img>'";
    ?><br>

    <p>
        File Download: 
        <?php 
        $filess = get_field('file');
        if($filess){
            $file_url = wp_get_attachment_url($filess);
            $image_thumb = get_field("thumbnail",$filess);
            if($image_thumb){
                $image_prev = wp_get_attachment_image_src($image_thumb);
                echo "<a target='_blank' href='{$file_url}'><img src='". esc_url($image_prev[0])."'/></a>";
            }else{
                echo "<a target='_blank' href='{$file_url}'>{$file_url}</a>";
            }
        }
        ?>
    </p>


    <h1><?php _e( "Relatsion Post", "Alpha" ); ?></h1><br>
    <?php
        $relaction_field_id = get_field("relaction");
        $wp_result = new WP_Query(array(
            'post__in' => $relaction_field_id,
            'orderby' => 'post__in'
        ));

        while($wp_result->have_posts()) {
            $wp_result->the_post();
            ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php
        wp_reset_query();
        }
    ?>

       
<p>
Facebook Url: <?php the_field("facebook","user_".get_the_author_meta("ID")) ?><br>
Twitter Url: <?php the_field("twitter","user_".get_the_author_meta("ID")) ?><br>
</p>
        
    **/

<?php endif; ?>
 */