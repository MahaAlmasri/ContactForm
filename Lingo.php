<?php
session_start();
?>
 <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
       
        
    
    <title>Mijn WebSite</title>
    
    </head>
    <body>
      <h1> Lingo </h1>
   
     
<?php 
   

   if($_SERVER['REQUEST_METHOD']=='POST')
   {
    
    
    $letters=array('g','o','d');
    $arrlength = count($letters);
    if (!isset($_SESSION["rows_count"]))
    $_SESSION["rows_count"]=1;
    if (!isset($_SESSION["arrays"]))
    $_SESSION["arrays"]=array();
    
    $a1 = $_POST["a1"]; 
    
    $a2 = $_POST["a2"]; 
    
    $a3 = $_POST["a3"];
    $arrNaam="letter".$_SESSION["rows_count"];
    $arrNaam=array($a1,$a2,$a3);
    $_SESSION["arrays"][$_SESSION["rows_count"]]=$arrNaam;
        echo "<br>";
        echo "<form method='POST'  action='" . $_SERVER['PHP_SELF']."'>";
        for ($i=1; $i<=$_SESSION["rows_count"];$i++)
        {    $temArray=$_SESSION["arrays"][$i];
     
        echo " <input type='text' name='a1' value=". $temArray[0]. "> ";
        echo "<input type='text'   name='a2' value=". $temArray[1]. "> " ;
        echo " <input type='text'  name='a3' value=". $temArray[2]. "> " ;
        echo "<br>";
        }
        if (($a1 != $letters[0])||($a2 != $letters[1])||($a3 != $letters[2]))
    {   
        if ($a1 == $letters[0])
        echo " <input type='text' name='a1' value=". $temArray[0]. "> ";
        else 
        echo " <input type='text' name='a1' >";
        if ($a2==$letters[1])
        echo "<input type='text'   name='a2' value=". $temArray[1]. "> " ;
        else
        echo " <input type='text' name='a2' >";
        if ($a3==$letters[2])
        echo " <input type='text'  name='a3' value=". $temArray[2]. "> " ;
        else 
        echo " <input type='text' name='a3' >";
        echo "<br>";
      
    echo "<input type='submit' value='Result'>";
    $_SESSION["rows_count"]+=1;}
    else
    echo "<br> Gefeliciteerd, u heeft gewonnen.";
    
  
 
}
else
{
    $_SESSION["rows_count"]=1;
    $_SESSION["arrays"]=array();
?>
    
    
    <form method="POST"  action="<?php echo($_SERVER['PHP_SELF']); ?>"> 
        
    
    <br><br>
    
        <input type="text" name="a1" value="<?php if(isset($_POST["a1"])) {echo htmlentities($_POST["a1"]);}?>"/>
    
        <input type="text" name="a2" value="<?php if(isset($_POST["a2"])) {echo htmlentities($_POST["a2"]);}?>"/>
    
        <input type="text" name="a3" value="<?php if(isset($_POST["a3"])) {echo htmlentities($_POST["a3"]);}?>"/>
    
        <input type="submit" value="Result">
        
    
      </form>

      </body>
    </html>
   
    <?php
}
?>

 

 

