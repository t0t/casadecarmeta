<?php
/*
Template Name: Servicios Indice
*/
?>

<?php get_header(); ?>

<!-- SLIDER PAGINAS -->
<?php include (TEMPLATEPATH . '/slider-paginas.php'); ?> 
        
          
		<div id="portada">
		<div class="izda">
          
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		
		<div class="wrap">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		</div>
				
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		
		</div><!-- .izda -->
          
		
		
		<div class="dcha">
          
		<h2><?php _e("<!--:es-->Especialistas en:<!--:--><!--:ca-->Not&iacute;cies<!--:-->"); ?></h2>

		
			<?php $args = array('post_type' => 'page', 'order' => 'asc', 'post__in' => array(45, 47, 33, 38)); query_posts($args); ?>
			
			<ul id="mycarousel6" class="jcarousel-skin-tango">
        	<?php while (have_posts()) : the_post(); ?>
		
			<li>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail()) : ?>
    		<?php the_post_thumbnail( 'thumbsportada' ); ?>
    		<?php endif; ?>
    		
    		<div class="descripcion">
			<h3><?php the_title(); ?></h3>
			</div>
			</a>
			</li>
			
			<?php endwhile; ?>
			</ul><!-- #mycarousel2 -->
			<?php wp_reset_query(); ?>
			
			</div><!-- .dcha -->
			
          </div><!-- #portada -->


		
		
		<?php if ( get_field('link') ) {?>
		<div id="nota">
		<h4>
		<a href="<?php the_field('link'); ?>"><span><?php if (qtrans_getLanguage() == 'en') {the_field('texto');}elseif (qtrans_getLanguage() == 'es') {the_field('texto');}else {echo 'es';} ?></span></a>
		</h4>
		</div>
		
		<?php }?>
		
		
		
        		
    
<?php get_footer(); ?>