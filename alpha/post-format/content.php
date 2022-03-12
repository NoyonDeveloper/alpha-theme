<div class="content">
			<div class="name-tt">
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				<h2><?php the_author(); ?></h2>
				<?php echo get_the_tag_list("<ul><li>","</li><li>","</li></ul>"); ?>
				
			</div>
			<div class="content-ic">
				<a hr
				\ef="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php the_content(); ?>
			</div>
		</div>