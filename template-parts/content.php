<?php global $product; ?>
<article>
	<h4><?php echo the_title( );?></h4>
	
    <a href="<?php echo the_permalink(); ?>" title="<?php echo the_title( ); ?>">
        <?php 
        if (has_post_thumbnail()): 
        	echo the_post_thumbnail('', array('class' => "e-cinza img-responsive"));
        else: 
        	echo '<img class="img-responsive" src="'.woocommerce_placeholder_img_src().'" />';
        endif; 
        ?>	                                           
    </a>

    <span class="price"><?php echo $product->get_price_html(); ?></span>  

    <a class="btn-comprar" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="saiba-mais">
    	Comprar
    </a>
</article>
