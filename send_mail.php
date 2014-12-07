<!doctype html>
<html>
<meta charset="utf-8">

<html>
<meta charset="utf-8">
<title>Turkcell İnovasyon Kulübü</title>
<?php
error_reporting(E_ALL & ~E_NOTICE); 
$con = mysqli_connect("localhost","root","123456","tip_db") or die("Error " . mysqli_error($link)); 
 $query = "SELECT * FROM tip_users where id=7958" or die("Error in the consult.." . mysqli_error($link));
$result = $con->query($query); 
while($row = mysqli_fetch_array($result))
   { 	  
	   
	
	   
	   $message = "Sayın ".$row['name']." ".$row['surname']. ", \r\n";
	   $message .= "Turkcell İnovasyon Platformu(TİP)'nun çalışma gruplarından ";

      
	  if( $row['is_girisimcilik'] == 'Y' ) 
	  {
		$groups[0] = "Girişimcilik Grubu";
	  }
	  if( $row['is_fikri_haklar'] == 'Y' ) 
	  {
		$groups[1] =  "Fikri Haklar Grubu";
	  }
	  if( $row['is_acikkaynakyazilim'] == 'Y' ) 
	  {
		$groups[2] = "Açık Kaynak Yazılım Grubu";
	  }
	  if( $row['is_lisansotesi'] == 'Y' ) 
	  {
		$groups[3] = "Lisans Ötesi Grubu";
	  }
	  
	  $counter = 0;
	  foreach ($groups as $değer) {
		  $counter++;
	    
	  }
	  echo  $counter;
	  if($counter == 1) 
	  {
		  
		  if ($groups[0] == "Girişimcilik Grubu")
		  {
		  	$message .= "Girişimcilik Grubu";
			$temsilci = "Sorularınız varsa TIP Girişimcilik Grubu ile ilgili Ozer Ocek( ozer.ocek@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		  if ($groups[1] == "Fikri Haklar Grubu")
		  {
		  	$message .= "Fikri Haklar Grubu";
			$temsilci = "Sorularınız varsa TIP Fikri Haklar Grubu ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		  if ($groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Açık Kaynak Yazılım Grubu";
		    $temsilci = "Sorularınız varsa TIP Açık Kaynak Yazılım Grubu ile ilgili Esen Tuna ( esen.tuna@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		  if ($groups[3] == "Lisans Ötesi Grubu")
		  {
		  	$message .= "Lisans Ötesi Grubu";
			$temsilci = "Sorularınız varsa TIP Lisans Ötesi Grubu ile ilgili Ceylan Aybars Yazıcı ( ceylan.aybars@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
	  	
		
	  }
	  elseif($counter == 2)
	  {
          if ($groups[0] == "Girişimcilik Grubu" && $groups[1] == "Fikri Haklar Grubu")
		  {
		  	$message .= "Girişimcilik ve Fikri Haklar Grubu";
	        $temsilci = "Sorularınız varsa TIP Lisans Ötesi Grubu ile ilgili Ceylan Aybars Yazıcı ( ceylan.aybars@turkcell.com.tr ) 'yla, TIP Fikri Haklar Grubu ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr )'le iletişime geçebilirsiniz.";
		  }
          if ($groups[0] == "Girişimcilik Grubu" && $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Girişimcilik ve Açık Kaynak Yazılım Grubu";
		    $temsilci = "Sorularınız varsa TIP Girişimcilik Grubu ile ilgili Özer Öcek ( ozer.ocek@turkcell.com.tr ) 'le, TIP Açık Kaynak Yazılım Grubu ile ilgili Esen Tuna ( esen.tuna@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
          if ($groups[0] == "Girişimcilik Grubu" && $groups[3] == "Lisans Ötesi Grubu")
		  {
		  	$message .= "Girişimcilik ve Lisans Ötesi Grubu";
			$temsilci = "Sorularınız varsa; \r\n TIP Girişimcilik Grubu: Özer Öcek ( ozer.ocek@turkcell.com.tr ) , \r\n TIP Lisans Ötesi Grubu: Ceylan Aybars Yazıcı ( ceylan.aybars@turkcell.com.tr )  ile iletişime geçebilirsiniz.";
		  }		  
          if ($groups[1] == "Fikri Haklar Grubu" && $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Fikri Haklar ve Açık Kaynak Yazılım Grubu";
		  }
          if ($groups[1] == "Girişimcilik Grubu"  && $groups[3] == "Lisans Ötesi Grubu")
		  {
		  	$message .= "Girişimcilik ve Lisans Ötesi Grubu";
		  }
          if ($groups[3] == "Lisans Ötesi Grubu" && $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Lisans Ötesi ve Açık Kaynak Yazılım Grubu";
		  }
		
	  }
	  elseif($counter == 3)
	  {
          if ($groups[0] == "Girişimcilik Grubu" && $groups[1] == "Fikri Haklar Grubu" &&  $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Girişimcilik,Fikri Haklar ve Açık Kaynak Yazıım Grubu";
	        $temsilci = "Sorularınız varsa TIP Girişimcilik Grubu ile ilgili Özer Öcek ( ozer.ocek@turkcell.com.tr ) 'le, TIP Fikri Haklar Grubu ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr )'le,TIP Açık Kaynak Yazılım Grubu ile ilgili Esen Tuna (esen.tuna@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		  
          if ($groups[0] == "Girişimcilik Grubu" && $groups[1] == "Fikri Haklar Grubu" &&  $groups[3] == "Lisans Ötesi Grubu")
		  {
		  	$message .= "Girişimcilik,Fikri Haklar ve Lisans Ötesi Grubu";
	        $temsilci = "Sorularınız varsa TIP Girişimcilik Grubu ile ilgili Özer Öcek ( ozer.ocek@turkcell.com.tr ) 'le, TIP Fikri Haklar Grubu ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr )'le,TIP Lisans Ötesi Grubu ile ilgili Ceylan Aybars Yazıcı (ceylan.aybars@turkcell.com.tr) ile iletişime geçebilirsiniz.";
		  }
		  
          if ($groups[1] == "Fikri Haklar Grubu" &&  $groups[3] == "Lisans Ötesi Grubu" && $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Fikri Haklar,Lisans Ötesi ve Açık Kaynak Yazıım Grubu";
	        $temsilci = "Sorularınız varsa TIP Fikri Haklar ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr )'le,TIP Lisans Ötesi Grubu ile ilgili Ceylan Aybars Yazıcı (ceylan.aybars@turkcell.com.tr) ile,TIP Açık Kaynak Yazılım Grubu ile ilgili Esen Tuna (esen.tuna@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		
	  }
	  elseif($counter == 4)
	  {
          if ($groups[0] == "Girişimcilik Grubu" && $groups[1] == "Fikri Haklar Grubu" &&  $groups[3] == "Lisans Ötesi Grubu" && $groups[2] == "Açık Kaynak Yazılım Grubu")
		  {
		  	$message .= "Girişimcilik,Fikri Haklar,Lisans Ötesi ve Açık Kaynak Yazıım Grubu";
	        $temsilci = "Sorularınız varsa TIP Girişimcilik Grubu ile ilgili Özer Öcek ( ozer.ocek@turkcell.com.tr ) 'le,TIP Fikri Haklar ile ilgili Ceren Gecer ( ceren.gecer@consultant.turkcell.com.tr )'le,TIP Lisans Ötesi Grubu ile ilgili Ceylan Aybars Yazıcı (ceylan.aybars@turkcell.com.tr) ile,TIP Açık Kaynak Yazılım Grubu ile ilgili Esen Tuna (esen.tuna@turkcell.com.tr ) ile iletişime geçebilirsiniz.";
		  }
		
	  }	  

	  $message .= " üyeleri arasına katıldınız,tebrik ederiz. \r\n";
	  $message .= "Inside'da üyesi olduğunuz bu";
	  if ( $counter ==1 )
	  {
	     $message .= " grubun ";
	  }
	  else
	  {
	     $message .= " grupların ";
	  }
	  $message .= "size sunduğu fırsatları biliyor musunuz? \r\n";
	  $message .= "Bu fırsatlardan yararlanabilmeniz için üyelik bilgilerinizi güncellemenizi tavsiye ederiz: http://10.201.60.37:8087/index.php?id=".$row['id']." \r\n";
	  $message .= "Not: Üyelik bilgilerini güncelleyen üyelere çalışma grubu temsilcileri tarafından daha detaylı bilgilendirme yapılacaktır. \r\n";
	  $message .= "Turkcell İnovasyon Platformu \r\n";
	  

	
	   /* Mail Gendarme Kısmı  */
	      $headers = "MIME-Version: 1.0" . "\r\n";
	      $headers .= 'Content-type: text/html; charset=iso-8859-9' . "\r\n";
	   // More headers
	      $headers = "From:suleyman.diker@turkcell.com.tr\r\n";
	      $headers .= 'Cc:suleyman.diker@turkcell.com.tr' . "\r\n";
	      $subject = "Turkcell Inovasyon Platformu'na Hosgeldiniz";
		  $email = "suleyman.diker@turkcell.com.tr";
	      $retval = mail($email,$subject,$message,$headers);
	   
   }

 

?>

