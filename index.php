<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Loops </title>
</head>
<body>
<form method="GET" action="#" onsubmit="return validanum1(this)">
<p> Digite Um Número : <input type="text" name="num1"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<h3> Loop - For </h3>
<p> Mostrar Os Números De 0 A 10 </p>
<?php 
//For Em PHP
$num1 = $_GET["num1"];
if (isset($num1))
{
    for($i = 0; $i <= $num1; $i++ )
    {
        echo "$i <br>";
    }
}
?>
<hr>
<form method="GET" action="#"  onsubmit="return validanum2(this)">
<p> Digite Um Número : <input type="text" name="num2"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<h3> Loop - While </h3>
<p> Mostrar Os Números De 0 A 10 </p>
<?php 
//While Em PHP
$num2 = $_GET["num2"];
$i = 0;
if (isset($num2))
{
    while($i <= $num2)
    {
        echo "$i <br>";
        $i++;
    }
}
?>
<hr>
<form method="GET" action="#"  onsubmit="return validanum3(this)">
<p> Digite Um Número : <input type="text" name="num3"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<h3> Loop - Do ... While </h3>
<p> Mostrar Os Números De 0 A 10 </p>
<?php 
//Do While Em PHP
$num3 = $_GET["num3"];
$i = 0;
if (isset($num3))
{
    do
    {
        echo "$i <br>";
        $i++;
    }while($i <= $num3);
}
?>
</body>
</html>