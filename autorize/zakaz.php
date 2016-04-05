<?php
echo "Здравствуйте, ", $_POST['cd-name'], "!<br>";
echo "Ваша компания: ", $_POST['cd-company'], "<br>";
echo "Ваш email: ", $_POST['cd-email'], "<br>";
if ($_POST['budget']==1) echo "Ваш бюджет: <5000$!<br>";
if ($_POST['budget']==2) echo "Ваш бюджет: 5000$-10000$!<br>";
if ($_POST['budget']==3) echo "Ваш бюджет: >10000$!<br>";
$f=fopen('zakazy.txt','a');
$st=print_r($_POST, true);
fwrite($f,$st);
fclose($f);
echo "Заказ принят!";

echo '<form action="demo.php" method="GET" accept-charset="utf8"><input type="submit"></form>';

?>


