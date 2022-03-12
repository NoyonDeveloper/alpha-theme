<?php get_header(); ?>

<?php get_template_part("hero"); ?>
<div class="athore">
		<div class="athore-image">
		<?php 
		echo get_avatar(get_the_author_meta("id"));
		?>
		</div>
		<div class="athore-content">
		<h4>
		<?php 
		echo get_the_author_meta("display_name");
		?>
		</h4>
		<p>
		<?php 
		echo get_the_author_meta("description");
		 ?>
		</p>
		</div>
	</div>

<?php while(have_posts()):the_post(); ?>
	<h2>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>
<?php endwhile; ?>

<?php get_footer(); ?>