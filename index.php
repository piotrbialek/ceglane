<!DOCTYPE html>
<html lang="en">

  <?php include('structure/head.php'); ?>

  <body>

 <?php include('structure/nav.php'); ?>   

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          
<!--          kafelki na dole                                     -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          
          
              <div class="carousel-item active" style="background-image: url('img/FOTO/56914-8088441.jpg');">
                  <a href="cegly-gipsowe.php">
                    <div class="carousel-caption shadow">
                      <h3>Cegły gipsowe</h3>
                      <p class="d-none d-md-block">ewentualnie krótki opis cegieł</p>
                    </div>
                  </a>
              </div>
            
              <div class="carousel-item" style="background-image: url('img/karuzela/2.jpg');">
                  <a href="kamien-gipsowy.php">
                    <div class="carousel-caption shadow">
                      <h3>Kamień gipsowy</h3>
                      <p class="d-none d-md-block">ewentualnie krótki opis kamienia gipsowego</p>
                    </div>
                  </a>
              </div>

                <div class="carousel-item" style="background-image: url('img/karuzela/2.jpg');">
                  <a href="panele-gipsowe.php">
                    <div class="carousel-caption shadow">
                      <h3>Panele gipsowe</h3>
                      <p class="d-none d-md-block">ewentualnie krótki opis paneli</p>
                    </div>
                  </a>
              </div>

            
              <div class="carousel-item" style="background-image: url('img/karuzela/3.jpg');">
                  <a href="beton-architektoniczny.php">
                    <div class="carousel-caption shadow">
                      <h3>Beton architektoniczny</h3>
                      <p class="d-none d-md-block">ewentualnie krótki opis betonu architektonicznego</p>
                    </div>
                  </a>
              </div>
            
        </div>
          
<!--          strzalki w prawo i lewo                -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="container">
        <h1>
            <div class="title-ck">
<!--            <rect class="square"></rect>-->
                <span class="red">C</span><span id="c"></span>
                <span class="red">k</span><span id="k"></span>
            </div>
        </h1>
            
            <hr class="divider">
            <hr class="divider">
            
        
        <div class="content">
<!--
            <div class="col-lg-6">
                <img class="image-home" src="img/FOTO/kleines-verblender-stegu-gips-verblender-innenbereich-strukturiert-handgefertigt-2.jpg">
            </div>
-->
<!--            <div class="col-lg-6">-->
            <h2><span class="red">O</span> firmie</h2>
<!--            <hr class="divider">-->
            <p>Jesteśmy dynamicznie rozwijającym się przedsiębiorstwem produkcyjnym, które zajmuje się
produkcją cegieł, kamienia i paneli z gipsu oraz betonu architektonicznego. Nasze wyroby
produkowane są według własnej i sprawdzonej receptury, z najlepszego gipsu sztukatorskiego
marki <strong> Knauf </strong> oraz barwników niemieckiej firmy <strong>Bayffevox</strong>. Gwarantuje to najwyższą jakość
                produktów, wysokie walory estetyczne oraz wieloletnią trwałość.</p><p> W naszej ofercie
znajdziecie Państwo wiele wzorów cegieł, kamienia i paneli 3D, które stwarzają
nieograniczone możliwości aranżacyjne, od klasyki po nowoczesność.
Produkowane przez nas dekoracje skierowane są do miłośników dobrego stylu, a zarazem
            praktycznych, ponadczasowych rozwiązań.</p> <p>Sięgając po nasze wyroby mogą Państwo w
prosty, szybki i jednocześnie efektowny sposób przeprowadzić metamorfozę swoich wnętrz.
Prowadzimy sprzedaż zarówno detaliczną, jak i hurtową. Zapraszamy do współpracy
hurtownie i sklepy z artykułami wykończenia wnętrz oraz firmy usługowe zajmujące się
aranżacją wnętrz i remontami. Oferujemy atrakcyjne warunki współpracy. Aby poznać
            szczegóły prosimy o <a href="kontakt.php#form">kontakt</a>.</p>
<!--            </div>-->
<!--            <div>-->
            <img class="image-home img-center" src="img/FOTO/kleines-verblender-stegu-gips-verblender-innenbereich-strukturiert-handgefertigt-2.jpg">
<!--            </div>-->


        
        
        </div>
        
      
    </div>
<?php include('structure/panel-allegro.php'); ?>
<?php include('structure/footer.php'); ?>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="JS/script.js"></script>
      <script src="js/navActive.js"></script>
  </body>

</html>
