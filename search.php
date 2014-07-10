<?php get_header(); ?>

	
<!-- SLIDER PAGINAS -->
<?php include (TEMPLATEPATH . '/slider-paginas.php'); ?> 

		<div class="sidebar-dcha"><?php get_sidebar(); ?></div>

		<div id="content-buscador">

		<h3>Informaci&oacute;n que contiene la palabra "<strong><?php the_search_query() ?></strong>":</h3>		

          
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
		</div><!-- .wrap -->
				
		<?php endwhile; ?>
		
		<?php else : ?>
		<div id="content">
		<h3>Ups!... No se encontraron coincidencias para "<?php the_search_query() ?>".</h3> 
		</div><!-- #content -->                  
		<?php endif; ?>
		
                  
        </div><!-- #content-buscador --> 





<!-- LETREROS PIE -->
<?php include (TEMPLATEPATH . '/letreros-pie-2.php'); ?> 




<?php get_footer(); ?>