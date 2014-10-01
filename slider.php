<?php if ( is_page('la-casa') ) {?>
				
		<div id="descriptivo">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/bg_lacasa.png'; ?>">
		<h2><?php _e("<!--:es-->Casa de Carmeta:<!--:--><!--:en-->Casa de Carmeta:<!--:-->"); ?></h2>
		<p><?php _e("<!--:es-->Antigua casa de labranza en Xert completamente rehabilitada, sus graneros han sido convertidos en confortables salones. Dispone de habitaciones con magn&iacute;ficas vistas a La Mola de Xert<!--:--><!--:en-->Old farmhouse in Xert completely restored, its barns have been converted into comfortable rooms. It offers rooms with magnificent views of La Mola Xert<!--:-->"); ?></p>
		</div>

		<div id="slider-container">
	
		<div class="slider">
	
		<?php query_posts( array ( 'post_type' => 'lacasa', 'category_name' => '', 'posts_per_page' => 5 ) ); ?>
	
    	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
				<div class="post">
				<img src="<?php the_field('imagen_slide'); ?>" />
				</div>
	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->
	


</div><!-- #slider-container -->
		
		
	<?php else : ?>
	<h2 class="center">No encontrado</h2>
	<p class="center">Ups, lo que buscas no est&aacute; aqu&iacute;...</p>
<?php endif; ?>
		
<?php }?>
		
		
		
<?php if ( is_page('el-entorno') ) {?>

		<div id="descriptivo">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/bg_entorno.png'; ?>">
		<h2><?php _e("<!--:es-->Un marco incomparable:<!--:--><!--:en-->An incomparable:<!--:-->"); ?></h2>
		<p><?php _e("<!--:es-->A 500m. de altitud y 30Km del mar, Morella, Vinar&ograve;s y Pe&ntilde;&iacute;scola. Dispone de habitaciones con magn&iacute;ficas vistas a La Mola de Xert<!--:--><!--:en-->A 500m. 30 km altitude and sea, Morella, Pe&ntilde;&iacute;scola Vinar&ograve;s. It offers rooms with magnificent views of La Mola Xert<!--:-->"); ?></p>
		</div>


<div id="slider-container">
	
	<div class="slider">
	<?php query_posts( array ( 'post_type' => 'entorno', 'category_name' => '', 'posts_per_page' => 5 ) ); ?>
	
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
				<div class="post">
				<img src="<?php the_field('imagen_slide'); ?>" />
				</div>
	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->
	

</div><!-- #slider-container -->
		
	<?php else : ?>
	<h2 class="center">No encontrado</h2>
	<p class="center">Ups, lo que buscas no est&aacute; aqu&iacute;...</p>
	<?php endif; ?>
		
<?php }?>




<?php if ( is_page('contacto') ) {?>
		
		<div id="descriptivo">
		
		<h2><?php _e("<!--:es-->Persona de Contacto<!--:--><!--:en-->Contact Person<!--:-->"); ?></h2>
		<p>&Agrave;ngels (+34) M.680727882 <a href="mailto:info@casadecarmeta.com">info{A}casadecarmeta.com</a><br />
		<?php _e("<!--:es-->C/ Fredes (Plaza Vieja) s/n<!--:--><!--:en-->C/ Fredes (Plaza Vieja) s/n<!--:-->"); ?><br />
		<?php _e("<!--:es-->Xert (Castell&oacute;)<!--:--><!--:en-->Xert (Castell&oacute;)<!--:-->"); ?></p>
		<h2><?php _e("<!--:es-->Tarifas<!--:--><!--:en-->Rates<!--:-->"); ?></h2>
		<dl>
			<dt><?php _e("<!--:es-->Personas<!--:--><!--:en-->People<!--:-->"); ?></dt>
			<dd><?php _e("<!--:es-->De 4 a 6 personas: 30€ (noche)<!--:--><!--:en-->From 4-6 persons: 30 € (night)<!--:-->"); ?></dd>
			<dt><?php _e("<!--:es-->Pascua y Nochevieja<!--:--><!--:en-->Easter and New Year<!--:-->"); ?></dt>
			<dd><?php _e("<!--:es-->Precio a convenir <!--:--><!--:en-->Price negotiable<!--:-->"); ?></dd>
			<dt><?php _e("<!--:es-->Por Semanas<!--:--><!--:en-->by Weeks<!--:-->"); ?></dt>
			<dd><?php _e("<!--:es-->Temporada baja (excepto puentes) 500€<!--:--><!--:en-->Low season (except bridges) € 500<!--:-->"); ?></dd>
			<dd><?php _e("<!--:es-->Temporada alta (Agosto): 800€<!--:--><!--:en-->High season (August): € 800<!--:-->"); ?></dd>
		</dl>
		
		<small>
		<?php _e("<!--:es-->Todo IVA Inclu&iacute;do<!--:--><!--:en-->All VAT included<!--:-->"); ?>
		</small>
	
		</div>
		
	<div id="slider-container">
	
	<div class="slider">
	
	<?php query_posts( array ( 'post_type' => 'lacasa', 'category_name' => '', 'posts_per_page' => 5 ) ); ?>
	
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
				<div class="post">
				<img src="<?php the_field('imagen_slide'); ?>" />
				</div>
	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->

</div><!-- #slider-container -->
		
		
	<?php else : ?>
	<h2 class="center">No encontrado</h2>
	<p class="center">Ups, lo que buscas no est&aacute; aqu&iacute;...</p>
	<?php endif; ?>


<?php }?>