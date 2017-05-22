<?php get_header(); ?>

	<section id="produto-detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-8">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>


					<?php endwhile; // end of the loop. ?>

				</div> <!-- /.col.grid_8_of_12 -->
				<div class="col-md-4">

					<div role="complementary">
						<h4 class="sidebar-title">Terapeutas</h4>
					
					</div> <!-- /#secondary.widget-area -->

				</div> 
			</div>				
		</div>
	</section>

<?php get_footer(); ?>
