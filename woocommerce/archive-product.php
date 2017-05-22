<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<div class="row">
			<div class="col-md-offset-3">		
				<h1><?php woocommerce_page_title(); ?></h1>
			</div>
		</div>
		<?php endif; ?>

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php 
		global $wp_query;
		$cat_obj = $wp_query->get_queried_object();
		?>

		<div class="row">
			<div class="col-md-3 woo-produtos-menu">
				<div class="titulo">
					FILTRAR POR
				</div>
				<?php if($cat_obj->slug == 'celulares'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Quantidade de Chips</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-2"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Sistema Operacional</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-4"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Marcas</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-5"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'ar-e-ventilacao'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Tipo</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-7"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Marcas</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-6"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'eletroportateis'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Tipo</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-8"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Marcas</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-6"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'beleza'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Tipo</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-9"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Marcas</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-6"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'acessorios'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Relogios</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-10"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'produtos-refurbished'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Eletroportáteis</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-11"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Celulares</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-12"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Saúde e Beleza</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-13"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Ar e Ventilação</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-14"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Acessórios</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-15"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'produtos-vitrine'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Eletroportáteis</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-16"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Celulares</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-17"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Saúde e Beleza</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-18"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Ar e Ventilação</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-19"]'); ?>
					</div>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Acessórios</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-20"]'); ?>
					</div>

				<?php endif; ?>

				<?php if( $cat_obj->slug == 'tablets'):?>

					<div class="filtro">
						<div class="titulo-filtro">
							<span>Marcas</span> <img class="e-claro img-plus" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/plus.jpg"; ?>"/>
						</div>
						<?php echo do_shortcode('[widget id="yith-woo-ajax-navigation-21"]'); ?>
					</div>

				<?php endif; ?>



			</div>	
			<div class="col-md-9">
		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>				
			</div>		
		</div>



	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>


<?php get_footer( 'shop' ); ?>
