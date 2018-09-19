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
			<h1>
				<div class="small">Cristais Lods</div>
				<?php the_title() ?>
			</h1>
			<?php the_content();?>
		</div>

		<div id="thumb_cristais">
			<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title()?>">
		</div>
	</div>
	<div class="container">
		<h2>Confira os itens desta linha de produto</h2>
	</div>
	<div id="products-itens">
		<div class="container">
			<?php // check if the repeater field has rows of data 
if( have_rows('produtos') ): while ( have_rows('produtos') ) : the_row();  
$imagem_produto = get_sub_field('foto_do_produto');  
$nome_produto = get_sub_field('nome_do_produto'); 			
?>
			<figure>
				<a href="<?php echo $imagem_produto['url'] ?>"><img src="<?php echo $imagem_produto['url'] ?>"></a>
				<figcaption>
					<?php echo $nome_produto ?> </figcaption>
			</figure>
			<? 
	endwhile; 
	endif; 
?>
		</div>
	</div>
</main>
<?php
get_footer();