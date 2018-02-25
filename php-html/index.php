<?php
//visa varningar och felmeddelanden
ini_set("display_errors", 1);
?>

  <?php
  include 'header.php';
  ?>
  <?php
  include 'navigation.php';
  ?>

    <!-- <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Välkommen till</span>
      <span class="site-heading-lower">Stall Humlebo</span>
    </h1> -->
    
<section class="cta">    
  <div class="container">
     <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
          <h1 class="site-heading text-center d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Välkommen till</span>
            <span class="site-heading-lower">Stall Humlebo</span>
            </h1>
            <img src="../img/logo.jpg" alt="" class="logo">
          <h1> <span class="site-heading site-heading-upper text-primary mb-3">Omsorg med hästkrafter</span></h1>
          </div>
        </div>
       </div>
     </div> <!--avslutar cta-inner-->
   </div> <!--avslutar col-xl-9-->
 </div> <!--avslutar row-->
</div><!--avslutar container-->
</section> <!--avslutar section-->


    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="../img/iorbarnen.png" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Senaste från Humlebo</span>
              <span class="section-heading-lower">Nyheter</span>
            </h2>
            <p class="mb-3">Nu har vi öppnat vår hästskola! <br>
             Du kan läsa vidare i länken!</p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="#">Läs mer!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
              </h2>
              <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
    include 'footer.php';
    ?>