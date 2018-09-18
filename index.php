<?php
get_header();
?>


<!--slideshow-->
<section id="slideshow"><img src="<?php echo get_template_directory_uri()?>/assets/images/slide.jpg" width="100%" height="auto">
</section>

<!--About-->
<div id="diagonal1"></div>
<section id="about">
	<div class="container">
		<div id="taca"><img src="<?php echo get_template_directory_uri()?>/assets/images/taca.png" alt="taça lods ">
		</div>
		<div id="text_about">
			<h2>
				<div class="small">Sobre os</div> Cristais Lodz </h2>
<?php
$post_sobre_lodz = get_post(30); 
$contents = $post_sobre_lodz ->post_content;
echo $contents;
?>

			<span class="calltoaction"><a href="#">Saiba mais sobre a Lodz</a></span> </div>
	</div>
</section>

<!-- categorias de produtos-->
<div id="diagonal2"></div>
<section id="products">
	<div class="container">
		<h2>
			<div class="small">linha de</div>Cristais Lodz </h2>
		<p>Confira nossa linha de produtos completa de cristais poloneses lapidados manualmente</p>
		<div class="category_products">
			<div class="container">
				<div class="resCarousel" data-items="2-4-4-4" data-slide="2" data-interval="2000">
					<div class="resCarousel-inner">


						<?php 
$posts = get_posts(array(
    'orderby'   => 'asc',
	'post_type'	=> 'linha_de_cristais'
));
if( $posts ): ?>
						<?php foreach( $posts as $post ): setup_postdata( $post );?>
						<div class="item">
							<figure>
								<figcaption>
									<?php the_title() ?>
								</figcaption>
							</figure>
						</div>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
					<button class='btn btn-default leftRs'>
						<</button>
							<button class='btn btn-default rightRs'>></button>
				</div>
			</div>
		</div>
		<span class="calltoaction">Veja nossa linha completa</span> </div>
</section>

<!-- Maria pia casa -->
<div id="diagonal3"></div>
<section id="wherebuy">
	<div class="container">
		<div id="picture"><img src="<?php echo get_template_directory_uri()?>/assets/images/img_side_maria_pia_casa.png">
		</div>
		<div id="about_maria_pia">
			
<?php
$post_ondecomprar = get_post(35); 
$contents = $post_ondecomprar->post_content;
echo $contents;
?>
		</div>
	</div>
</section>
<!--Fale conosco-->
<section id="contactus">
	<div class="container">
		<div id="data_contact">
			<h2>
				<div class="small">Fale</div>Conosco </h2>
			<p>Entre em contato conosco e tire suas duvidas e peça informações sobre nossos produtos. </p>
			<p>Preencha o formulário ao lado ou entre em contato pelos dados abaixo:</p>
			<p>E-mail contato@ludzcristais.com.br
				<br> Telefone 11 2222 . 44444 </p>
		</div>
		<form id="form_contact">
			<ul>
				<li>
					<input name="nome" type="text" placeholder="Digite aqui o seu nome">
				</li>
				<li>
					<input name="telefone" type="tel" placeholder="Digite aqui o seu telefone">
				</li>
				<li>
					<input name="email" type="email" placeholder="Digite aqui o seu e-mail">
				</li>
				<li>
					<textarea>Digite aqui a sua mensagem</textarea>
				</li>
				<li>
					<input type="submit" class="enviar" title="Enviar" value="Enviar">
				</li>
			</ul>
		</form>
	</div>
</section>

<?php
get_footer();