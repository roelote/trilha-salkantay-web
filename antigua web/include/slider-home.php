<section>
<div class="container-fluid mt-0">
                    <div class="row">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                         
                          </ol>

                    <div class="carousel-inner">
                    <div class="item active">
                        <picture>
                        <source media="(min-width: 1201px)" srcset="../images/slider/chinchero-nctravel.jpg">
<!--                         <source media="(min-width: 993px)" srcset="/images/slider/inca-jungle.jpg">
                        <source media="(min-width: 769px)" srcset="/images/slider/inca-jungle.jpg">
                        <source media="(min-width: 545px)" srcset="/images/slider/inca-jungle.jpg"> -->
                        <img src="/images/slider/xs/inca-jungle.jpg" alt="Inca Jungle Trek in Cusco Peru" class="img-resposive w-100" style="height: 650px;">
                        </picture>
                        <div class="carousel-caption">
                              <h3 class="toggleHeading"><a href="http://www.trilhaincacuzco.com/trilhaincadisponibilidade.php"><span class="slider-text"> Trilha Inca Machu Picchu 45 Days</span></a></h3> 
                              <span class="toggleHeading see-more">Veja Mais Sobre Esse Passeio</span>  
                          </div>

                    </div>
                    <div class="item">
                        <picture>
                        <source media="(min-width: 1201px)" srcset="../images/slider/chinchero-nctravel.jpg">
<!--                         <source media="(min-width: 993px)" srcset="/images/slider/chinchero1.jpg">
                        <source media="(min-width: 769px)" srcset="/images/slider/chinchero1.jpg">
                        <source media="(min-width: 545px)" srcset="/images/slider/chinchero1.jpg"> -->
                        <img src="/images/slider/xs/chinchero1.jpg" alt="Inca Jungle Trek in Cusco Peru" class="img-resposive w-100" style="height: 650px;">
                        </picture>

                         <div class="carousel-caption">
                              <h3 class="toggleHeading"><a href="http://www.trilhaincacuzco.com/trilhaincadisponibilidade.php"><span class="slider-text"> Trilha Inca Machu Picchu 46 Days</span></a></h3> 
                              <span class="toggleHeading see-more">Veja Mais Sobre Esse Passeio</span>  
                          </div>


                    </div>
                     
                     <div class="item">
                        <picture>
                        <source media="(min-width: 1201px)" srcset="../images/slider/machu-picchu-nctravel.jpg">
<!--                         <source media="(min-width: 993px)" srcset="/images/slider/lago-titicaca.jpg">
                        <source media="(min-width: 769px)" srcset="/images/slider/lago-titicaca.jpg">
                        <source media="(min-width: 545px)" srcset="/images/slider/lago-titicaca.jpg"> -->
                        <img src="/images/slider/xs/chinchero1.jpg" alt="Inca Jungle Trek in Cusco Peru" class="img-resposive w-100" style="height: 650px;">
                        </picture>

                         <div class="carousel-caption">
                              <h3 class="toggleHeading"><a href="http://www.trilhaincacuzco.com/trilhaincadisponibilidade.php"><span class="slider-text"> Trilha Inca Machu Picchu 47 Days</span></a></h3> 
                              <span class="toggleHeading see-more">Veja Mais Sobre Esse Passeio</span>  
                          </div>


                    </div>


                    </div>

                    </div>
                    </div>
                    </div>
</section>
<section class="menu-bot">
  <div class="container mt-0">
     <ul>

<li><a href="quemsomos.php" title="QUEM SOMOS">QUEM SOMOS</a></li>
<li><a href="/galeria.php?gallery2=Antisuyo Trek&#galleries" title="GALERIA DE FOTOS">GALERIA DE FOTOS</a></li>
<li><a href="depoimentos.php" title="DEPOIMENTOS">DEPOIMENTOS</a></li>
<li><a href="contato.php" title="CONTATO">CONTATO</a></li>
<li><a href="reservas.php" title="RESERVAS">RESERVAS</a></li>
<li><a href="/blog" title="DEPOIMENTOS">BLOG</a></li>
</ul>
  </div>
</section>


<script>
  var carouselContainer = $('.carousel');
var slideInterval = 5000;
  
  function toggleH(){
    $('.toggleHeading').hide()
    var caption = carouselContainer.find('.active').find('.toggleHeading').addClass('animated fadeInRight').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
      function (){
      $(this).removeClass('animated fadeInRight')});
  caption.slideToggle();
  }
  
  function toggleC(){
    $('.toggleCaption').hide()
    var caption = carouselContainer.find('.active').find('.toggleCaption').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
      function (){
      $(this).removeClass('animated fadeInUp')
  });
  caption.slideToggle();
  }
carouselContainer.carousel({
interval: slideInterval, cycle: true, pause: "hover"})
.on('slide.bs.carousel slid.bs.carousel', toggleH).trigger('slide.bs.carousel')
.on('slide.bs.carousel slid.bs.carousel', toggleC).trigger('slide.bs.carousel');
</script>

</div>