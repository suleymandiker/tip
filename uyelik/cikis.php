<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ÇIKIŞ</title>
</head>

<body>
<?php
setcookie("kul_adi","",time()-1);//burada oluşturdugumuz cookie yi sildik ve kullanıcıda sitemizden çıkış yapmış oldu
echo "<a href=\"index.php\">Anasayfa</a>";
?>
</body>
</html>
