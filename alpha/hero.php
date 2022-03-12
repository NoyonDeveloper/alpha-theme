<div class="header">
	<h4><?php bloginfo("description"); ?></h4>
	<a href="<?php echo site_url(); ?>"><h1><?php bloginfo("name"); ?></h1></a><br>

	<p><?php alpha_theme_date(); ?></p>
	<div class="navmenu">
		<?php 
			wp_nav_menu( array(
				'theme_location' => 'main-manu',
				'manu_class' => 'navmenu'
			) );
		?>
	</div>	
</div>
<hr>
<div class="searchh">
	<?php 
	if(is_search()){
		?>
		<h3><?php _e('You search form:','alpha'); ?> <?php the_search_query(); ?></h3>
	<?php
	}
	?>
	
	<?php
	 echo get_search_form();
	 ?>
</div>
<?php
