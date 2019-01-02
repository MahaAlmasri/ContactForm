<?php 
$onderwerp = "een vraag"; 
$ontvanger = "mahaalmasri00@gmail.com"; 

session_start();



if($_POST['submit']) 
{ $reply = $_POST['email']; 
    $naam = $_POST['name']; 
    
    $bericht = $_POST['subject']; 
     
    if(strlen($naam) < 2) 
    {  
     $error .= "<p>Je hebt geen naam ingevuld.</p>"; 
    }  
   
   if(strlen($bericht) < 2) 
   {  
    $error .= "<p>Je hebt geen bericht ingevuld.</p>"; 
   }  

  if (isset($error))  
  {  
   // error afdrukken 
   echo "<p><strong>Je bericht is niet verzonden.</strong></p>";  
   echo $error . "<br />";  
   echo "<p><a href=\"javascript&amp;#058;history.back()\">Probeer opnieuw</a>.<br /><br /></p>"; 
  }  
     
    else 
    { 
     
      // Content-type header instellen om HTML-mail te versturen  
      $headers = "Content-type: text/html; charset=iso-8859-1\r\n";  
      $headers .= "MIME-Version: 1.0\r\n";     
  
      $headers .= "Reply-To: Webmaster <reply@gmail.com>\r\n"; // reply-adres 
      $headers .= "Cc:  maha_ma6@hotmail.com\r\n"; //copy 
      
      $headers .= "From: $naam <$reply>\r\n"; // de afzender van de mail 
      $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n"; 
      $headers .= "X-Priority: 1\r\n"; // 3 voor onbelangrijk  
      $headers .= "Priority: Urgent\r\n"; 
      $headers .= "Importance: High\r\n"; // Low voor onbelangrijk 
      $headers .= "X-MSMail-Priority: High\r\n"; // Low voor onbelangrijk   
       
      /*mail($ontvanger,$onderwerp,$bericht,$headers); */
      echo "<p>Uw bericht is succesvol verzonden. Ik neem met u contact op.</p>"; 
    } 
} 
else {  
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel='stylesheet' href='./css/style.css'/>	

<title>Mijn WebSite</title>

</head>
<body>
  <h1> Contact Form </h1>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>"> 


    <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
</body>
</html>

  <?php 
} 
?> 


