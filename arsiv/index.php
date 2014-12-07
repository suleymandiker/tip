<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Remember The Milk signup form - jQuery Validate plugin demo - with friendly permission from the RTM team</title>
	<link rel="stylesheet" href="milk.css"> 
	<!--<link rel="stylesheet" media="screen" href="css/screen.css"> -->

	<script src="../../lib/jquery.js"></script>
	<script src="../../lib/jquery.mockjax.js"></script>
	<script src="../../dist/jquery.validate.js"></script>
			<script type="text/javascript" src="jquery-1.3.2.min.js"></script>


</head>
<body>
	
	
	<?php 
	$con = mysqli_connect("localhost","root","123456","tip_db") or die("Error " . mysqli_error($link)); 
	
	if (empty($_GET)) 
	  {
	     $query = "SELECT * FROM tip_users" or die("Error in the consult.." . mysqli_error($link));
	  }
	else
	 {
	    $query = "SELECT * FROM tip_users where id=".$_GET['id']."" or die("Error in the consult.." . mysqli_error($link));
		$result = $con->query($query); 

		   while($row = mysqli_fetch_array($result))
	           {    
   ?>
<div id="main">
	<div id="content">
		<div id="header">
			<div id="headerlogo">
				<img src="tip.png">
			</div>
		</div>
		<div style="clear: both;">
			<div></div>
		</div>
		<div class="content">
			<?php 
			
		    echo('<br>');
		    echo "  Sayın ".$row['name']." ".$row['surname']. ",";
		    echo('<br>');
		    echo('<br>');
		    echo "  <b>Turkcell İnovasyon Platformu (TİP)</b> üyeleri arasına katıldığınız için tebrik ederiz.";
		    echo('<br>');
		    echo('<br>');
			
		    if( $row['is_acikkaynakyazilim'] =='Y' or  $row['is_lisansotesi'] =='Y' or $row['is_girisimcilik'] =='Y' or $row['is_fikri_haklar'] =='Y')
		    {
		       echo "<font color='red'>Üyesi olduğunuz aşağıdaki grubun/grupların size sunduğu <u><b>fırsatlardan</b></u> haberdar mısınız?</font><br><br>";
  
		      if( $row['is_girisimcilik'] =='Y') 
			    {
		      echo "<b>TİP Girişimcilik Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
		      echo('<br>');
		  	echo "<b>*</b>Birebir silikon vadisi startup mentörleri ile çalışmak,<br>";
		      echo "<b>*</b>İş fikrinizi hayata geçirebilmeniz için kaliteli bir eğitime katılmak,<br>";
		  	echo "<b>*</b>Projenize özel yazılım ve tasarım desteği almak<br>";
		  	echo('<br>');
		     	}
	
		  	  if( $row['is_fikri_haklar'] =='Y') 
			    {
		  	echo "<b>TİP Fikri Haklar Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
		      echo('<br>');
		  	echo "<b>*</b>Her patent başvurusu için 500 TL,<br>";
		      echo "<b>*</b>Patentleşen her başvuru için 1000 TL,<br>";
		  	echo "<b>*</b>Fikri haklarını koruyabilme konusunda eğitim fırsatları<br>";
		  	echo('<br>');
		    	}
	
	
		  	  if( $row['is_lisansotesi'] =='Y') 
			    {
		  	echo "<b>TİP Lisans Ötesi Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
		      echo('<br>');
		  	echo "<b>*</b>Yüksek lisans/doktora indirim fırsatları,<br>";
		      echo "<b>*</b>Lisans ötesi mentörlerinden destek ve tecrübe paylaşımı,<br>";
		  	echo "<b>*</b>Şirket içinde yüksek lisans/doktora yapma fırsatı<br>";
		  	echo('<br>');
		  	    }
	
		  	  if( $row['is_acikkaynakyazilim'] =='Y')
			   {
		  	echo "<b>TİP Açık Kaynak Yazılım Grubu</b>'nun size sunabileceği fırsatlardan bazıları:";
		      echo('<br>');
		  	echo "<b>*</b>Uzman mentörlerle kendini geliştirme fırsatı,<br>";
		      echo "<b>*</b>Hayalindeki uygulamaları gerçekleştirmek için destek<br>";
		  	echo('<br>');
		  	    }
	
              echo "<u>Fırsatlardan yararlanabilmeniz</u> ve <u>haberdar olabilmeniz</u> için <b>üyelik bilgilerinizi güncellemenizi rica ederiz:</b><br><br>";

		    }
	

  
		
			?>
			<div id="signupbox">
				<div id="signuptab">
					<ul>
						<li id="signupcurrent"><a href=" ">Üyelik Bilgi Güncelleme</a>
						</li>

					</ul>
				</div>
				<div id="signupwrap">
					<form class="cmxform" id="signupform" autocomplete="off" method="post" action="">
						
						    <table border="1">
							<tr>
								<td class="label">
									<label id="ltechnical_skills" for="technical_skills">Teknik yetkinlerinizi giriniz?</label>
								</td>
								<td class="field">
									<input id="technical_skills" name="technical_skills" size="30" type="text" value="" placeholder="(Java,Photoshop... gibi)">
								</td> 
							</tr>
							<tr>
								<td class="label">
									<label id="lhobbies" for="hobbies">Hobilerinizi giriniz?</label>
								</td>
								<td class="field">
									<input id="hobbies" name="hobbies" size="30" type="text" value="" placeholder="(Dans,Şiir Yazmak... gibi)" required>
								</td>

							</tr>
							
						    <?php
						    if( $row['is_girisimcilik'] =='Y' )
							     {

	
								
							?>
				        <tr> 
			                  <td class="label">
				              <label id="lfound_company" for="lfound_company">Daha önce şirket kurdunuz mu?</label>
			                  </td>
			                  <td class="field">
				                 <label for="found_company_y">
					                <input type="radio" id="found_company_y" value="Y" name="found_company" required>Evet
				                 </label>
				                 <label for="found_company_n">
					                 <input type="radio" id="found_company_n" value="N" name="found_company">Hayır
				                 </label>
                                 <label for="found_company" class="error"></label>
			                  </td>
		                </tr>
						
				        <tr> 
			                  <td class="label">
				              <label id="ljoin_corporate_entrepreneurship" for="ljoin_corporate_entrepreneurship">Kurumsal Girişimcilik Eğitimlerine Katıldınız Mı?</label>
			                  </td>
			                  <td class="field">
				                 <label for="join_corporate_entrepreneurship_y">
					                <input type="radio" id="found_company_y" value="Y" name="join_corporate_entrepreneurship" required>Evet
				                 </label>
				                 <label for="join_corporate_entrepreneurship_n">
					                 <input type="radio" id="found_company_n" value="N" name="join_corporate_entrepreneurship">Hayır
				                 </label>
                                 <label for="join_corporate_entrepreneurship" class="error"></label>
			                  </td>
		                </tr>
						
				        <tr> 
			                  <td class="label">
				              <label id="lgirisimcilik_active" for="lgirisimcilik_active">Girişimcilik Grubunda Sorumluluk Almak İster Misiniz?</label>
			                  </td>
			                  <td class="field">
				                 <label for="girisimcilik_active">
					                <input type="radio" id="girisimcilik_active_y" value="Y" name="girisimcilik_active" required>Evet
				                 </label>
				                 <label for="join_corporate_entrepreneurship_n">
					                 <input type="radio" id="girisimcilik_active_n" value="N" name="girisimcilik_active">Hayır
				                 </label>
                                 <label for="girisimcilik_active" class="error"></label>
			                  </td>
		                </tr>
						
						
						
				

		    <?php
		     }
		      if( $row['is_fikri_haklar'] =='Y' ) {
				  

	
		  	?>
			
	        <tr> 
                  <td class="label">
	              <label id="lfikri_haklar_active" for="lfikri_haklar_active">Fikri Haklar Grubunda Sorumluluk Almak İster Misiniz?</label>
                  </td>
                  <td class="field">
	                 <label for="fikri_haklar_active">
		                <input type="radio" id="fikri_haklar_active_y" value="Y" name="fikri_haklar_active" required>Evet
	                 </label>
	                 <label for="join_corporate_entrepreneurship_n">
		                 <input type="radio" id="fikri_haklar_active_n" value="N" name="fikri_haklar_active">Hayır
	                 </label>
                     <label for="fikri_haklar_active" class="error"></label>
                  </td>
            </tr>						



						
			<?php	
		}
		if( $row['is_acikkaynakyazilim'] =='Y' ) {
	
		?>
		
        <tr> 
              <td class="label">
              <label id="lcreate_open_source_project" for="lcreate_open_source_project">Mevcutta Açık Kaynak Projeniz Var Mı?</label>
              </td>
              <td class="field">
                 <label for="create_open_source_project_y">
	                <input type="radio" id="create_open_source_project_y" value="Y" name="create_open_source_project" required>Evet
                 </label>
                 <label for="create_open_source_project_n">
	                 <input type="radio" id="create_open_source_project_n" value="N" name="create_open_source_project">Hayır
                 </label>
                 <label for="create_open_source_project" class="error"></label>
              </td>
        </tr>
		
        <tr> 
              <td class="label">
              <label id="ljoin_open_source_project" for="ljoin_open_source_project">Var Olan Açık Kaynak Bir Projeye Katkı Yaptınız Mı?</label>
              </td>
              <td class="field">
                 <label for="join_open_source_project_y">
	                <input type="radio" id="join_open_source_project_y" value="Y" name="join_open_source_project" required>Evet
                 </label>
                 <label for="join_corporate_entrepreneurship_n">
	                 <input type="radio" id="join_open_source_project_n" value="N" name="join_open_source_project">Hayır
                 </label>
                 <label for="join_open_source_project" class="error"></label>
              </td>
        </tr>
		
		
        <tr> 
              <td class="label">
              <label id="ltarget_open_source" for="ltarget_open_source">Açık Kaynak Bir Proje Hayata Geçirme Hedefiniz Var Mı?</label>
              </td>
              <td class="field">
                 <label for="target_open_source_y">
	                <input type="radio" id="target_open_source_y" value="Y" name="target_open_source" required>Evet
                 </label>
                 <label for="target_open_source_n">
	                 <input type="radio" id="target_open_source_n" value="N" name="target_open_source">Hayır
                 </label>
                 <label for="target_open_source" class="error"></label>
              </td>
        </tr>
		
        <tr> 
              <td class="label">
              <label id="lacikkaynakyazilim_active" for="lacikkaynakyazilim_active">Açık Kaynak Grubunda Sorumluluk Almak İster Misiniz?</label>
              </td>
              <td class="field">
                 <label for="target_open_source_y">
	                <input type="radio" id="acikkaynakyazilim_active_y" value="Y" name="acikkaynakyazilim_active" required>Evet
                 </label>
                 <label for="target_open_source_n">
	                 <input type="radio" id="acikkaynakyazilim_active_n" value="N" name="acikkaynakyazilim_active">Hayır
                 </label>
                 <label for="acikkaynakyazilim_active" class="error"></label>
              </td>
        </tr>
		
		<?php
	
		}
	
		if( $row['is_lisansotesi'] =='Y' ) {
		?>
		
        <tr> 
              <td class="label">
              <label id="llisansotesi_mentor" for="llisansotesi_mentor">Lisans Ötesi'nde Mentör Olmak İster Misiniz?</label>
              </td>
              <td class="field">
                 <label for="lisansotesi_mentor_y">
	                <input type="radio" id="lisansotesi_mentor_y" value="Y" name="lisansotesi_mentor" required>Evet
                 </label>
                 <label for="lisansotesi_mentor_n">
	                 <input type="radio" id="lisansotesi_mentor_n" value="N" name="lisansotesi_mentor">Hayır
                 </label>
                 <label for="lisansotesi_mentor" class="error"></label>
              </td>
        </tr>
		
		
        <tr> 
              <td class="label">
              <label id="lthesmaster" for="lthesmaster">Yüksek Lisans/Doktora Teziniz Var Mı?</label>
              </td>
              <td class="field">
                 <label for="thesmaster_y">
	                <input type="radio" id="thesmaster_y" value="Y" name="thesmaster" required>Evet
                 </label>
                 <label for="thesmaster_n">
	                 <input type="radio" id="thesmaster_n" value="N" name="thesmaster">Hayır
                 </label>
                 <label for="thesmaster" class="error"></label>
              </td>
        </tr>
		
        <tr> 
              <td class="label">
              <label id="lcontinue_master" for="lcontinue_master">Yüksek Lisans/Doktoranız Devam Ediyor Mu?</label>
              </td>
              <td class="field">
                 <label for="continue_master_y">
	                <input type="radio" id="continue_master_y" value="Y" name="continue_master" required>Evet
                 </label>
                 <label for="continue_master_n">
	                 <input type="radio" id="continue_master_n" value="N" name="continue_master">Hayır
                 </label>
                 <label for="continue_master" class="error"></label>
              </td>
        </tr>
		
        <tr> 
              <td class="label">
              <label id="ltarget_master" for="ltarget_master">Yüksek Lisans/Doktora Yapmayı Düşünüyor Musunuz?</label>
              </td>
              <td class="field">
                 <label for="target_master_y">
	                <input type="radio" id="target_master_y" value="Y" name="target_master" required>Evet
                 </label>
                 <label for="target_master_n">
	                 <input type="radio" id="target_master_n" value="N" name="target_master">Hayır
                 </label>
                 <label for="target_master" class="error"></label>
              </td>
        </tr>
		
		
        <tr> 
              <td class="label">
              <label id="larticle" for="larticle">Teknik ya da Akademik Bir Makaleye Sahip Misiniz?</label>
              </td>
              <td class="field">
                 <label for="article_y">
	                <input type="radio" id="article_y" value="Y" name="article" required>Evet
                 </label>
                 <label for="article_n">
	                 <input type="radio" id="article_n" value="N" name="article">Hayır
                 </label>
                 <label for="article" class="error"></label>
              </td>
        </tr>
		
        <tr> 
              <td class="label">
              <label id="llisansotesi_active" for="llisansotesi_active">Lisansötesi Grubunda Sorumluluk Almak İster Misiniz?</label>
              </td>
              <td class="field">
                 <label for="lisansotesi_active_y">
	                <input type="radio" id="lisansotesi_active_y" value="Y" name="lisansotesi_active" required>Evet
                 </label>
                 <label for="lisansotesi_active_n">
	                 <input type="radio" id="lisansotesi_active_n" value="N" name="lisansotesi_active">Hayır
                 </label>
                 <label for="lisansotesi_active" class="error"></label>
              </td>
        </tr>
		<?php
	}
			?>
		<tr>
		    <td class="label">
			<label id="lguncelle" for="lguncelle"></label>
			</td>
			<td>
			<br><button  id="Get" type="submit"  name="submit" >Üyelik Bilgilerimi Güncelle</button> 
			</td>
	 </tr>
	 <tr>
		 <td>
		 </td>
		 <td>
	  <?php


	   if (isset($_POST['submit'])) {
	   $bul = array("ı","ş","ü","ç","ğ","ö","İ","Ş","Ü","Ç","Ğ","Ö");
	   $degistir = array("I","S","U","C","G","O","I","S","U","C","G","O");
	   $metin = "Üyelik Bilgileriniz Güncellenmiştir.";
	   //$onlyconsonants = str_replace($bul,$degistir, $metin);
	   //echo strtoupper($onlyconsonants);
	   //echo $metin;
	   
	   if(!isset($technical_skills)) { $technical_skills=''; } 
	   if(!isset($hobbies)) { $hobbies=''; }
	   if(!isset($lisansotesi_mentor)) { $lisansotesi_mentor=''; }
	   if(!isset($thesmaster)) { $thesmaster=''; }
	   if(!isset($continue_master)) { $continue_master=''; }
	   if(!isset($target_master)) { $target_master=''; }
	   if(!isset($article)) { $article=''; }
	   if(!isset($lisansotesi_active)) { $lisansotesi_active=''; }
	   if(!isset($girisimcilik_active)) { $girisimcilik_active=''; }
	   if(!isset($fikri_haklar_active)) { $fikri_haklar_active=''; }
	   if(!isset($acikkaynakyazilim_active)) { $acikkaynakyazilim_active=''; }
	   if(!isset($found_company)) { $found_company=''; }
	   if(!isset($join_corporate_entrepreneurship)) { $join_corporate_entrepreneurship=''; }
	   if(!isset($create_open_source_project)) { $create_open_source_project=''; }
	   if(!isset($join_open_source_project)) { $join_open_source_project=''; }
	   if(!isset($target_open_source)) { $target_open_source=''; }
	   
	   
	   
	   $technical_skills = $_POST['technical_skills'];
	   $hobbies = $_POST['hobbies'];

  
	   if( $row['is_girisimcilik'] =='Y') {
	   $found_company = $_POST['found_company'];
	   $join_corporate_entrepreneurship = $_POST['join_corporate_entrepreneurship'];
	   $girisimcilik_active = $_POST['girisimcilik_active'];
	   }
   
	   	if( $row['is_fikri_haklar'] =='Y') {
	   $fikri_haklar_active = $_POST['fikri_haklar_active'];
		}
	
		if( $row['is_lisansotesi'] =='Y') {
	   $lisansotesi_mentor = $_POST['lisansotesi_mentor'];
	   $thesmaster = $_POST['thesmaster'];
	   $continue_master = $_POST['continue_master'];
	   $target_master = $_POST['target_master'];
	   $article = $_POST['article'];
	   $lisansotesi_active = $_POST['lisansotesi_active'];
	
		}
	
		if( $row['is_acikkaynakyazilim'] =='Y') {
	   $create_open_source_project = $_POST['create_open_source_project'];
	   $join_open_source_project = $_POST['join_open_source_project'];
	   $target_open_source = $_POST['target_open_source'];
	   $acikkaynakyazilim_active = $_POST['acikkaynakyazilim_active'];
		}
		


	
	
	$sql = "UPDATE tip_users set 
	technical_skills='".strtoupper(str_replace($bul,$degistir,$technical_skills))."',
	hobbies ='".strtoupper(str_replace($bul,$degistir,$hobbies))."',
	is_lisansotesi_mentor='".strtoupper(str_replace($bul,$degistir,$lisansotesi_mentor))."',
	is_thesis_master='".strtoupper(str_replace($bul,$degistir,$thesmaster))."',
	is_continue_master='".strtoupper(str_replace($bul,$degistir,$continue_master))."',
	is_target_master='".strtoupper(str_replace($bul,$degistir,$target_master))."',
	is_article='".strtoupper(str_replace($bul,$degistir,$article))."',
	is_lisansotesi_active='".strtoupper(str_replace($bul,$degistir,$lisansotesi_active))."',
	is_girisimcilik_active='".strtoupper(str_replace($bul,$degistir,$girisimcilik_active))."',
	is_fikri_haklar_active='".strtoupper(str_replace($bul,$degistir,$fikri_haklar_active))."',
	is_acikkaynakyazilim_active='".strtoupper(str_replace($bul,$degistir,$acikkaynakyazilim_active))."',
	is_found_company='".strtoupper(str_replace($bul,$degistir,$found_company))."',
	is_join_corporate_entrepreneurship='".strtoupper(str_replace($bul,$degistir,$join_corporate_entrepreneurship))."',
	is_create_open_source_project='".strtoupper(str_replace($bul,$degistir,$create_open_source_project))."',
	is_join_open_source_project='".strtoupper(str_replace($bul,$degistir,$join_open_source_project))."', 
	is_target_open_source='".strtoupper(str_replace($bul,$degistir,$target_open_source))."' where id=".$row['id'];

	echo $sql;


	if ($con->query($sql) === TRUE) 
	    {
	      echo('<br>');
	    echo "<b><font color='green'>Bilgileriniz başarı ile güncellenmiştir.</font></tr>";
		$sql_member_logs="INSERT INTO member_logs(member_id,name,surname,date_time,login_flag,process_flag) VALUES (".$_GET['id'].",'".$row['name']."','".$row['surname']."',DATE_FORMAT(NOW(),'%b %d %Y %h:%i %p'),1,1)";
	    $con->query($sql_member_logs);

	      } 
	else 
	    {
	    echo "Hata oluştu,tekrar deneyiniz.: " . $con->error;
	   }

   
		}
	    }
	    }
							?>
						</td>
						</table>
					</form>
				</div>
			</div>
		</div>
	
	
	</div>
</div>

<h1>jQuery get textbox value example</h1>
 
<h4>TextBox value : <label id="msg"></label></h4>
 
<div style="padding:16px;">
	TextBox : <input type="textbox" value="Type something"></input>
</div>
 

<button id="Set">Set To "ABC"</button> 
<button id="Reset">Reset It</button>
 
<script type="text/javascript">
    $("button:#Get").click(function () {
 
    		v_girisimcilik_active = $('input:radio[name=girisimcilik_active]').filter(":checked").val();
	$('#msg').html(v_girisimcilik_active);
 
    });
 
    $("button:#Reset").click(function () {
 
	$('#msg').html("");
	$('input:textbox').val("");
 
    });
 
    $("button:#Set").click(function () {
 
	$('input:textbox').val("ABC");
	$('#msg').html($('input:textbox').val());
 
    });
	
	$(document).ready(function() {
		$.mockjax({
			url: "emails.action",
			response: function(settings) {
				var email = settings.data.email,
					emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
				this.responseText = "true";
				if ($.inArray(email, emails) !== -1) {
					this.responseText = "false";
				}
			},
			responseTime: 500
		});

		$.mockjax({
			url: "users.action",
			response: function(settings) {
				var user = settings.data.username,
					users = ["asdf", "Peter", "Peter2", "George"];
				this.responseText = "true";
				if ($.inArray(user, users) !== -1) {
					this.responseText = "false";
				}
			},
			responseTime: 500
		});

		// validate signup form on keyup and submit
		var validator = $("#signupform").validate({
			rules: {
				technical_skills: "required",
				hobbies: "required",
				username: {
					required: true,
					minlength: 2,
					remote: "users.action"
				},
				password: {
					required: true,
					minlength: 5
				},
				password_confirm: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true,
					remote: "emails.action"
				},
				dateformat: "required",
				girisim: "required",
				terms: "required",
				found_company: "required"
			},
			messages: {
				technical_skills: "This field is required.",
				hobbies: "This field is required.",
				username: {
					required: "Enter a username",
					minlength: jQuery.validator.format("Enter at least {0} characters"),
					remote: jQuery.validator.format("{0} is already in use")
				},
				password: {
					required: "Provide a password",
					minlength: jQuery.validator.format("Enter at least {0} characters")
				},
				password_confirm: {
					required: "Repeat your password",
					minlength: jQuery.validator.format("Enter at least {0} characters"),
					equalTo: "Enter the same password as above"
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address",
					remote: jQuery.validator.format("{0} is already in use")
				},
				dateformat: "Choose your preferred dateformat",
				girisim: "1Choose your preferred dateformat",
				terms: "",
				found_company: "This field is required."
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			},
			highlight: function(element, errorClass) {
				$(element).parent().next().find("." + errorClass).removeClass("checked");
			}
		});

	});
 
</script>
 

 

</body>
</html>
