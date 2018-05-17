

	<footer class="site-footer">
		
		<nav class="site-nav">
			<?php
				
			$args = array(
				'theme_location' => 'footer'
			);
				
			?>
				
			<?php wp_nav_menu( $args ); ?>
		</nav>
		
		<p> Copyright <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> - All rights reserved. </p>
		
	</footer>

</div><!-- container -->
	
<?php wp_footer(); ?>	
</body>
</html>