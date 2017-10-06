<section id="newsletter">
	<div class="container">
		<div class="row">
			<div class="col-md-4 left">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/newsletter-carta.png"; ?>"/>
			</div>		
			<div class="col-md-8 right">
				<?php
					echo do_shortcode('[contact-form-7 id="34" title="newsletter"]');
				?>	
			</div>
		</div>			
	</div>
</section>

