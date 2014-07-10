<?php
/*
Template Name: Servicios
*/
?>
<?php get_header(); ?>

	          
		<div id="content">
          
		<?php get_sidebar(); ?>
          
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		<h2><?php the_title(); ?></h2>
				
		<div id="fotos-servicio">
		<?php echo do_shortcode('[gallery link="file" size="thumbsservicios" itemtag="div" icontag="span" captiontag="p" order="desc" orderby="" columns="2"]'); ?>
		</div><!-- #fotos-servicio -->
		
		<?php the_content(); ?>
		
		
		</div><!-- .wrap -->
				
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
						
		<?php if ( get_field('link') ) {?>
		
		<div id="nota">
		<h4>
		<a href="<?php the_field('link'); ?>"><span><?php if (qtrans_getLanguage() == 'en') {the_field('texto');}elseif (qtrans_getLanguage() == 'es') {the_field('texto');}else {echo 'es';} ?></span></a>
		</h4>
		</div>
		
		<?php }?>
                  
                  
		</div><!-- #content -->                  
                  
   
    
<?php get_footer(); ?>