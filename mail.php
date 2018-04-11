<?php
session_start();

//$to      = 'biuro@stylowegzymsy.pl';
if($_POST['name'] && $_POST['email'] && $_POST['message'])
{
    $to      = 'piterbi@interia.pl';
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $subject = 'Wiadomosc z formularza kontaktowego CeglaneKlimaty od: ' . $name . ' (' . $email . ')';
    $message = 
    'Treść wiadomości: 
'
        
        .$_POST['message'].'
        
    od: '.$name.' ('.$email.'), 
    numer telefonu: '.$phone;
    //$headers = 'From: ' . $name . ' (' . $email . ')';
    $headers = 'From: ' . $email;
    //$headers .= 'Content-Type: text/html; charset=utf-8';

    mail($to, $subject, $message, $headers);

    //echo '<h1>Wiadomość wysłana :)</h1>';
//    $email_info="Wiadomość została wysłana.";
    $email_info='
    <div id="alert-promo" class="alert-promo text-center alert alert-success alert-dismissable">
                <br>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Wiadomość została wysłana pomyślnie.</strong><br>Skontaktujemy się z Państwem.
                <br>
                <br>
            </div>
    
    ';
    $_SESSION['email_info']=$email_info;
    
}
else{
//    echo 'Problem';
//    $email_info="Wystąpił błąd, wiadomość nie została wysłana.";
    $email_info='
    <div id="alert-promo" class="alert-promo text-center alert alert-danger alert-dismissable">
                <br>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Wystąpił błąd, wiadomość nie została wysłana.</strong><br>Spróbuj ponownie.
                <br>
                <br>
            </div>
    ';
    
    $_SESSION['email_info']=$email_info;
}
    
    header('Location: kontakt.php');
    
?>