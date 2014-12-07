<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<style type="text/css">
		#ff label{
			display:block;
			width:100px;
		}
	</style>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#ff').form({
				url:'form3_proc.php',
				onSubmit:function(){
					return $(this).form('validate');
				},
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
			});
		});
		
			<meta charset="utf-8">
	<title>Test for jQuery validate() plugin</title>

	<script>
	// only for demo purposes
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$(document).ready(function() {
		$("#form1").validate();
		$("#selecttest").validate();
	});
	</script>

	</script>
</head>

<?php 
$con = mysqli_connect("localhost","root","123456","tip_db") or die("Error " . mysqli_error($link)); 



if (empty($_GET)) {
  $query = "SELECT * FROM tip_users" or die("Error in the consult.." . mysqli_error($link));
}
else
{
  $query = "SELECT * FROM tip_users where id=".$_GET['id']."" or die("Error in the consult.." . mysqli_error($link));


$result = $con->query($query); 


while($row = mysqli_fetch_array($result))
   { 
   
  $sql_member_logs="INSERT INTO member_logs(member_id,name,surname,date_time,login_flag,process_flag) VALUES (".$_GET['id'].",'".$row['name']."','".$row['surname']."',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'),1,0)";
  $con->query($sql_member_logs);
	
  echo('<br>');
  echo "  Sayın ".$row['name']." ".$row['surname']. ",";
  echo('<br>');
  echo('<br>');
  echo "  <b>Turkcell İnovasyon Platformu (TİP)</b> üyeleri arasına katıldığınız için tebrik ederiz.";
  echo('<br>');
  echo('<br>');
  
  if( $row['is_acikkaynakyazilim'] =='Y' or  $row['is_lisansotesi'] =='Y' or $row['is_girisimcilik'] =='Y' or $row['is_fikri_haklar'] =='Y')
  {
  echo "<font color='red'>Üyesi olduğunuz grubun/grupların size sunduğu <u><b>fırsatlardan</b></u> haberdar mısınız?</font><br><br>";
  
    if( $row['is_girisimcilik'] =='Y') {
    echo "<b>TİP Girişimcilik Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
    echo('<br>');
	echo "<b>*</b>Birebir silikon vadisi startup mentörleri ile çalışmak,<br>";
    echo "<b>*</b>İş fikrinizi hayata geçirebilmeniz için kaliteli bir eğitime katılmak,<br>";
	echo "<b>*</b>Projenize özel yazılım ve tasarım desteği almak<br>";
	echo('<br>');
	}
	
	if( $row['is_fikri_haklar'] =='Y') {
	echo "<b>TİP Fikri Haklar Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
    echo('<br>');
	echo "<b>*</b>Her patent başvurusu için 500 TL,<br>";
    echo "<b>*</b>Patentleşen her başvuru için 1000 TL,<br>";
	echo "<b>*</b>Fikri haklarını koruyabilme konusunda eğitim fırsatları<br>";
	echo('<br>');
	}
	
	
	if( $row['is_lisansotesi'] =='Y') {
	echo "<b>TİP Lisans Ötesi Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
    echo('<br>');
	echo "<b>*</b>Yüksek lisans/doktora indirim fırsatları,<br>";
    echo "<b>*</b>Lisans ötesi mentörlerinden destek ve tecrübe paylaşımı,<br>";
	echo "<b>*</b>Şirket içinde yüksek lisans/doktora yapma fırsatı<br>";
	echo('<br>');
	}
	
	if( $row['is_acikkaynakyazilim'] =='Y') {
	echo "<b>TİP Açık Kaynak Yazılım Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
    echo('<br>');
	echo "<b>*</b>Uzman mentörlerle kendini geliştirme fırsatı,<br>";
    echo "<b>*</b>Hayalindeki uygulamaları gerçekleştirmek için destek<br>";
	echo('<br>');
	}
	


  }
  
  
 ?>
 
   <u>Fırsatlardan yararlanabilmeniz</u> ve <u>haberdar olabilmeniz</u> için <b>üyelik bilgilerinizi güncellemenizi rica ederiz:</b>
   <br>
   <br>
  
   <table border="0">
  <form name="tip_user" action="" method="post">
  <tr>
  <td>Teknik yeteneklerinizi giriniz?</td>
   <td><input class="easyui-validatebox"  type="text"  size="25" name="txt_technical_skills"  required="true"> (Java,Photoshop... gibi)</td>
  </tr>
    <td>Hobilerinizi giriniz?</td> 
   <td><input class="easyui-validatebox" type="text" size="25" name="txt_hobbies" required="true"> (Fotoğrafçılık,Şiir Yazmak... gibi)</td>
  </tr>
 
 <?php
 if( $row['is_girisimcilik'] =='Y' ) {
   

  ?>
  

     <td>Daha önce şirket kurdunuz mu?</td>
   <td>
					<input type="radio" value="Y" name="txt_is_found_company" required>Evet
					<input type="radio"  value="N" name="txt_is_found_company">Hayır
   </td>
  </tr>
  <tr>
      <td>Kurumsal Girişimcilik Eğitimlerine Katıldınız Mı?</td>
   <td>
        <input type="radio" name="txt_is_join_corporate_entrepreneurship"  value="Y" required>Evet
        <input type="radio" name="txt_is_join_corporate_entrepreneurship" value="N">Hayır
  </tr>
    <tr>
      <td>Girişimcilik Grubunda Sorumluluk Almak İster Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_girisimcilik_active" value="Y" required>Evet
        <input type="radio" name="txt_is_girisimcilik_active" value="N">Hayır
  </tr>


  <?php
   }
    if( $row['is_fikri_haklar'] =='Y' ) {
	
	?>
	    <tr>
      <td>Fikri Haklar Grubunda Sorumluluk Almak İster Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_fikri_haklar_active" value="Y" required>Evet
        <input type="radio" name="txt_is_fikri_haklar_active" value="N">Hayır
  </tr>
	
	<?php
	}
	
	if( $row['is_acikkaynakyazilim'] =='Y' ) {
	
	?>
		    <tr>
      <td>Mevcutta Açık Kaynak Projeniz Var Mı?</td>
   <td>
        <input type="radio" name="txt_is_create_open_source_project" value="Y" required>Evet
        <input type="radio" name="txt_is_create_open_source_project" value="N">Hayır
  </tr>
  		    <tr>
      <td>Var Olan Açık Kaynak Bir Projeye Katkı Yaptınız Mı?</td>
   <td>
        <input type="radio" name="txt_is_join_open_source_project" value="Y" required>Evet
        <input type="radio" name="txt_is_join_open_source_project" value="N">Hayır
  </tr>
  <tr>
        <td>İlerde Açık Kaynak Bir Proje Hayata Geçirme Hedefiniz Var Mı?</td>
   <td>
        <input type="radio" name="txt_is_target_open_source" value="Y" required>Evet
        <input type="radio" name="txt_is_target_open_source" value="N">Hayır
  </tr>
    <tr>
      <td>Açık Kaynak Grubunda Sorumluluk Almak İster Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_acikkaynakyazilim_active" value="Y" required>Evet
        <input type="radio" name="txt_is_acikkaynakyazilim_active" value="N">Hayır
  </tr>
    
	<?php
	
	}
	
	if( $row['is_lisansotesi'] =='Y' ) {
	?>
	
  <tr>
        <td>Lisans Ötesi'nde Mentör Olmak İster Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_lisansotesi_mentor" value="Y" required>Evet
        <input type="radio" name="txt_is_lisansotesi_mentor" value="N">Hayır
  </tr>
    <tr>
        <td>Yüksek Lisans/Doktora Teziniz Var Mı?</td>
   <td>
        <input type="radio" name="txt_is_thesis_master" value="Y" required>Evet
        <input type="radio" name="txt_is_thesis_master" value="N">Hayır
  </tr>
      <tr>
        <td>Yüksek Lisans/Doktoranız Devam Ediyor Mu?</td>
   <td>
        <input type="radio" name="txt_is_continue_master" value="Y" required>Evet
        <input type="radio" name="txt_is_continue_master" value="N" required>Hayır
  </tr>
        <tr>
        <td>Yüksek Lisans/Doktora Yapmayı Düşünüyor Musunuz?</td>
   <td>
        <input type="radio" name="txt_is_target_master" value="Y" required>Evet
        <input type="radio" name="txt_is_target_master" value="N" required>Hayır
  </tr>
          <tr>
        <td>Teknik ya da Akademik Bir Makaleye Sahip Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_article" value="Y" required>Evet
        <input type="radio" name="txt_is_article" value="N" required>Hayır
  </tr>
  <tr>
          <td>Lisansötesi Grubunda Sorumluluk Almak İster Misiniz?</td>
   <td>
        <input type="radio" name="txt_is_lisansotesi_active" value="Y" required>Evet
        <input type="radio" name="txt_is_lisansotesi_active" value="N" required>Hayır
  </tr>
	<?php
	}
	?>
	  <tr>
  <td></td>
   <td>
        <br><input type="submit" name="submit" value="Üyelik Bilgilerimi Güncelle"/>
  </td>
 </tr>
 <tr>
 <td></td>
 <td>
	<?php

   if (isset($_POST['submit'])) {
   $bul = array("ı","ş","ü","ç","ğ","ö","İ","Ş","Ü","Ç","Ğ","Ö");
   $degistir = array("I","S","U","C","G","O","I","S","U","C","G","O");
   $metin = "Üyelik Bilgileriniz Güncellenmiştir.";
   //$onlyconsonants = str_replace($bul,$degistir, $metin);
   //echo strtoupper($onlyconsonants);
   //echo $metin;
 
  

if(!isset($txt_technical_skills)) { $txt_technical_skills=''; } 
if(!isset($txt_hobbies)) { $txt_hobbies=''; }
if(!isset($txt_is_lisansotesi_mentor)) { $txt_is_lisansotesi_mentor=''; }
if(!isset($txt_is_thesis_master)) { $txt_is_thesis_master=''; }
if(!isset($txt_is_continue_master)) { $txt_is_continue_master=''; }
if(!isset($txt_is_target_master)) { $txt_is_target_master=''; }
if(!isset($txt_is_article)) { $txt_is_article=''; }
if(!isset($txt_is_lisansotesi_active)) { $txt_is_lisansotesi_active=''; }
if(!isset($txt_is_girisimcilik_active)) { $txt_is_girisimcilik_active=''; }
if(!isset($txt_is_fikri_haklar_active)) { $txt_is_fikri_haklar_active=''; }
if(!isset($txt_is_acikkaynakyazilim_active)) { $txt_is_acikkaynakyazilim_active=''; }
if(!isset($txt_is_found_company)) { $txt_is_found_company=''; }
if(!isset($txt_is_join_corporate_entrepreneurship)) { $txt_is_join_corporate_entrepreneurship=''; }
if(!isset($txt_is_create_open_source_project)) { $txt_is_create_open_source_project=''; }
if(!isset($txt_is_join_open_source_project)) { $txt_is_join_open_source_project=''; }
if(!isset($txt_is_target_open_source)) { $txt_is_target_open_source=''; }


  
   $txt_technical_skills = $_POST['txt_technical_skills'];
   $txt_hobbies = $_POST['txt_hobbies'];

  
   if( $row['is_girisimcilik'] =='Y') {
   $txt_is_found_company = $_POST['txt_is_found_company'];
   $txt_is_join_corporate_entrepreneurship = $_POST['txt_is_join_corporate_entrepreneurship'];
   $txt_is_girisimcilik_active = $_POST['txt_is_girisimcilik_active'];
   }
   
   	if( $row['is_fikri_haklar'] =='Y') {
   $txt_is_fikri_haklar_active = $_POST['txt_is_fikri_haklar_active'];
	}
	
	if( $row['is_lisansotesi'] =='Y') {
   $txt_is_lisansotesi_mentor = $_POST['txt_is_lisansotesi_mentor'];
   $txt_is_thesis_master = $_POST['txt_is_thesis_master'];
   $txt_is_continue_master = $_POST['txt_is_continue_master'];
   $txt_is_target_master = $_POST['txt_is_target_master'];
   $txt_is_article = $_POST['txt_is_article'];
   $txt_is_lisansotesi_active = $_POST['txt_is_lisansotesi_active'];
	
	}
	
	if( $row['is_acikkaynakyazilim'] =='Y') {
   $txt_is_create_open_source_project = $_POST['txt_is_create_open_source_project'];
   $txt_is_join_open_source_project = $_POST['txt_is_join_open_source_project'];
   $txt_is_target_open_source = $_POST['txt_is_target_open_source'];
   $txt_is_acikkaynakyazilim_active = $_POST['txt_is_acikkaynakyazilim_active'];
	}
	
	
$sql = "UPDATE tip_users set 
technical_skills='".strtoupper(str_replace($bul,$degistir,$txt_technical_skills))."',
hobbies ='".strtoupper(str_replace($bul,$degistir,$txt_hobbies))."',
is_lisansotesi_mentor='".strtoupper(str_replace($bul,$degistir,$txt_is_lisansotesi_mentor))."',
is_thesis_master='".strtoupper(str_replace($bul,$degistir,$txt_is_thesis_master))."',
is_continue_master='".strtoupper(str_replace($bul,$degistir,$txt_is_continue_master))."',
is_target_master='".strtoupper(str_replace($bul,$degistir,$txt_is_target_master))."',
is_article='".strtoupper(str_replace($bul,$degistir,$txt_is_article))."',
is_lisansotesi_active='".strtoupper(str_replace($bul,$degistir,$txt_is_lisansotesi_active))."',
is_girisimcilik_active='".strtoupper(str_replace($bul,$degistir,$txt_is_girisimcilik_active))."',
is_fikri_haklar_active='".strtoupper(str_replace($bul,$degistir,$txt_is_fikri_haklar_active))."',
is_acikkaynakyazilim_active='".strtoupper(str_replace($bul,$degistir,$txt_is_acikkaynakyazilim_active))."',
is_found_company='".strtoupper(str_replace($bul,$degistir,$txt_is_found_company))."',
is_join_corporate_entrepreneurship='".strtoupper(str_replace($bul,$degistir,$txt_is_join_corporate_entrepreneurship))."',
is_create_open_source_project='".strtoupper(str_replace($bul,$degistir,$txt_is_create_open_source_project))."',
is_join_open_source_project='".strtoupper(str_replace($bul,$degistir,$txt_is_join_open_source_project))."', 
is_target_open_source='".strtoupper(str_replace($bul,$degistir,$txt_is_target_open_source))."' where id=".$row['id'];

echo $sql;



//$query = "SELECT * FROM tip_users where id=".$_GET['id']."" or die("Error in the consult.." . mysqli_error($link));
  
  //insert into member_logs(member_id,name,surname,date_time) values(109,'SULEYMAN','DIKER',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'));

if ($con->query($sql) === TRUE) {
      echo('<br>');
    echo "<b><font color='green'>Bilgileriniz başarı ile güncellenmiştir.</font></tr>";
	$sql_member_logs="INSERT INTO member_logs(member_id,name,surname,date_time,login_flag,process_flag) VALUES (".$_GET['id'].",'".$row['name']."','".$row['surname']."',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'),1,1)";
    $con->query($sql_member_logs);

} else {
    echo "Hata oluştu,tekrar deneyiniz.: " . $con->error;
}
   }
   }
   }
?>   
	  </table>