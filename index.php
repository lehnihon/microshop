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

	<section id="produtos">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Informática</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4,'product_cat' => 'informatica',  'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
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
					<h2 class="underline text-left">Acessórios</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4,'product_cat' => 'celulares', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
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

	<section id="produtosb">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Conectividade</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4,'product_cat' => 'eletroportateis',  'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	

		</div>
	</section>

	<?php get_template_part( 'template-parts/newsletter' ); ?>

	<section id="produtos">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h1 class="small underline text-left">Produtos Microshop</h1>
				</div>
			</div>	
			<div class="row">
			    <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 4,'product_cat' => 'eletroportateis',  'orderby' => 'rand' );
		        $loop = new WP_Query( $args );

		        while ( $loop->have_posts() ) : $loop->the_post();  
			    ?>
					<div class="col-md-3">
						<?php get_template_part( 'template-parts/content'); ?>
					</div>
				<?php
				endwhile;
				?>
			</div>	

		</div>
	</section>

</div>

<?php get_footer(); ?>
