<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

?>

<article id="post-<?php the_ID(); ?>" class="text-left clearfix" style="margin-bottom:25px">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


	</header><!-- .entry-header -->
	<div class="images" style="float:left; width:10%; margin-right:50px">
	    <?php 
	    if (has_post_thumbnail()): 
	    	echo the_post_thumbnail('', array('class' => "e-cinza img-responsive"));
	    else: 
	    	echo '<img class="img-responsive" src="'.woocommerce_placeholder_img_src().'" />';
	    endif; 
	    ?>
    </div>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->

