	<footer id="footer" role="contentinfo">
		<div class="footer-content">
			<div class="container">
				<div class="row main">
					<div class="col-md-2">
						<strong>Nossos Produtos</strong><br><br>
						<ul>
							<li><a href="<?php echo home_url( '/' )."categoria/informatica"; ?>">Informática</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/acessorios"; ?>">Acessórios</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/hardware"; ?>">Hardware</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/conectividade"; ?>">Conectividade</a></li>

						</ul>
					</div>
					<div class="col-md-2">
						<strong></strong><br><br>
						<ul>
							<li><a href="<?php echo home_url( '/' )."categoria/armazenamento"; ?>">Armazenamento</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/energia"; ?>">Energia</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/seguranca"; ?>">Segurança</a></li>
							<li><a href="<?php echo home_url( '/' )."categoria/audio-e-video"; ?>">Áudio e Vídeo</a></li>
						</ul>	
					</div>
					<div class="col-md-3 col-md-offset-1">
						<strong>Sobre a Microshopping</strong><br><br>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' )."sobre" ); ?>">Institucional</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."politica-de-privacidade" ); ?>">Política de Privacidade</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."troca-e-devolucao" ); ?>">Troca e Devolução</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' )."atendimento" ); ?>">Atendimento e Loja Física</a></li>
						</ul>	
					</div>
					<div class="col-md-3 col-md-offset-1">
						<strong>Siga a MicroShooping</strong><br><br>
						<ul class="redes_sociais_bot">
							<li class="youtube"><a target="_blank" href="#"></a></li>
							<li class="instagram"><a target="_blank" href="#"></a></li>
							<li class="twitter"><a target="_blank" href="#"></a></li>
							<li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div><!-- .row -->
				<div class="row outros">
					<div class="col-md-6">
						<strong>Formas de Pagamento</strong><br>
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-pgto.jpg"?>" />
					</div>
					<div class="col-md-4">
						<strong>Site Seguro</strong><br>
						<img class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/footer-siteseguro.jpg"?>" />
					</div>
					<div class="col-md-2">
						<strong>Televendas</strong><br><br>
						<p>
							XXXX-XXXX
						</p>
					</div>
				</div>
			</div><!-- .container -->			
		</div>
		<div class="copyrino">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						&copy; Copyright <?php echo date('Y') ?> - Microshopping Santa Ifigênia
					</div>
					<div class="col-md-2">
						<a target="_blank" href="http://seimidigital.com.br/"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/seimi.png"?>" /></a>	
					</div>
				</div>	
			</div>	
		</div>
	</footer><!-- #footer -->
</div><!-- #page -->
<script>
	$('.drop-event').on('mouseenter mouseleave',function(){
		$(this).children( ".drop-sub" ).toggle();
	});
</script>
<?php wp_footer(); ?>

</body>
</html>

