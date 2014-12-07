<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Üye Kayıt Sayfası</title>
<script>
function kontrol()
{
kul_adi=document.form1.kul_adi.value;
parola=document.form1.parola.value;
ad_soyad=document.form1.ad_soyad.value;

if(kul_adi=="" || parola=="" || ad_soyad=="")
{
alert("Lütfen tüm alanları doldurunuz...");
return false;
}
}
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>
<form action="uyekayittamam.php" method="post" name="form1">
  <table width="50%" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="3" bgcolor="#990033"><div align="center" class="style1">Kullanıcı Kayıt Sayfası</div></td>
    </tr>
    <tr>
      <td width="45%" bgcolor="#99CCFF"><div align="right">Kullanıcı Adı</div></td>
      <td width="2%" bgcolor="#990033"><span class="style2">:</span></td>
      <td width="53%" bgcolor="#99CC66"><input type="text" name="kul_adi"  /></td>
    </tr>
    <tr>
      <td bgcolor="#99CCFF"><div align="right">Kullanıcı Şifre</div></td>
      <td bgcolor="#990033"><span class="style2">:</span></td>
      <td bgcolor="#99CC66"><input type="password" name="parola"   /></td>
    </tr>
    <tr>
      <td bgcolor="#99CCFF"><div align="right">Ad Soyad</div></td>
      <td bgcolor="#990033"><span class="style2">:</span></td>
      <td bgcolor="#99CC66"><input type="text" name="ad_soyad"   /></td>
    </tr>
    <tr>
      <td bgcolor="#990033">&nbsp;</td>
      <td bgcolor="#990033">&nbsp;</td>
      <td bgcolor="#990033"><input type="submit" name="button"  value="Kaydol" onclick="return kontrol();"/></td>
    </tr>
  </table>
</form>
</body>
</html>
