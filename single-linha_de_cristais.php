<?php get_header(); ?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/assets/js//fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<div class="banner_top">
<?php $imagem_do_banner= get_field('imagem_do_banner'); ?>
	<img src="<?php echo $imagem_do_banner['url'] ?>" alt="<?php $imagem_do_banner['alt']?>"/>
</div>
<div id="diagonal-content"></div>
<main id="main-cistais">
	<div class="migalha">
		<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
	</div>
	<div class="container content_product">
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
<?php
				// check if the repeater field has rows of data
				if( have_rows('produtos') ):
				    while ( have_rows('produtos') ) : the_row();
				    	$foto_do_produto = get_sub_field('foto_do_produto');
				    	$nome_do_produto = get_sub_field('nome_do_produto');
				?>
						<figure>
				<a href="<?php echo $foto_do_produto['url'] ?>" class="gall_cristais"><img src="<?php echo $foto_do_produto['url'] ?>"></a>
				<figcaption>
					<?php echo $nome_do_produto ?> </figcaption>
			</figure>
				<?php
					endwhile;//itens
				endif;//itens
				?>
		</div>
	</div>
</main>

	<script type="text/javascript">
		$(document).ready(function() {

			$("a.gall_cristais").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});

	
});
	</script>

<?php
get_footer();