<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Giriş</title>
</head>

<body>
<?php
include("ayar.php");//Localhosta ve veritabanına bağlanmak için dosyamızı buraya çağırdık.
$kul_adi=$_POST["kul_adi"];
$parola=$_POST["parola"];   //bu kısımda ise index.php sayfasından gelen verileri çektik.

$sorgu=mysql_query("SELECT kul_adi FROM uyeler WHERE kul_adi='$kul_adi' and parola='$parola'");//Burada daha önceden aynı kullanıcı adıyla ve parola ile kayıtlı   olan varmı diye sorguluyoruz.
//Eğer var ise o zaman o kullanıcı kayıtlıdır ve oturum açma hakkına sahiptir demektir.
if(mysql_num_rows($sorgu)>0)//Eğer 0 dan büyükse önceden aynı kullanıcı adı ile kayıt olan var demektir.
	{
	echo "Hoşgeldin $kul_adi";
	setcookie("kul_adi",$kul_adi,time()+60*60);/*Arkadaşlar en önemli kısım işte burası burada biz böyle bir kullanıcı olduğunu farkettik ve onun için 60*60 saniyelik yani 1 saat bağlı kalması için bir COOKIE oluşturduk. Bu sayde üyemiz sayfamıza bağlanmış oldu... */
	/*Burada setcookie oluştururken sayfanın en başına php tagları içerisinde  ob_start(); yazılması gerekiy yoksa cookie oluşmaz hata verir.*/
	echo "<br />";//Enterla alt satıra gec	
	echo "<a href=\"uyehesabi.php\">Hesabınız</a>";/*Üye hesabına grmesi için link " lar gözükmesi için önüne ter slaç \ koyamam gerekiyor buda önemli bir noktadır.*/
	}
else
	{
	echo "Yanlış kulanıcı adı veya parola lütfen tekrar deneyiniz.";
	}
?>
</body>
</html>
