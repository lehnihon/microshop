<?php
get_header(); ?>

<div id="content">
	<section id="contato-pag">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">Contato</h1>
					<h5>Entre em contato conosco, teremos o maior prazer em atendê-lo</h5>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-5 info-left text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>
				</div>
				<div class="col-md-6 col-md-offset-1 info-right text-left">
					<p>
						<strong>Telefone</strong>
						<br>11 4113-7611 <br/> 
							11 4113-7283
						<br><br><strong>Email</strong>
						<br>contato@spacecell.com.br
					</p>
				</div>
			</div>
		</div>
	</section> 
	
	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>
