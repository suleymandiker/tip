<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Üye Hesabı</title>
</head>

<body>
<?php
$cerez_varmi=$_COOKIE["kul_adi"];// kul_adi altinda cerez varmı diye bakıyoruz varsa $cerez_varmi değişkenininin içi dolu olacaktır. yoksa boş :D
// Yani kullanıcılarımıza göstereceğimiz yerleri bu şekilde kkuullanarak gösterebeiliriz.
// if cerez varmı vs. gerekli yerlere { aç ve } kapat bunun arasındakiler gözükecek örnek şekilde olduğuğ gibi
if($cerez_varmi!="")
{
?>
<table width="50%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="center"> Hesabıza Hoşgeldiniz</td>
  </tr>
  <tr>
    <td width="32%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="67%">&nbsp;</td>
  </tr>
  <tr>
    <td>Kullanıcı Adınız</td>
    <td>:</td>
    <td><?php echo $cerez_varmi;?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="cikis.php">ÇIKIŞ</a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php 
}
else
{
echo "Bu sayfaya sadece kayıtlı kullanıcılarımız erişebilir.";
}
?>
</body>
</html>
