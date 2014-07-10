<?php
/*
Template Name: La Casa
*/
?>

<?php get_header(); ?>

	          
		<div id="content">
                    
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		
		
		<div id="galeria">
		
		<h2><?php _e("<!--:es-->Galer&iacute;a de fotos<!--:--><!--:en-->Photo Gallery<!--:-->"); ?></h2>
		
		<?php echo do_shortcode('[gallery link="file" size="galeria" itemtag="div" icontag="span" captiontag="p" order="desc" orderby="" columns="5"]'); ?>
		
		</div><!-- #galeria -->
		
		<div class="left entry-content">
		<?php the_content(); ?>
		</div>
		
		<div id="menu-footer">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>
        </div><!-- .menu-footer -->
		
		</div><!-- .wrap -->
				
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
		
		<ul id="frases">
			<li><?php _e("<!--:es-->Ambiente seco y fresco en verano<!--:--><!--:en-->Dry and cool in summer<!--:-->"); ?></li> 
			<li><?php _e("<!--:es-->Ideal familias y grupos<!--:--><!--:en-->Ideal families and groups<!--:-->"); ?></li>
			<li><?php _e("<!--:es-->En pleno casco antigüo de Xert<!--:--><!--:en-->In the old part of Xert<!--:-->"); ?></li>
		</ul><!-- #frases -->
		
		
		<div id="banners">
		<?php if ( get_field('link_1') ) {?>
		<a href="<?php the_field('link_1'); ?>">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/banner_entorno.gif'; ?>"></a>
		<?php }?>
		<?php if ( get_field('link_2') ) {?>
		<a href="<?php the_field('link_2'); ?>">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/banner_contacto.gif'; ?>"></a>
		<?php }?>
		</div><!-- #banners --> 
		
		
		<!-- CREDITOS -->
		<?php include (TEMPLATEPATH . '/creditos.php'); ?> 

        
		</div><!-- #content --> 
   
    
<?php get_footer(); ?>