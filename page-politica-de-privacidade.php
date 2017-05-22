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
<section id='politica-privacidade'>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="fundo-cinza">
					Política de Privacidade
				</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left">
				<strong>Confira como é a Política de Privacidade da Space Cell.</strong><br><br>
				<p>
					A Space Cell assume o compromisso com a privacidade e a segurança de 
					todos os seus clientes por toda vida. 
				</p>
				<p>					
					A Space Cell utiliza cookies e informações de sua navegação (sessão do 
					browser) com o objetivo de traçar um perfil anônimo do público que visita o 
					site, buscando aperfeiçoar continuamente nossos serviços, produtos, 
					conteúdos, a fim de garantir as melhores ofertas e promoções.
				</p>
				<p>
					Os dados cadastrais dos clientes Space Cell são registrados por nossos 
					sistemas de forma automática e não são vendidos, trocados ou divulgados a 
					terceiros. Mantemos suas informações em absoluto sigilo.					
				</p>
				<p>
					A Space Cell utiliza os dados de pagamento, como número de cartão de 
					crédito, códigos de segurança e validades apenas e tão somente durante o 
					processo de cobrança , tomando todas as providências necessárias para
					que esses dados sejam protegidos contra a interceptação, mau uso ou 
					adulteração. 						
				</p>			
			</div>
			<div class="col-md-6 text-left">
				<p>
					Diante disso, para garantir essa segurança aos dados dos clientes Space 
					Cell, recomendamos a não divulgação de dados de acesso a terceiros, 
					incluindo senha, e-mail de acesso, CPF, bem como outros documentos 
					pessoais.
				</p>
				<p>
					Para sua segurança, todos os pedidos estão sujeitos à confirmação dos
					dados cadastrais e de entrega. 
				</p>
				<p>
					Esta confirmação, quando necessária, será 
					feita através de contato telefônico, e visa exclusivamente garantir a 
					identidade do comprador e evitar qualquer dano ou prejuízo aos nossos 
					clientes.
				</p>	
				<p>
					A Space Cell nunca envia e-mails solicitando confirmação de dados 
					cadastrais ou com anexos e links para download.
				</p>
				<p>
					O contato durante o processo de compra é realizado pelo e-mail 
					contato@spacecell.com.br.
				</p>	
			</div>
		</div>	
	</div>
	
</section>
	
<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>