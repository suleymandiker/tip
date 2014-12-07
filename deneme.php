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
            jQuery("#found_company").validate({
                expression: "if (isChecked(SelfID)) return true; else return false;",
                message: "Zorunlu Alandır"
            });
            jQuery("#join_corporate_entrepreneurship").validate({
                expression: "if (isChecked(SelfID)) return true; else return false;",
                message: "Zorunlu Alandır"
            });
            jQuery("#girisimcilik_active").validate({
                expression: "if (isChecked(SelfID)) return true; else return false;",
                message: "Zorunlu Alandır"
            });
            jQuery("#fikri_haklar_active").validate({
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
					
				    <?php
				    if( $row['is_girisimcilik'] =='Y' ) {
   

				     ?>
                    
                    <tr>
                        <td>
                            Daha önce şirket kurdunuz mu?
                        </td>
                        <td>
                            <span id="found_company" class="InputGroup">
                                <label for="found_company_y">
                                    <input type="radio" name="found_company" id="found_company_y" value="1" />Evet
                                </label>
                                <label for="found_company_n">
                                    <input type="radio" name="found_company" id="found_company_n" value="2" />Hayır
                                </label>
                                <br/>
                            </span>
                        </td>
                    </tr>
                    <tr>
						
	                    <tr>
	                        <td>
	                            Kurumsal Girişimcilik Eğitimlerine Katıldınız Mı?
	                        </td>
	                        <td>
	                            <span id="join_corporate_entrepreneurship" class="InputGroup">
	                                <label for="join_corporate_entrepreneurship_y">
	                                    <input type="radio" name="join_corporate_entrepreneurship" id="join_corporate_entrepreneurship_y" value="1" />Evet
	                                </label>
	                                <label for="join_corporate_entrepreneurship_n">
	                                    <input type="radio" name="join_corporate_entrepreneurship" id="join_corporate_entrepreneurship_n" value="2" />Hayır
	                                </label>
	                                <br/>
	                            </span>
	                        </td>
	                    </tr>
	                    <tr>
							
		                    <tr>
		                        <td>
		                            Girişimcilik Grubunda Sorumluluk Almak İster Misiniz?
		                        </td>
		                        <td>
		                            <span id="girisimcilik_active" class="InputGroup">
		                                <label for="girisimcilik_active_y">
		                                    <input type="radio" name="girisimcilik_active" id="girisimcilik_active_y" value="1" />Evet
		                                </label>
		                                <label for="girisimcilik_active_n">
		                                    <input type="radio" name="girisimcilik_active" id="girisimcilik_active_n" value="2" />Hayır
		                                </label>
		                                <br/>
		                            </span>
		                        </td>
		                    </tr>
		                    <tr>
								
								
									
								    <?php
								     }
								      if( $row['is_fikri_haklar'] =='Y' ) {
	
								  	?>
									
									
	                    <tr>
	                        <td>
	                            Fikri Haklar Grubunda Sorumluluk Almak İster Misiniz?
	                        </td>
	                        <td>
	                            <span id="fikri_haklar_active" class="InputGroup">
	                                <label for="fikri_haklar_active_y">
	                                    <input type="radio" name="fikri_haklar_active" id="fikri_haklar_active_y" value="1" />Evet
	                                </label>
	                                <label for="fikri_haklar_active_n">
	                                    <input type="radio" name="fikri_haklar_active" id="fikri_haklar_active_n" value="2" />Hayır
	                                </label>
	                                <br/>
	                            </span>
	                        </td>
	                    </tr>
	                    <tr>
									
							    <?php
							     }
							 }}
							  	?>	
						
                        <td>
                        </td>
                        <td>
						<br><button id="Get" type="submit"  name="submit"  style="background: #EFEFEF;" >Üyelik Bilgilerimi Güncelle</button> 
                        </td>
                    </tr>
                </table>
            </form>



	<h4>TextBox value : <label id="msg"></label></h4>
	
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
					<br><button id="deneme" type="submit"  name="submit"  style="background: #EFEFEF;" >Üyelik Bilgilerimi Güncelle</button> 
                    </td>
                </tr>
            </table>
        </form>
		

 
<script type="text/javascript">
    $("button:#Get").click(function () {
		
     value = $("#technical_skills").attr('value');

 
 
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