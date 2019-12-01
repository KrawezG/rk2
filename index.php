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
 
 

 




 
   <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Моя страничка с рк2</title>
    </head>
    <body>
    <p>Ильин Андрей ИУ4-12Б Вариант 8 Задание 1</p>
    <p><?php
    echo "<div>x | x^2 | x^3</div>";
    for($i = 0; $i<=100 ; $i++){
    $i1=$i*$i;
    $i2=$i*$i*$i;
    echo "<div>$i | $i1 | $i2</div>";
    }
    ?></p>
    <p>Задание 2</p>
    <form action="" method="POST">
    <p>Длина<input selected value="0" type="number" name="dl"></p>
    <p>Ширина<input selected value="0" type="number" name="sh"></p>
    <p>Высота<input selected value="0" type="number" name="vi"></p>
    <select name="option">
    <option selected value="1">Площадь</option>
    <option value="2">Объем</option>
    <option value="3">Площадь и объем</option>
    </select>
    <p><input type="submit" value="Получить результат"></p>
    <p>Результат: <?php
    $dl=$_POST["dl"];
    $sh=$_POST["sh"];
    $vi=$_POST["vi"];
    if($_POST["option"] == "1"){
    $S=$dl*$sh;
    echo "<div>S=$S</div>";
    }
    if($_POST["option"] == "2"){
    $V=$dl*$sh*$vi;
    echo "<div>V=$V</div>";
    }
    if($_POST["option"] == "3"){
    $S=$dl*$sh;
    $V=$dl*$sh*$vi;
    echo "<div>S=$S V=$V</div>";
    }
    ?></p>
    </body>
    </html>
    15 баллов
     
     <html>
<head>
<meta charset="utf-8"> 
     </head>
<body>
<h1>Var3</h1>
<h3>Таблица умножения</h3>
<?php
for($i=1; $i<11; $i++){
for($j=1; $j<11; $j++) {
echo $i, '*', $j, '=', $i*$j, '<br>';
}
}
?>
<form method='GET' action=''>
<h3>Введите число <input name='per' type='text'/></h3><br>
<p>Выберите действие:</p><br>
<p>Квадрат<input name='1' type='radio'/><br></p>
<p>Куб<input name='2' type='radio'/><br></p>
<p>Корень<input name='3' type='radio'/><br><p/>
<input type='submit' value='Отправить'/><br>
</form>
<?php
if (isset($GET['per'])) {
if (isset($GET['1'])) {
echo $GET['per']*$GET['per'];
}
if (isset($GET['2'])) {
echo $GET['per']*$GET['per']*$GET['per'];
}
if (isset($GET['3'])) {
echo sqrt($GET['3']);
}
}
?>
</body>
</html>

