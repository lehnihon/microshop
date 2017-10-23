<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php 
				    echo do_shortcode("[metaslider id=8]"); 
				?>
				</div>			
			</div>
			<div class="row category">
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=11]"); 
					?>
				</div>
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=14]"); 
					?>
				</div>
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=16]"); 
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="produtos">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Hardware</h1>
				</div>
			</div>	
			<div class="row produto-slider">
				<img class="e-claro control-esq cea" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/left.jpg"; ?>"/>
				<img class="e-claro control-dir cda" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/right.jpg"; ?>"/>
				<ul class="row bxslider bxslider-a">

				    <?php
			        $args = array( 'post_type' => 'product', 'posts_per_page' => 8,'product_cat' => 'hardware',  'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post();  
				    ?>
						<li>
							<?php get_template_part( 'template-parts/content'); ?>
						</li>
					<?php
					endwhile;
					?>
				</ul>
			</div>	
			<div class="row category">
				<div class="col-md-12">
					<?php 
					    echo do_shortcode("[metaslider id=18]"); 
					?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h2 class="underline text-left">Armazenamento</h1>
				</div>
			</div>	
			<div class="row produto-slider">
				<img class="e-claro control-esq ceb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/left.jpg"; ?>"/>
				<img class="e-claro control-dir cdb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/right.jpg"; ?>"/>
				<ul class="row bxslider bxslider-b">

				    <?php
			        $args = array( 'post_type' => 'product', 'posts_per_page' => 8,'product_cat' => 'armazenamento',  'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post();  
				    ?>
						<li>
							<?php get_template_part( 'template-parts/content'); ?>
						</li>
					<?php
					endwhile;
					?>
				</ul>
			</div>
			<div class="row category">
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=20]"); 
					?>
				</div>
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=22]"); 
					?>
				</div>
				<div class="col-md-4">
					<?php 
					    echo do_shortcode("[metaslider id=24]"); 
					?>
				</div>
			</div>

		</div>

	</section>

	<section class="produtosb">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Conectividade</h1>
				</div>
			</div>	
			<div class="row produto-slider">
				<img class="e-claro control-esq cec" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/left.jpg"; ?>"/>
				<img class="e-claro control-dir cdc" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/right.jpg"; ?>"/>
				<ul class="row bxslider bxslider-c">

				    <?php
			        $args = array( 'post_type' => 'product', 'posts_per_page' => 8,'product_cat' => 'conectividade',  'orderby' => 'rand' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post();  
				    ?>
						<li>
							<?php get_template_part( 'template-parts/content'); ?>
						</li>
					<?php
					endwhile;
					?>
				</ul>
			</div>	

		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter' ); ?>

	<section class="produtos">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Produtos Micro Shopping</h1>
				</div>
			</div>
			<div class="row produto-slider">
				<img class="e-claro control-esq ced" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/left.jpg"; ?>"/>
				<img class="e-claro control-dir cdd" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/right.jpg"; ?>"/>
				<ul class="row bxslider bxslider-d">

				    <?php
			        $args = array( 'post_type' => 'product', 'posts_per_page' => 8,  'order'=>'DESC' );
			        $loop = new WP_Query( $args );

			        while ( $loop->have_posts() ) : $loop->the_post();  
				    ?>
						<li>
							<?php get_template_part( 'template-parts/content'); ?>
						</li>
					<?php
					endwhile;
					?>
				</ul>
			</div>
		</div>
	</section>

</div>
<script>
$(document).ready(function(){
	var slidera = $('.bxslider-a').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 2000,
		infiniteLoop: false,
		pager: false,
		slideMargin: 10,
		controls: false
	});
	$('.cea').on('click',function(){
		slidera.goToPrevSlide();
	})
	$('.cda').on('click',function(){
		slidera.goToNextSlide();
	})
	var sliderb = $('.bxslider-b').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 2000,
		infiniteLoop: false,
		pager: false,
		slideMargin: 10,
		controls: false
	});
	$('.ceb').on('click',function(){
		sliderb.goToPrevSlide();
	})
	$('.cdb').on('click',function(){
		sliderb.goToNextSlide();
	})
	var sliderc = $('.bxslider-c').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 2000,
		infiniteLoop: false,
		pager: false,
		slideMargin: 10,
		controls: false
	});
	$('.cec').on('click',function(){
		sliderc.goToPrevSlide();
	})
	$('.cdc').on('click',function(){
		sliderc.goToNextSlide();
	})
	var sliderd = $('.bxslider-d').bxSlider({
		minSlides: 4,
		maxSlides: 4,
		slideWidth: 2000,
		infiniteLoop: false,
		pager: false,
		slideMargin: 10,
		controls: false
	});
	$('.ced').on('click',function(){
		sliderd.goToPrevSlide();
	})
	$('.cdd').on('click',function(){
		sliderd.goToNextSlide();
	})
});
</script>
<?php get_footer(); ?>
