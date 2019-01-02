<?php 

session_start();



if($_POST['submit']) 
{ $reply = $_POST['email']; 
    $naam = $_POST['name']; 
    
    $bericht = $_POST['subject']; 
     
    if($naam == '') 
    {  
     $error .= "<p>Je hebt geen naam ingevuld.</p>"; 
    }  
    if($reply=='') 
   {  
    $error .= "<p>Je hebt geen email ingevuld.</p>"; 
   }  

   if($bericht=='') 
   {  
    $error .= "<p>Je hebt geen bericht ingevuld.</p>"; 
   }  

  if (isset($error))  
  {  
   // error afdrukken 
   echo "<p><strong>Je bericht is niet verzonden. Want:</strong></p>";  
   echo $error . "<br />";  
   echo "<p><a href=' " . $_SERVER['PHP_SELF']. "' > ". "Probeer opnieuw</a>.<br /><br /></p>"; 
  }  
     
    else 
    { 
      
      echo "<p>" . $naam. " ,uw bericht met de subject: " . $bericht. " is succesvol verzonden. Ik neem met u contact op via " .$reply . ".</p>"; 
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
   
<link rel='stylesheet' href='./css/style.css'/>	

<title>Mijn WebSite</title>

</head>
<body>
  <h1> Contact Form </h1>
<form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>"> 


    <label for="name"> Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." >

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." >

    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" ></textarea>

    <input type="submit" value="Submit" name="submit">

  </form>
</body>
</html>

  <?php 
} 
?> 


