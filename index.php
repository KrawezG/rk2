<html>
<head>
<meta charset ="utf-8">
</head>
<body>
<h1> 2 ZADANIE <h1>
<form method="GET", action="">
<p> Введите данные </p> <br>
<p> Введите длину </p> 
 <input type="text", name="length">
 <p> Введите ширину </p> 
<input type="text", name="width">
<p> Введите высоту </p> 
<input type="text", name="height"> <br>
<p> Вычислить: </p> <br>
<input type="checkbox", name="vybor1"> Площадь поверхности  <br>
<input type="checkbox", name="vybor2">  Объем <br>

<input type="submit", value="Отправить данные">
</form>
<?php
$a="$_GET[lenght]";
$b="$_GET[width]";
$c="$_GET[height]";
$v=
$s=0;
if ($_GET[vybor1]=true) {
$s==2*$a*$b+2*$b*$c+2*$a*$c;
echo " Площадь поверхности=$s";
}
if ($_GET[vybor2]=true) {
$v==$a*$b*$c;
echo " Объем=$v";
}

?>
</body>
</html>
