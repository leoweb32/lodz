<?php get_header(); ?>
<div id="page">
	<div class="container">
		<div class="migalha">
			<?php if(function_exists('bcn_display'))
				{
					bcn_display();
			}?>
		</div>	
		<main id="content-page">
		  <div id="content">	
			<h1><?php the_title()?></h1>
			<?php the_content() ?>
		  </div>	  
		<div id="images-page"><img src="<?php echo get_the_post_thumbnail_url() ?>"/></div>	
		</main>	
</div>
	
	<section id="contactus">
				<div class="container">
					<div id="data_contact">
						<h2>
							<div class="small">Fale</div>Conosco </h2>
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
</div>
<?php get_footer();?>