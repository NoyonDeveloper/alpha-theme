<?php

/**
 * Template Name: Priching Table
 */
?>
<?php get_header();
$priching = get_post_meta(get_the_ID(), '_alpha_priching_table', true);
?>

<div class="hedingpr">
   <?php
   foreach($priching as $prs) :
   ?>
    <h2><?php echo esc_html( $prs['_alpha_priching_option_caption'] ); ?></h2>
   </div>
    <?php
    foreach($prs['_alpha_priching_option'] as $prop) :
    ?>
        <li><?php echo esc_html( $prop); ?></li>
    <?php
    endforeach;
    ?>
    <h2><?php echo esc_html($prs['_alpha_price']); ?></h2>
    
  <?php
  endforeach;
  ?>




<?php get_footer(); ?>