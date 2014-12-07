<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>Turkcell İnovasyon Platformu-Üye Bilgiler Güncelleme</title>
	<link rel="stylesheet" href="milk.css"> 
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js">
</script>
    <script src="../javascripts/jquery.validate.js" type="text/javascript"></script>
    <script src="../javascripts/jquery.validation.functions.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery.validate.css" />
    <link rel="stylesheet" type="text/css" href="../stylesheets/style.css" />
	
    <script type="text/javascript">
        /* <![CDATA[ */
        jQuery(function(){
            jQuery("#technical_skills").validate({
                expression: "if (VAL) return true; else return false;",
                message: "Zorunlu Alandır"
            });
            jQuery("#hobbies").validate({
                expression: "if (VAL) return true; else return false;",
                message: "Zorunlu Alandır"
            });
            jQuery("#ValidRadio").validate({
                expression: "if (isChecked(SelfID)) return true; else return false;",
                message: "Zorunlu Alandır"
            });
		
			
        });
        /* ]]> */
    </script>

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
		                <table cellpadding="3" cellspacing="2" border="1">
							
		                    <tr>
		                        <td>
		                            Teknik yetkinlerinizi giriniz?
		                        </td>
		                        <td>
		                            <input type="text" name="technical_skills" id="technical_skills" />
		                        </td>
		                    </tr>
							
		                    <tr>
		                        <td>
		                            Hobilerinizi giriniz?
		                        </td>
		                        <td>
		                            <input type="text" name="hobbies" id="hobbies" />
		                        </td>
		                    </tr>
		                    
		                    <tr>
		                        <td>
		                            Daha önce şirket kurdunuz mu?
		                        </td>
		                        <td>
		                            <span id="ValidRadio" class="InputGroup">
		                                <label for="ValidRadio_1">
		                                    <input type="radio" name="ValidRadio" id="ValidRadio_1" value="1" />Evet
		                                </label>
		                                <label for="ValidRadio_2">
		                                    <input type="radio" name="ValidRadio" id="ValidRadio_2" value="2" />Hayır
		                                </label>
		                                <br/>
		                            </span>
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                        </td>
		                        <td>
								<br><button id="Get" type="submit"  name="submit"  style="background: #EFEFEF;" >Üyelik Bilgilerimi Güncelle</button> 
		                        </td>
		                    </tr>
		                </table>
		            </form>
					
					
					
					
					
	            <form action="" method="post">
	                <table cellpadding="3" cellspacing="2">
						
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
                        <td>
                            Daha önce şirket kurdunuz mu?
                        </td>
                        <td>
                            <span id="ValidRadio" class="InputGroup">
                                <label for="ValidRadio_1">
                                    <input type="radio" name="ValidRadio" id="ValidRadio_1" value="Y" />Evet
                                </label>
                                <label for="ValidRadio_2">
                                    <input type="radio" name="ValidRadio" id="ValidRadio_2" value="N" />Hayır
                                </label>
                                <br/>
                            </span>
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
		<tr>
		    <td class="label">
			<label id="lguncelle" for="lguncelle"></label>
			</td>
			<td>
		                        <td>
		                            <input type="submit" value="Submit" id="FormSubmit" style="background: #EFEFEF;"/>
		                        </td>
		                    </tr>
		                </table>
		            </form>
					
			</td>
	 </tr>
	 <tr>
		 <td>
		 </td>
		 <td>
			 
			 <?php
			 	
		 }
	  	   if (isset($_POST['submit'])) {
	  	   $bul = array("ı","ş","ü","ç","ğ","ö","İ","Ş","Ü","Ç","Ğ","Ö");
	  	   $degistir = array("I","S","U","C","G","O","I","S","U","C","G","O");
	  	   $metin = "Üyelik Bilgileriniz Güncellenmiştir.";
	  	   //$onlyconsonants = str_replace($bul,$degistir, $metin);
	  	   //echo strtoupper($onlyconsonants);
	  	   echo $metin;
		   
		   $technical_skills = $_POST['technical_skills'];
		   $hobbies = $_POST['hobbies'];
		   
		   echo   $technical_skills;
		   echo  $hobbies;
	   }
		   
		   
   
   }}
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
 
<button id="Get">Get TextBox Value</button> 
<button id="Set">Set To "ABC"</button> 
<button id="Reset">Reset It</button>
 
<script type="text/javascript">
    $("button:#Get").click(function () {
 
	$('#msg').html($('input:textbox').val());
 
    });
 
    $("button:#Reset").click(function () {
 
	$('#msg').html("");
	$('input:textbox').val("");
 
    });
 
    $("button:#Set").click(function () {
 
	$('input:textbox').val("ABC");
	$('#msg').html($('input:textbox').val());
 
    });
 
</script>
 


</body>
</html>
