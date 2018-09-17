<?php
get_header(); ?>


<!--slideshow-->
<section id="slideshow"><img src="<?php echo get_template_directory_uri()?>/assets/images/slide.jpg" width="100%" height="auto"></section>

<!--About-->
<div id="diagonal1"></div>
<section id="about">
  <div class="container">
    <div id="taca"><img src="<?php echo get_template_directory_uri()?>/assets/images/taca.png" alt="taça lods "></div>
    <div id="text_about">
      <h2>
        <div class="small">Sobre os</div> Cristais Lodz </h2>
      <p>A marca polonesa Lodz Crystals é reconhecida pelo design exclusivo em materiais como o cristal. As taças Lodz são produzidas e lapidadas manualmente, em matéria-prima de alta pureza, trazendo mais brilho e sofisticação para as peças, transformando elas em verdadeiras joias.</p>
      <span class="calltoaction"><a href="#">Saiba mais sobre a Lodz</a></span> </div>
  </div>
</section>

<!-- categorias de produtos-->
<div id="diagonal2"></div>
<section id="products">
  <div class="container">
    <h2><div class="small">linha de</div>Cristais Lodz </h2>
    <p>Confira nossa linha de produtos completa de
      cristais poloneses lapidados manualmente</p>
    <div class="category_products">
      <div class="container">
        <div class="resCarousel" data-items="2-4-4-4" data-slide="2" data-interval="2000" >
          <div class="resCarousel-inner">
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item"> 
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
            <div class="item">
              <figure>
                <figcaption>Teste</figcaption>
              </figure>
            </div>
          </div>
          <button class='btn btn-default leftRs'><</button>
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
    <div id="picture"><img src="<?php echo get_template_directory_uri()?>/assets/images/img_side_maria_pia_casa.png"></div>
    <div id="about_maria_pia"> <img src="<?php echo get_template_directory_uri()?>/assets/images/maria_pia_casa_logo.png" alt="Maria pia casa">
      <p>Os cristais Lodz são vendidos exclusivamente na loja  Maria Pia Casa, uma das lojas de decoração online, que reúne os mais variados modelos de móveis, acessórios, artigos para casa e presentes, 
        com qualidade comprovada e em estoque no Brasil.</p>
      <p> <a href="www.mariapiacasa.com.br" target="_blank">www.mariapiacasa.com.br</a><br>
      </p>
      <address>
      Avenida Brasil, Jd América, 2059 - SP
      Telefone:(11) 3061-3063 
      Vendas e Atendimento das 10h00 às 19h00
      </address>
    </div>
  </div>
</section>
<!--Fale conosco-->
<section id="contactus">
  <div class="container">
    <div id="data_contact">
      <h2><div class="small">Fale</div>Conosco </h2>
      <p>Entre em contato  conosco e tire suas
        duvidas e peça informações sobre nossos produtos. </p>
      <p>Preencha o formulário ao lado ou entre 
        em contato pelos dados abaixo:</p>
      <p>E-mail
        contato@ludzcristais.com.br<br>
        Telefone
        11 2222 . 44444 </p>
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

<?php get_footer();
