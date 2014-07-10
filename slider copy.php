

 <?php if ( is_page('la-casa') ) {?>
		
		<div id="descriptivo">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/bg_lacasa.png'; ?>">
		<h2>Casa de Carmeta:</h2>
		<p>Antigua casa de labranza completamente rehabilitada, sus graneros han sido convertidos en confortables salones. Dispone de habitaciones con magn&iacute;ficas vistas a La Mola de Xert</p>
		</div>
		
		<div id="imagen-slider">
        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/img_slider.jpg'; ?>">
        </div><!-- #imagen_slider --> 
		
		<?php }?>
        
        <?php if ( is_page('el-entorno') ) {?>
		
		<div id="descriptivo">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/bg_entorno.png'; ?>">
		<h2>Un marco incomparable:</h2>
		<p>A 500m. de altitud y 30Km del mar, Morella, Vinar&ograve;s y Pe&ntilde;&iacute;scola. Dispone de habitaciones con magn&iacute;ficas vistas a La Mola de Xert</p>
		</div>
		
		
		
		
		
		<div id="slider-container">
		
	
	
	<div class="slider">
	
	<?php query_posts( array ( 'post_type' => 'entorno', 'category_name' => '', 'posts_per_page' => 20 ) ); ?>
	
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
               
		<div class="post">
		<div class="descripciones">
		<span class="titulo-desc"><?php the_title(); ?></span>
		</div>
		
		<img src="<?php the_field('imagen_slide'); ?>" />
		</div><!-- .post -->

	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->
	
<div class="slider-controls">
<a class="prev" title="<?php _e("<!--:es-->Anterior<!--:--><!--:en-->Previous<!--:-->"); ?>"></a>
<a class="next" title="<?php _e("<!--:es-->Siguiente<!--:--><!--:en-->Next<!--:-->"); ?>"></a>
</div>

</div><!-- #slider-container -->
		
		
		
		
		
		
		
		
		
		
		
		<?php }?>
       
         <?php if ( is_page('contacto') ) {?>
		
		<div id="descriptivo">
		<img src="<?php echo bloginfo( 'template_directory' ) . '/images/bg_contacto.png'; ?>">
		<h2>Contacto</h2>
		
		<p>&Agrave;ngels M. 680727882 <br />
		C/Fredes,46 (Plaza Vieja) Xert (Castell&oacute;) <br />
		<a href="mailto:javiercastell60@gmail.com">javiercastell6{a}@gmail.com</a></p>		
		
		</div>
		
		<div id="imagen-slider">
        <img src="<?php echo bloginfo( 'template_directory' ) . '/images/img_slider.jpg'; ?>">
        </div><!-- #imagen_slider --> 
		
		<?php }?>








<?php else : ?>
	<h2 class="center">No encontrado</h2>
	<p class="center">Ups, lo que buscas no est&aacute; aqu&iacute;...</p>
<?php endif; ?>