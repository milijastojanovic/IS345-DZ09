<?php

	get_header(); 

?>
	
	<!-- site-content -->
	<div class="site-content clearfix">
	
		<!-- main-column -->
		<div class="main-column">
		
			<?php if (have_posts()):
			while (have_posts()) : the_post();?>
			
				<article class="post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
					<?php echo the_content(); ?>
				</article>
					
			<?php endwhile;
			
			else:
				echo '<p>Nema sadrzaja</p>';
				
			endif; ?>
			
		</div>
		<!-- /main-column -->
	
		<?php get_sidebar(); ?>
	
	</div>
	<!-- /site-content -->
	
<?php	

	get_footer();

?>