<?php
session_start();?>

<!DOCTYPE html>
<html lang="pl">

<?php include('structure/head.php'); ?>

  <body>

<?php include('structure/nav.php');?>
<?php
                    if (isset($_SESSION['email_info']))
                    {
                $email_info=$_SESSION['email_info'];
                    
                
                echo $email_info;

                    }
?>

    <div class="container">
        <div class="title-ck">
            <h1><span class="red">K</span><span id="kontakt"></span></h1>
            <hr class="divider">
            <hr class="divider">
            
        </div>
        <div class="content">
            <div class="bg-faded title">
          
    </div>
        <div class="bg-faded">
            <div class="content">
        <div class="row">
          <div class="col-lg-4">

            <div class="contact-item"><i class="glyphicon glyphicon-phone"></i> 600 058 959</div>
            <div class="contact-item"><i class="glyphicon glyphicon-phone"></i> 692 439 155</div>
            <div class="contact-item">
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="biuro@ceglaneklimaty.pl">biuro@ceglaneklimaty.pl</a>
            </div>
              <i class="glyphicon glyphicon-pencil"></i><i class="icon-large icon-search"></i>
              <h4>Adres:</h4>
            <div class="contact-item">
              ul. Młynek 129,
              <br>
              42-450, Łazy
            </div>
              
             <div class="contact-item">
                  
                 <div class="fb"><a target="_blank" href="#">facebook/CeglaneKlimaty</a></div>
              </div>
              <div class="contact-item">
                  <div class="allegro"><a target="_blank" href="#">allegro/CeglaneKlimaty</a></div>
              </div>
              
              <div class="contact-item">
                  <h4>NIP:</h4>
                <div>6291737983</div>
              </div>
              <div class="contact-item">
                  <h4>REGON:</h4>
                <div>369775318</div>
              </div>
              <div class="contact-item">
                  <h4>Numer rachunku bankowego:</h4>
                    <div>
                  73 2490 0005 0000 4500 5196 0800
                  </div>
              </div>
          </div>
            <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0" id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d385214.92290738795!2d19.07612476943638!3d50.36039565935818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4717205a2a0e1257%3A0x5b87350511994bc9!2zTcWCeW5layAxMjksIMWBYXp5!5e0!3m2!1sen!2spl!4v1504128197286" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
            </div>
      </div>

      <div class="content hideme" id="scroll-form">
        <h2>Formularz kontaktowy
        </h2>
        <hr class="divider">
        <hr class="divider">
        </div>
        <div class="bg-faded">
            <div class="content">
                
                <form method="post" name="contact_form" action="mail.php">
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="name" class="text-heading">Imię i nazwisko<span class="red">*</span></label>
                          <input id="name" type="text" class="form-control" name="name" required placeholder="np. Jan Kowalski">
                        </div>
                        <div class="form-group">
                          <label for="email" class="text-heading">Email<span class="red">*</span></label>
                          <input id="email" type="email" class="form-control" name="email" required placeholder="np. email@email.com">
                        </div>
                        <div class="form-group">
                          <label for="phone" class="text-heading">Numer telefonu</label>
                          <input id="phone" type="tel" class="form-control" name="phone" placeholder="np. 999 888 777">
                        </div>
                      </div>
                      <div class="col-lg-6">
<!--                        <div class="clearfix"></div>-->
                        <div class="form-group col-lg-12">
                          <label for="message" class="text-heading">Wiadomość<span class="red">*</span></label>
                          <textarea id="message" class="form-control" rows="6" name="message" required placeholder="Treść wiadomości"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-danger float-right">Wyślij wiadomość</button>
                        </div>
                      </div>
                      <span class="pad15"><span class="red">*</span> - pole wymagane</span>
                      
                  </div>
                </form>
                <div class="text-info">
                    
                    
<?php
//                    session_start();
                    if (isset($_SESSION['email_info']))
                    {
                $email_info=$_SESSION['email_info'];
                    
                
                echo $email_info;
                unset($_SESSION['email_info']);
                    }
?></div>
                     
            </div>
      </div>
        </div>       
        
        
      
    </div>
    <!-- /.container -->

    <!-- Footer -->
<?php include('structure/panel-allegro.php'); ?> 
<?php include('structure/footer.php'); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="JS/script-kontakt.js"></script>
      <script src="JS/scroll.js"></script>
      <script src="JS/navActive.js"></script>
      <script src="JS/btn-scroll.js"></script>
      <script src="JS/scroll-fade-in.js"></script>
  </body>

</html>
