<?php get_header(); ?>
<!--slideshow-->
<section id="slideshow">
	<?php echo do_shortcode('[rev_slider alias="home"]'); ?>
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
			$post_ondecomprar = get_post( 2 );
			$contents = $post_ondecomprar->post_excerpt;
			echo $contents;
			?>
			<span class="calltoaction"><a href="<?php echo get_permalink(2)?>">Saiba mais sobre a Lodz</a></span> </div>
	</div>
</section>

<!-- categorias de produtos-->
<div id="diagonal2"></div>
<section id="products">
	<div class="container">
		<h2>
			<div class="small">Linha de</div>Cristais Lodz </h2>
		<p>Confira nossa linha de produtos completa de cristais poloneses lapidados manualmente</p>
		<div class="category_products">
			<div class="container slide">
				<div class="resCarousel" data-items="1-2-4">
					<div class="resCarousel-inner">


						<?php 
$posts = get_posts(array(
    'orderby'   => 'asc',
	'post_type'	=> 'linha_de_cristais',
	'posts_per_page' => -1,
	'orderby'=>'title',
	'order'=>'asc'
	
));
if( $posts ): ?>
						<?php foreach( $posts as $post ): setup_postdata( $post );?>
						<a href="<?php echo get_permalink()?>">
							<div class="item">
								<figure>
									<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title()?>">
									<figcaption>
										<?php the_title() ?>
									</figcaption>
								</figure>
							</div>
						</a>
						<?php endforeach; ?>

						<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
					<button class='btn btn-default leftRs'><img src="<?php echo get_template_directory_uri()?>/assets/images/arrow_left.png"/></button>
					<button class='btn btn-default rightRs'><img src="<?php echo get_template_directory_uri()?>/assets/images/arrow_right.png"></button>
				</div>
					
			</div>
		</div>
		<span class="calltoaction"><a href="http://localhost/lodz/cristais/">Veja nossa linha completa</a></span> </div>
</section>

<!-- Maria pia casa -->
<div id="diagonal3"></div>
<section id="wherebuy">
	<div class="container">
		<div id="picture"><img src="<?php echo get_template_directory_uri()?>/assets/images/img_side_maria_pia_casa.png">
		</div>
		<div id="about_maria_pia">

			<?php
			$post_ondecomprar = get_post( 52 );
			$contents = $post_ondecomprar->post_content;
			echo apply_filters( 'the_content', $contents );
			?>
		</div>
	</div>
</section>
<!--Fale conosco-->
<section id="contactus">
	<div class="container">
		<div id="data_contact">
			<h2><div class="small">Fale</div>Conosco </h2>
					<?php 
					$post_content_fale_conosco = get_post(67);  
					$contents = $post_content_fale_conosco->post_content; 
					echo $contents; 
					?>
		</div>
		<div id="form_contact">
			<?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato"]'); ?>
		</div>
	</div>
</section>

<?php
get_footer();