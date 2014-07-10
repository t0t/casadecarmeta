<div id="sidebar">
	
	
	
		
		
	
	
	
		<?php if ( in_category('Secuencias') ) {?>
		<div id="masprodscarrusel">
		<div class="carruselhorizontal">
			
		<?php query_posts( array ( 'post_type' => 'Trabajos', 'category_name' => 'Armarios', 'posts_per_page' => 10 ) ); ?>
		<h3><?php _e("<!--:es-->M&aacute;s <!--:--><!--:pt-->Mais <!--:--><!--:fr-->Plus <!--:--><!--:en-->More <!--:-->"); ?><?php single_cat_title(); ?></h3>

			<ul id="mycarousel4" class="jcarousel-skin-tango">
        	<?php while (have_posts()) : the_post(); ?>
			<li>
			<a href="<?php the_permalink(); ?>">
			<?php if ( has_post_thumbnail()) : ?>
    		<?php the_post_thumbnail( 'carruselsidebar' ); ?>
    		<br />
			<?php the_title(); ?>
			<?php endif; ?>
			</a></li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_query(); ?>
			
		</div><!-- .carruselhorizontal -->
		</div><!-- #notiscarrusel -->		
		<?php }?>
		

		
		<?php if ( is_page('origenes-y-actualidad') ) {?>
		
		<h3><?php _e("<!--:es-->Marcas del grupo<!--:--><!--:en-->Articles<!--:-->"); ?></h3>
		<ul>
		<li>
		<a href="<?php the_field('link1'); ?>" target="_blank"><img src="<?php the_field('marca1'); ?>" /></a>
		</li>
		<li>
		<img src="<?php the_field('marca2'); ?>" />
		</li>
		<li>
		<img src="<?php the_field('marca3'); ?>" />
		</li>
		</ul>
		
		
		<!-- GALERIA FOTOS -->
		<h3><?php _e("<!--:es-->Galer&iacute;as fotogr&aacute;ficas<!--:--><!--:en-->Articles<!--:-->"); ?></h3>
		
		<div id="galeriafotos">
		<?php query_posts( array( 'post_type' => 'galeria', 'category_name' => '', 'posts_per_page' => 2 )); ?>
			
			<ul id="mycarousel4" class="jcarousel-skin-tango">
        	<?php while (have_posts()) : the_post(); ?>
			
			<li><?php the_title(); ?>
			<?php echo do_shortcode('[gallery link="file" size="galeria" itemtag="div" icontag="span" captiontag="p" order="desc" orderby="" columns="4"]'); ?>
			</li>
			
			<?php endwhile; ?>
			</ul><!-- #mycarousel -->
			<?php wp_reset_query(); ?>
		
		</div><!-- #galeriafotos -->
		
		
		<?php }?>
		
		

		
		<h3><?php _e("<!--:es-->Nuestros servicios<!--:--><!--:en-->Our services<!--:-->"); ?></h3>
	
		<?php $args = array('post_type' => 'page', 'order' => 'asc', 'post__in' => array(45, 47, 33, 38)); query_posts($args); ?>
		
			<ul class="menu">
        	<?php while (have_posts()) : the_post(); ?>
			<li>
			<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
			<?php if ( has_post_thumbnail()) : ?>
    		<?php the_post_thumbnail('sidebar'); ?>
    		<?php endif; ?>
			</a></li>
			<?php endwhile; ?>
			</ul>
			<?php wp_reset_query(); ?>



	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('primary') ) ?>
	
</div><!-- #sidebar -->