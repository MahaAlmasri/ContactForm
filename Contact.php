<?php
 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'src/Exception.php';
 require 'src/PHPMailer.php';
 require 'src/SMTP.php';

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

    $inlognaam = 'mail@gmail.com'; // Gebruikersnaam voor smtp-server.
    $wachtwoord = 'wachtwoord';      // Het wachtwoord van de smtp-server
    $doelnaam = 'Naam ontvanger';    // Naam van de ontvanger.
    $doeladres = 'mail@example.com'; // Adres van de ontvanger.
    $onderwerp = 'Onderwerp';        // Onderwerp van het bericht.
    

    $to ="mahaalmasri00@gmail.com" ; //"info@ceecee.community"; 
   $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['subject'];
    

    $headers = "From:" . $from;
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n"; 
    $headers .= "X-Priority: 3\r\n"; // 1 voor belangrijk  
    $headers .= "Priority: Urgent\r\n"; 
    $headers .= "Importance: Low\r\n"; // High voor belangrijk 
    $headers .= "X-MSMail-Priority: Low\r\n"; // High voor belangrijk 
   if( mail($to,$subject,$message,$headers)) {
        echo "Email gestuurd, wij nemen contact met u op";
        } else {
        echo "Email is niet gestuurd!";
        }
 
	
	
$myfile = fopen("contact.txt", "a");

$txt = $_POST['name']."\t"."\t";
fwrite($myfile, $txt);
$txt = $_POST['email']."\t"."\t" ;
fwrite($myfile, $txt);


$txt = $_POST['subject']."\n";
fwrite($myfile, $txt);
fclose($myfile);
echo '<br>'.'<br>'."<a href='index.html'>Return</a>";
}

   ?>