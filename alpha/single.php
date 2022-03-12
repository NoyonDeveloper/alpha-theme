<?php
the_post();
get_header();
?>

<?php get_template_part( 'hero' );
?>

<div class = 'title-area'>
<h2><?php the_title();
?></h2>
<p><?php the_author_posts_link();
?></p>
<p><?php echo get_the_date();
?></p>
<?php the_post_thumbnail();
?>

<p>
    <?php the_content();
    
    ?>
</p>


<p>
    <?php 
        $alpha_camera_model = get_post_meta( get_the_ID(), "_alpha_camera_model", true );
        $alpha_Location = get_post_meta( get_the_ID(), "_alpha_location", true );
        $alpha_date = get_post_meta( get_the_ID(), "_alpha_date", true );
        $alpha_lisensed = get_post_meta( get_the_ID(), "_alpha_lisensed", true );
        $alpha_Lisensed_Information = get_post_meta( get_the_ID(), "_alpha_lisensed_information", true );
    ?>
</p>

<p>

    <strong>Camera Model:</strong> <?php echo esc_html( $alpha_camera_model ); ?><br>
    <strong>Location:</strong> <?php echo esc_html( $alpha_Location ); ?><br>
    <strong>Date:</strong> <?php echo esc_html( $alpha_date ); ?><br>
    <strong>Lisensed:</strong> <?php echo esc_html( $alpha_lisensed ); ?><br>
    <?php 
        if($alpha_lisensed) :
    ?>
    <strong>Lisensed Information:</strong> <?php echo apply_filters( "the_content", $alpha_Lisensed_Information ); ?>
        
    <?php endif; ?>

</p>


<p>
    <?php
        $image_idset = get_post_meta(get_the_ID(),"_alpha_image_id",true);
        $image_detailse = wp_get_attachment_image_src( $image_idset, "alpha_croping");
        echo "<img src='".esc_url( $image_detailse[0])."'</";
    ?>
</p>


<p>
    <?php
        $file_upload = get_post_meta(get_the_ID(),"_alpha_upload",true);
       echo esc_url($file_upload);
    ?>
</p>
<?php
wp_link_pages();
?>

<?php
the_post_thumbnail( 'alphp_square' );
echo '<br>';
the_post_thumbnail( 'alphp_landcrop' );
echo '<br>';
the_post_thumbnail( 'alpha_croping' );
?>
</div>
<div class = 'athore'>
<div class = 'athore-image'>
<?php
echo get_avatar( get_the_author_meta( 'id' ) );
?>
</div>
<div class = 'athore-content'>
<h4>
<?php
echo get_the_author_meta( 'display_name' );
?>
</h4>
<p>
<?php
echo get_the_author_meta( 'description' );
?><br>

</p>
</div>
</div>


<div class = 'coment'>
<?php
if(!post_password_required( )){
    comments_template();
}
?>
</div>
</div>

<?php get_footer();
?>