<?php get_header(); ?>
          
<div id="content">
          
		<?php get_sidebar(); ?>
		
		
		<div class="wrap">
				

		<h3><?php _e("<!--:es-->Productos<!--:--><!--:en-->Articles<!--:-->"); ?>
				
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		xxxxxx
		
				
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
		
		</div><!-- .wrap -->
</div><!-- #content -->
	
	
		<!-- NOTA PIE -->
		
		<?php if ( get_field('link') ) {?>
		
		<div id="nota">
		<h4>
		<a href="<?php the_field('link'); ?>"><span><?php if (qtrans_getLanguage() == 'en') {the_field('texto');}elseif (qtrans_getLanguage() == 'es') {the_field('texto');}else {echo 'es';} ?></span></a>
		</h4>
		</div>
		
		<?php }?>  
                    
    
<?php get_footer(); ?>