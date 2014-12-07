<?php
$dbhost		="localhost";
$dbuser		="root";//kullaným adýmda root 
$dbpass		="123456";//benim þifrem 123 olduðu için 123 yazýyorym
$dbadi		="tip_db";
	$baglanti=@mysql_connect($dbhost,$dbuser,$dbpass) or die("Veri tabaný ile baðlantý saðlanamýyor!");
	mysql_select_db($dbadi,$baglanti) or die("Veri tabanýna baðlanýlamadý!");
	mysql_query("SET NAMES UTF8");
?>
