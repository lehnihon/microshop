<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<h1 class="fundo-cinza">
					Contato
				</h1>
			</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					<?php echo do_shortcode('[contact-form-7 id="460" title="Contato"]'); ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="videoWrapperb">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.8096559940477!2d-46.64058438444969!3d-23.539347566666148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce585a6fc07bfb%3A0x6f30cce094e1a6b4!2sR.+Santa+Ifig%C3%AAnia%2C+276+-+Santa+Ifig%C3%AAnia%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1507555246658" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
						<p>
							<strong>Loja Física</strong><br>
							Rua Santa Ifigênia, 276 - Loja 8B<br>
							Santa ifigênia <br>
							São Paulo - SP
						</p>
						<p>
							<strong>Contatos</strong><br>
							WhatsApp.: 11 94753-1145<br>
							Email.: contato@microshopping.com.br
						</p>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
