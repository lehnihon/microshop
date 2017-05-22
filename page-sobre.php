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
					HISTÓRIA DA SPACE CELL
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left">
				<strong>Histórico</strong><br><br>
				<p>
					A Space Cell é uma empresa especializada no comércio eletrônico de 
					celulares, smartphones, tablets, acessórios e eletroportáteis. 
				</p>
				<p>					
					Atuamos nesse segmento desde 2011 em parceria com as grandes marcas, 
					como a Mallory, Motorolla, Black Berry, Samsung, Apple, Nextel e MEU. 
					Nossos esforços estão direcionados para a constante melhoria no atendimento 
					e para alcançar a completa satisfação de todos os nossos clientes.
				</p>
				<p>
					Todos os produtos que são comercializados pela Space Cell são provenientes 
					exclusivamente dos fabricantes ou dos distribuidores oficiais desses produtos, 
					portanto, no site da Space Cell os clientes vão encontrar somente produtos 
					originais e com nota fiscal.					
				</p>
				<p>
					Através da nossa loja virtual, disponibilizamos para todos os nossos clientes o
					que há de mais seguro e atual, visando atender os clientes da Space Cell com
					maior comodidade e agilidade.						
				</p>			
			</div>
			<div class="col-md-6 text-left">
				<p>
					Através de serviços diferenciados, nossa empresa é obcecada por 
					qualidade de atendimento, velocidade de entrega e respeito pelo 
					consumidor.
				</p>
				<p>
					Na Space Cell você encontra os melhroes produtos pelos menores preços.
				</p>
				<p>
					Qual é o nosso negócio?
				</p>	
				<p>
					Qualidade e bom gosto são itens fundamentais entre os produtos e serviços 
					oferecidos pela Space Cell. 
				</p>
				<p>
					Os produtos são divididos pelos seguintes segmentos:
				</p>
				<p>
					Portáteis: cafeteiras, sanduicheiras, fritadeiras, grill, multiprocessadores, 
					bebedouros e cuidados pessoais.					
				</p>
				<p>
					Telefonia: smartphones, celulares, nextel, Black Berry, tablets e acessórios.	
				</p>		
			</div>
		</div>	
	</div>
	
</section>
	
<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>