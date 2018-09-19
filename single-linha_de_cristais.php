<?php get_header(); ?>
<div id="diagonal-content"></div>
	<main id="main-cistais">
		<div class="migalha">
						<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
		</div>	
		  <div class="container">	
			<div id="content_cristias">
			<h1><div class="small">Cristais Lods</div><?php the_title() ?></h1>
			<?php the_content();?>
			 </div>
			  
			  <div id="thumb_cristais">
				   <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title()?>">
			  </div>
		</div>
		<div id="products-itens">
			<div class="container">	
				<h2>Confira os itens desta linha de produto</h2>
				
			
		</main><!-- #main -->
	</div>
		</div>
<?php get_footer();
