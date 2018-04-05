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
    $email_info="Wiadomość została wysłana.";
    $_SESSION['email_info']="Wiadomość została wysłana.";
    
}
else{
    echo 'Problem';
    $email_info="Wystąpił błąd, wiadomość nie została wysłana.";
    $_SESSION['email_info']="Wystąpił błąd, wiadomość nie została wysłana.";
}
    
    header('Location: kontakt.php');
    
?>