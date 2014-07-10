<?php
/*
Template Name: Contact Form
*/
?>

<?php get_header(); ?>

	          
		<div id="content">
                    
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		
		<div id="galeria">
		<h2><?php _e("<!--:es-->D&eacute;janos tu mensaje<!--:--><!--:en-->Leave us your message<!--:-->"); ?></h2>
		<?php echo do_shortcode('[contact-form-7 id="7" title="Contact form ESP"]'); ?>
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
		</ul><!-- #frases -->
				
		
		<div id="banners">
		<?php if ( get_field('link_1') ) {?>
		<a href="<?php the_field('link_1'); ?>">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/banner_lacasa.jpg'; ?>"></a>
		<?php }?>
		<?php if ( get_field('link_2') ) {?>
		<a href="<?php the_field('link_2'); ?>">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/banner_entorno.gif'; ?>"></a>
		<?php }?>
		</div><!-- #banners --> 
		
                  
		
		<!-- CREDITOS -->
		<?php include (TEMPLATEPATH . '/creditos.php'); ?> 
        
        
		</div><!-- #content --> 
   
    
<?php get_footer(); ?>