<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>
<section id='sobre'>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="fundo-cinza">
					A Micro Shopping
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left">
				<strong>Histórico</strong><br><br>
				<p>A Micro Shopping é uma empresa especializada no comércio eletrônico de hardwares, computadores e acessórios para informática. </p>
				<p>Atuamos nesse segmento há mais de 10 anos e contamos com uma loja física
				na Santa Ifigênia, sempre trabalhando com produtos de primeira linha.<br>
				Nossos esforços estão direcionados para a constante melhoria no atendimento 
				e para alcançar a completa satisfação de todos os nossos clientes.</p>

				<p>
					Todos os produtos que são comercializados pela Micro Shopping são provenientes 
				exclusivamente dos fabricantes ou dos distribuidores oficiais desses produtos, 
				portanto, no site da Micro Shopping você vai encontrar somente produtos 
				originais e com nota fiscal.
				</p>
				<p>Através da nossa loja virtual, disponibilizamos para todos os nossos clientes o que há de mais seguro e atual, visando atender você com maior comodidade.</p>
			</div>
			<div class="col-md-6 text-left">
				<p>
					Através de serviços diferenciados, nossa empresa é obcecada por 
					qualidade de atendimento, velocidade de entrega e respeito pelo 
					consumidor.
				</p>
				<p>Na  Micro Shopping você encontra os melhrores produtos pelos menores preços.</p>
				<p>Qual é o nosso negócio?</p>
				<p>Qualidade e bom gosto são itens fundamentais entre os produtos e serviços 
				oferecidos pela Micro Shopping. </p>
				<p>Os produtos são divididos pelos seguintes segmentos:</p>
				<p>Hardwares, acessórios para informática, roteadores, monitores, computadores,
				gabinetes, tudo direcionado para o mundo da informática.</p>
			</div>
		</div>	
	</div>
	
</section>
	
<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_footer(); ?>