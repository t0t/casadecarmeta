<?php get_header(); ?>

	          
		<div id="content">
          
		<?php get_sidebar(); ?>
          
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		</div><!-- .wrap -->
				
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
			                
                  
		</div><!-- #content -->                  
                  
   
    
<?php get_footer(); ?>