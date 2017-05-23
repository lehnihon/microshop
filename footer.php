	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row main">
					<div class="col-md-6 produtos clearfix">
						<strong>Produtos Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo home_url( '/' )."categoria/destaques"; ?>">Destaques</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/eletroportateis"; ?>">Eletroportáteis</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/celulares"; ?>">Celulares</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/ar-e-ventilacao"; ?>">Ar e Ventilação</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/beleza"; ?>">Beleza</a></li>	
							<li><a href="<?php echo home_url( '/' )."categoria/acessorios"; ?>">Acessórios</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/produtos-refurbished"; ?>">Refurbished</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/produtos-vitrine"; ?>">Vitrine</a></li>
						</ul>									
																
					</div>
					<div class="col-md-3">
						<strong>Sobre a Space Cell</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Institucional</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."politica-de-privacidade" ); ?>">Política de Privacidade</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."troca-e-devolucao" ); ?>">Troca e Devolução</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."contato" ); ?>">Fale Conosco</a></li>
						</ul>	
					</div>
					<div class="col-md-3">
						<strong>Nossas Redes Sociais</strong><br><br>
						<ul class="redes_sociais_bot">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="https://www.instagram.com/spacecellreal
"></a></li>
							<li class="twitter"><a target="_blank" href="https://www.twitter.com/spacecellreal
"></a></li>
							<li class="facebook"><a target="_blank" href="https://www.facebook.com/spacecelloficial?__mref=message_bubble"></a></li>
						</ul>
					</div>
				</div><!-- .row -->
				<div class="row outros">
					<div class="col-md-5">
						<strong>Formas de Pagamento</strong><br><br>
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-pgto.jpg"?>" />
					</div>
					<div class="col-md-2">
						<strong>Televendas</strong><br><br>
						<p>
							11 4113-7611 <br/> 
							11 4113-7283 <br/> 
							contato@spacecell.com.br
						</p>
					</div>
				</div>
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; Copyright <?php echo date('Y') ?> - CNPJ 17.384.419/0001-97 - Tatuapé - São Paulo 
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://agenciarino.com.br/"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seimi.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

