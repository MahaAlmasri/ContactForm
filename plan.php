<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/MijnPdresBookStyle.css">
<title>Mijn Plan</title>
</head>
<body>
<img src='.\images\CodeGorillaLogo.jpg' width='400px' height='400px'   style='float:left'> <br><br><br> <font size='8'><div align='center' style='font-weight:bolder'; float:'right'>Enschede </div><br><div align='center' style='font-weight:bolder'; float:'right'>Syllabus </div></font> <br><font size='5'><div align='center' style='font-weight:bold'; float:'right'>December 2018</div>
<b><table margin='0' border='0' width = 100%>

<?php
$movies = array(

    array('Front-end development' , 'General development' ),
    array('HTML' , 'Scrum'  ),
    array('CSS' , 'IDE'  ),
    array('Bootstrap' , 'Version control'),
    array('Javascript' , 'Cloud deployment'),
    array('Angular' , 'OWASP websecurity' ),
    array(' ',' '),
    array('Back-end development' , 'Soft skills'  ),
    array('PHP' , 'Self improvement'  ),
    array('Laravel' , 'Communication'),
    array('MySQL' , 'Problem solving'),
    array('Linux' , 'Time management')
);
foreach( $movies as $movie )
{
    echo '<tr>';
    foreach( $movie as $key )
    {
        echo "<td align='center' height='50px' >".$key."</td></font>";
    }
    echo '</tr><br>';
}
echo '</b></table></font>';
?>

</body>
</html>
