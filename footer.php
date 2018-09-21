<footer>
  <div class="container">
    <div id="brand_footer"><img src="<?php echo get_template_directory_uri()?>/assets/images/logo_footer_lodz.png" alt="lodz cristais"/></div>
   
			<?php wp_nav_menu( array(
				'theme_location' => 'left_bottom',
				'menu_id'        => 'left-bottom',
			) ); ?>
			
				<?php wp_nav_menu( array(
				'theme_location' => 'right_bottom',
				'menu_id'        => 'right-bottom',
			) ); ?>
			
    <div id="social">
		<ul>
			<li><a href="https://www.facebook.com/lodzcrystals" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon_facebook.png" alt="Facebook"/></a></li>
			<li><a href="https://www.instagram.com/lodzcrystals/" target="_blank"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon_instagram.png" alt="instagram"/></a></li>
		</ul>  
	</div>
  </div>
</footer>
<script>
     
    </script> 
<script>
$(document).ready(function(){
    $("#menu_mobile").click(function(){
        $(".menu-menu-principal-container").toggle(500);
    });
});
</script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/js_geral.js"></script>

	<?php wp_footer(); ?>

</body>
</html>
