<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<script>
function kontrol2()
{
kul_adi=document.form2.kul_adi.value;
parola=document.form2.parola.value;

if(kul_adi=="" || parola=="")
{
alert("Lütfen tüm alanları doldurunuz...");
return false;
}
}
</script>
</head>

<body>
<form name="form2" method="post" action="giris.php">
  <table width="40%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td colspan="3" bgcolor="#99CC99"><div align="center">Kullanıcı Girişi</div></td>
    </tr>
    <tr>
      <td width="39%" bgcolor="#99CC99"><div align="right">Kullanıcı Adınız</div></td>
      <td width="2%" bgcolor="#99CC99">:</td>
      <td width="59%" bgcolor="#99CC99"><input type="text" name="kul_adi"  /></td>
    </tr>
    <tr>
      <td bgcolor="#99CC99"><div align="right">Parola</div></td>
      <td bgcolor="#99CC99">:</td>
      <td bgcolor="#99CC99"><input type="password" name="parola"   /></td>
    </tr>
    <tr>
      <td bgcolor="#99CC99">&nbsp;</td>
      <td bgcolor="#99CC99">&nbsp;</td>
      <td bgcolor="#99CC99"><input type="submit" name="button"  value="Giriş" onclick="return kontrol2();"/></td>
    </tr>
  </table>
</form>
</body>
</html>
