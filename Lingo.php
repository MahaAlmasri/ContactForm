<?php
session_start();

?>

 <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='./css/lingo.css'/>	
    


        <!-- Bootstrap CSS -->
       
        
    
    <title>Mijn WebSite</title>
   <script > 
   console.log(sessionStorage.getItem("letter"));
</script> 

    </head>
    <body>
      <h1> Lingo </h1>
   
     
<?php 
   

   if($_SERVER['REQUEST_METHOD']=='POST')
   {
    
    
    $letters=array('G','O','D');
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

        echo " <center> <form method='POST'  action='" . $_SERVER['PHP_SELF']."'>";
        for ($i=1; $i<=$_SESSION["rows_count"];$i++)
        {    $temArray=$_SESSION["arrays"][$i];
        if ( $temArray[0]==$letters[0])
        echo " <input type='text' name='a1' id='a1' style='background-color:green' readonly  value=". $temArray[0]. "> ";
        else
        echo " <input type='text' name='a1' id='a1' style='background-color:red' readonly value=". $temArray[0]. "> ";
        if ( $temArray[1]==$letters[1])
        echo "<input type='text' name='a2'  id='a2' style='background-color:green' readonly value=". $temArray[1]. "> " ;
        else
        echo "<input type='text' name='a2'  id='a2' style='background-color:red' readonly value=". $temArray[1]. "> " ;
        if ( $temArray[2]==$letters[2])
        echo " <input type='text' name='a3'  id='a3' style='background-color:green' readonly value=". $temArray[2]. "> " ;
        else
        echo " <input type='text' name='a3' id='a3' style='background-color:red' readonly value=". $temArray[2]. "> " ;
        echo "<br>";
        }
        if (($a1 != $letters[0])||($a2 != $letters[1])||($a3 != $letters[2]))
    {   
        if ($a1 == $letters[0])
        echo " <input type='text' name='a1' id='a1' style='background-color:green' readonly  value=". $temArray[0]. "> ";
        else 
        echo " <input type='text' name='a1' id='a1' readonly style='background-color:red'>";
        if ($a2==$letters[1])
        echo "<input type='text'  name='a2'  id='a2' readonly style='background-color:green'  value=". $temArray[1]. "> " ;
        else
        echo " <input type='text' name='a2' id='a2' readonly style='background-color:red' >";
        if ($a3==$letters[2])
        echo " <input type='text'  name='a3' id='a3' readonly style='background-color:green'  value=". $temArray[2]. "> " ;
        else 
        echo " <input type='text' name='a3' id='a3' readonly style='background-color:red' >";
      
    echo "<br> <input class='resultButton' type='submit' value='Result'> " . "<br>" . "</form>" . " </center>"; 
    $_SESSION["rows_count"]+=1;}
    else
    echo "<br> <p> ". " Gefeliciteerd, u heeft gewonnen." . "</p>" . "<br>" . "<br>";
    
  
 
}
else
{
    $_SESSION["rows_count"]=1;
    $_SESSION["arrays"]=array();
   echo "<script>
    sessionStorage.setItem('letter', '1'); </script>";
   
?>
    
    
    <form  method="POST"  action="<?php echo($_SERVER['PHP_SELF']); ?>"> 
        
    
    <br><br>
    
        <input type="text" readonly id="a1" name="a1" style='background-color:white' value="<?php if(isset($_POST["a2"])) {echo htmlentities($_POST["a1"]);}?>"/>
    
        <input type="text" readonly id="a2" name="a2" style='background-color:white' value="<?php if(isset($_POST["a2"])) {echo htmlentities($_POST["a2"]);}?>"/>
    
        <input type="text" readonly id="a3" name="a3" style='background-color:white' value="<?php if(isset($_POST["a3"])) {echo htmlentities($_POST["a3"]);}?>"/>
    <br>
        <input class="resultButton" type="submit" value="Result">
        
    
      </form>

      
    <?php
}
?>
<center>
<button class="button" name="A" onclick="hello('A');">A</button>
<button class="button" name="B" onclick="hello('B');">B</button>
<button class="button" name="C" onclick="hello('C');">C</button>
<button class="button" name="D" onclick="hello('D');">D</button>
<button class="button" name="E" onclick="hello('E');">E</button>
<button class="button" name="F" onclick="hello('F');">F</button>
<button class="button" name="G" onclick="hello('G');">G</button>
<button class="button" name="H" onclick="hello('H');">H</button>
<button class="button" name="I" onclick="hello('I');">I</button>
<button class="button" name="J" onclick="hello('J');">J</button>
<button class="button" name="K" onclick="hello('K');">K</button>
<button class="button" name="L" onclick="hello('L');">L</button>
<button class="button" name="M" onclick="hello('M');">M</button><br>
<button class="button" name="N" onclick="hello('N');">N</button>
<button class="button" name="O" onclick="hello('O');">O</button>
<button class="button" name="P" onclick="hello('P');">P</button>
<button class="button" name="Q" onclick="hello('Q');">Q</button>
<button class="button" name="R" onclick="hello('R');">R</button>
<button class="button" name="S" onclick="hello('S');">S</button>
<button class="button" name="T" onclick="hello('T');">T</button>
<button class="button" name="U" onclick="hello('U');">U</button>
<button class="button" name="V" onclick="hello('V');">V</button>
<button class="button" name="W" onclick="hello('W');">W</button>
<button class="button" name="X" onclick="hello('X');">X</button>
<button class="button" name="Y" onclick="hello('Y');">Y</button>
<button class="button" name="Z" onclick="hello('Z');">Z</button><br></center>
<?= "<script type='text/javascript' src='./js/lingo.js'></script>" ?>
</body>
    </html>
   
   
 

