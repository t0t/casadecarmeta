<div id="subsidiary">
	
	<div class="galerias">
	
	<h3><?php _e("<!--:es-->Galer&iacute;as<!--:--><!--:en-->Galleries<!--:--><!--:ca-->Galer&iacute;es<!--:-->"); ?></h3>
	<div class="menu_terciario"><?php wp_nav_menu( array( 'theme_location' => 'menu-terciario' ) ); ?></div>
	
	</div><!-- .galerias -->




	<div class="noticias">    
		
		<?php query_posts( array ( 'post_type' => 'Articulos', 'category_name' => '', 'posts_per_page' => 5 ) ); ?>
		
		<h3><?php _e("<!--:es-->Art&iacute;culos<!--:--><!--:en-->Art&iacute;culos<!--:--><!--:ca-->Articles<!--:-->"); ?></h3>
    	
    	<?php while (have_posts()) : the_post(); ?>
		
		<div class="post">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="lista_thumbnail" >
		<span><?php the_time('d/m/Y') ?></span>
		<?php the_title(); ?>
		</a>
		</div><!-- .post -->
		
		<?php endwhile;?>
        <?php wp_reset_query(); ?>
        
	</div><!-- .noticias -->
    





</div><!-- #subsidiary -->