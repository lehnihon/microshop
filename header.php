<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-7 col-md-5">
					<ul class="menu-top">
						<li class="hide-op"><a href="<?php echo home_url( '/' ).'sobre'; ?>">Sobre a Microshopping</a></li>
						<li><a href="<?php echo home_url( '/' ).'minha-conta'; ?>">Minha Conta / Cadastre-se</a></li>
						<li class="hide-op"><a href="<?php echo home_url( '/' ).'contato'; ?>">Contato</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<a href="<?php echo home_url( '/' ); ?>">
						<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-logo.jpg"; ?>"/>
					</a>
					
				</div>
				<div class="col-md-5">
					<form role="search" method="get" class="col-md-12 search-form clearfix" action="<?php echo home_url( '/' ); ?>">
						<input type="search" class="pesquisar-input" placeholder="<?php echo esc_attr_x( 'Buscar Site', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="image" class="pesquisar-submit" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-buscar.jpg"; ?>" />
					</form>						
				</div>
				<div class="col-md-2">
					<ul class="cart-item clearfix">
						<li class="cart">
							<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-carrinho.png"; ?>" alt="" />
						</li>
						<li class="number">
							<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?> </a>
						</li>
					</ul>					
				</div>
			</div>

		</div><!-- .container -->
		<nav role="navigation">
			<div class="container">
				<div class="menu-responsivo">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
					</button>
					<ul class="dropdown-menu">
						<?php
						$args = array(
						     'taxonomy'     => 'product_cat',
						     'orderby'      => 'name',
						     'show_count'   => 0,
						     'pad_counts'   => 0,
						     'hierarchical' => 1,
						     'title_li'     => '',
						     'hide_empty'   => 0
						);
						$all_categories = get_categories( $args );
						foreach ($all_categories as $cat) {
							if($cat->category_parent == 0) {
							    $category_id = $cat->term_id;
							    $args2 = array(
							            'taxonomy'     => 'product_cat',
							            'child_of'     => 0,
							            'parent'       => $category_id,
							            'orderby'      => 'name',
							            'show_count'   => 0,
							            'pad_counts'   => 0,
							            'hierarchical' => 1,
							            'title_li'     => '',
							            'hide_empty'   => 0
							    );
							    $sub_cats = get_categories( $args2 );
							    if($sub_cats) {
							        foreach($sub_cats as $sub_category) {
							            echo '<li><a class="drop-item" href="'.get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name .'</a></li>';
							        }
							    }
							}
						}
						?>
					</ul>								
				</div>
				<ul class="main-navigation clearfix">
					<?php
					$args = array(
					     'taxonomy'     => 'product_cat',
					     'orderby'      => 'name',
					     'show_count'   => 0,
					     'pad_counts'   => 0,
					     'hierarchical' => 1,
					     'title_li'     => '',
					     'hide_empty'   => 0
					);
					$all_categories = get_categories( $args );
					foreach ($all_categories as $cat) {
						if($cat->category_parent == 0) {
						    $category_id = $cat->term_id;       
						    echo '
						    <li class="drop-container drop-event">
						    	<a class="drop-item" href="'.get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';

						    $args2 = array(
						            'taxonomy'     => 'product_cat',
						            'child_of'     => 0,
						            'parent'       => $category_id,
						            'orderby'      => 'name',
						            'show_count'   => 0,
						            'pad_counts'   => 0,
						            'hierarchical' => 1,
						            'title_li'     => '',
						            'hide_empty'   => 0
						    );
						    $sub_cats = get_categories( $args2 );
						    if($sub_cats) {
						    	echo '<div class="drop-sub">';
						        foreach($sub_cats as $sub_category) {
						            echo '<div><a class="drop-item" href="'.get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name .'</a></div>';
						        }
						        echo "</div>";
						    }
						    echo '</li>';
						}
					}
					?>
				</ul>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

