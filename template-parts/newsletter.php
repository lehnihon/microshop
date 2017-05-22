<section id="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-4 left">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter-carta.png"; ?>"/>
			</div>		
			<div class="col-md-8 right">
				<?php
				if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 9 ); }
				?>	
			</div>
		</div>			
	</div>
</section>

