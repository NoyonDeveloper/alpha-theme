<div class="footer">
		<div class="info">
			<p>
			<?php 
			if(is_active_sidebar("footerleft")){
				dynamic_sidebar("footerleft");
			}
			 ?>
			</p>
		</div>
		<div class="social">
			<?php 
			if(is_active_sidebar("footerright")){
				dynamic_sidebar("footerright");				
			}
			 ?>
		</div>
		
	</div>
<?php wp_footer(); ?>
</body>
</html>
