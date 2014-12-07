<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>KAyıt Sonucu</title>
</head>

<body>
<?php
include("ayar.php");//Localhosta ve veritabanına bağlanmak için dosyamızı buraya çağırdık.
$kul_adi=$_POST["kul_adi"];
$parola=$_POST["parola"];   //bu kısımda ise uyekayit.php sayfasından gelen verileri çektik.
$ad_soyad=$_POST["ad_soyad"];

$sorgu=mysql_query("SELECT kul_adi FROM uyeler WHERE kul_adi='$kul_adi'");//Burada daha önceden aynı kullanıcı adıyla kayıt olan varmı diye sorguluyoruz.
if(mysql_num_rows($sorgu)>0)//Eğer 0 dan büyükse önceden aynı kullanıcı adı ile kayıt olan var demektir.
	{
	echo "$kul_adi ile kayıtlı kullanıcımız bulunmaktadır. Lütfen farklı bir kullanıcı adı giriniz.";
	}
else
	{
	$sor=mysql_query("INSERT INTO uyeler(kul_adi,parola,ad_soyad) values('$kul_adi','$parola','$ad_soyad')");//Kayıt yapan sorgu
		if($sor)//Kayıt yapıldımı diye bakıyoruz
		{
		echo "Kayıt işlemi başarıyla gerçekleşti";
		}
		else
		{
		echo "HATA! Kayıt yapılamıyor..";
		}
}
?>
</body>
</html>
