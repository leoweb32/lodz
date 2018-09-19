<?php get_header(); ?>
<div id="banner_archive"><img src="<?php echo get_template_directory_uri()?>/assets/images/bg_banner_cristais.jpg">
</div>

<div id="geral_archive">
	<div id="diagonal1"></div>
<div class="migalha">
						<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}?>
		</div>	
	<div class="container-top">	
	<h2><div class="small">Linha de</div>Cristais Lodz </h2>
		<div class="descri">Confira nossa linha de produtos completa de<br>
cristais poloneses lapidados manualmente</div>
		</div>
	<div id="archive_products">
		<div class="container">
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
			<?php endforeach; ?>

			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php
get_footer();