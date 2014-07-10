<div id="slider-container">
		
	
	<div class="slider">
	
	<?php $args = array('post_type' => 'page', 'order' => 'asc', 'post__in' => array(45, 47, 33, 38)); query_posts($args); ?>
	
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
               
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<div class="descripciones">
		<span class="titulo-desc"><?php the_title(); ?></span>
		<span class="titulo-desc2">
		<?php if (qtrans_getLanguage() == 'es') {the_field('texto_slide_castellano');}elseif (qtrans_getLanguage() == 'ca') {the_field('texto_slide_catala');}else {echo 'es';} ?>
		</span>
		
		</div>
		
		<img src="<?php the_field('imagen_slide'); ?>" />
		</a>
		
		</div><!-- .post -->

	<?php endwhile; ?>
	
	<?php wp_reset_query(); ?>
	</div><!-- .slider -->
	
<div class="slider-controls">
<a class="prev" title="<?php _e("<!--:es-->Anterior<!--:--><!--:en-->Previous<!--:-->"); ?>"></a>
<a class="next" title="<?php _e("<!--:es-->Siguiente<!--:--><!--:en-->Next<!--:-->"); ?>"></a>
</div>

</div><!-- #slider-container -->



<?php else : ?>
	<h2 class="center">No encontrado</h2>
	<p class="center">Ups, lo que buscas no est&aacute; aqu&iacute;...</p>
<?php endif; ?>