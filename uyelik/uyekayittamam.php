<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>KAy�t Sonucu</title>
</head>

<body>
<?php
include("ayar.php");//Localhosta ve veritaban�na ba�lanmak i�in dosyam�z� buraya �a��rd�k.
$kul_adi=$_POST["kul_adi"];
$parola=$_POST["parola"];   //bu k�s�mda ise uyekayit.php sayfas�ndan gelen verileri �ektik.
$ad_soyad=$_POST["ad_soyad"];

$sorgu=mysql_query("SELECT kul_adi FROM uyeler WHERE kul_adi='$kul_adi'");//Burada daha �nceden ayn� kullan�c� ad�yla kay�t olan varm� diye sorguluyoruz.
if(mysql_num_rows($sorgu)>0)//E�er 0 dan b�y�kse �nceden ayn� kullan�c� ad� ile kay�t olan var demektir.
	{
	echo "$kul_adi ile kay�tl� kullan�c�m�z bulunmaktad�r. L�tfen farkl� bir kullan�c� ad� giriniz.";
	}
else
	{
	$sor=mysql_query("INSERT INTO uyeler(kul_adi,parola,ad_soyad) values('$kul_adi','$parola','$ad_soyad')");//Kay�t yapan sorgu
		if($sor)//Kay�t yap�ld�m� diye bak�yoruz
		{
		echo "Kay�t i�lemi ba�ar�yla ger�ekle�ti";
		}
		else
		{
		echo "HATA! Kay�t yap�lam�yor..";
		}
}
?>
</body>
</html>
