<?php
$dbhost		="localhost";
$dbuser		="root";//kullan�m ad�mda root 
$dbpass		="123456";//benim �ifrem 123 oldu�u i�in 123 yaz�yorym
$dbadi		="tip_db";
	$baglanti=@mysql_connect($dbhost,$dbuser,$dbpass) or die("Veri taban� ile ba�lant� sa�lanam�yor!");
	mysql_select_db($dbadi,$baglanti) or die("Veri taban�na ba�lan�lamad�!");
	mysql_query("SET NAMES UTF8");
?>
