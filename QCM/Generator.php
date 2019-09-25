<?php 
	session_start();
	
?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/modernizr-2.6.2.js"></script>
	<link rel="stylesheet" href="images2/anythingslider.css">
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="images2/jquery.anythingslider.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#resultat').css('display', 'none');
		$('#next').click(function(){alert('ok');});
		//var tbl = document.getElementById("nn").value;
		//alert(tbl);
		var Tmn = 2;
		var sc = 0;
		var tm = '';
		var mn = Tmn;
		//Compteur
		function Go(){
			setTimeout(function(){
				sc--;
				if(sc<0){sc=59; mn--;}
		
				tm=((mn<10)?"0":" ") + mn +":";
				tm+=((sc<10)?"0":" ") + sc +"";
				var x = mn/3;
				if(x<=1 && x>=2/3)
					$('#time').css('color', 'green');
				else if(x<=2/3 && x>=1/3)
					$('#time').css('color', 'orange');
				else
					$('#time').css('color', 'red');

				$('#time').val(tm);
				if(mn == 0 && sc == 0)
					{ alert('Temp Terminer');
				       $('#reponce').hide();
                      window.location='#';				}
				Go();
			}, 1000);
		}
	
		Go();
	
	
		
		
	});/*==  End ready  ==*/
	
	function detailler(){
		document.getElementById('detail').style.display = 'none';
		document.getElementById('contenuDetail').style.display = 'block';
	}
</script>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
		
				
				<li><a href="qcm.php">Nouvele Essai </a></li>
				<li><a href="result.php">Result </a></li>
				<li><a href='Login.php'>Deconnexion</a></li>
				<li id="chrono"><input type="text" id="time" name="time" readonly="yes" style="font-size:28px; margin:15px; font-weight:bolder; border:0"/></li>
                </ul>
            </div>
        </div>
    </div>
	
<br/>	
<br/>
<br/>
<div id= "reponce" >
<?php 

  
include 'ConnexionDB.php';

echo "<form action=\"result.php\" method=\"post\">";
  $sp=   $_POST["sp"];
  if($_POST["type"]== 1){ $sql = "SELECT * FROM questions where idsp =" .$sp ." and type=1  order by rand() limit ";   
  }else if($_POST["type"]== 2){
	 $sql = "SELECT * FROM questions where idsp =" .$sp ." and type = 2 order by rand() limit ";  
  }else{
	 $sql = "SELECT * FROM questions where idsp =" .$sp ."  order by rand() limit ";  
  }
 //$sql = "SELECT * FROM questions where idsp =" .$sp ."  order by rand() limit ";
 $sql .=  $_POST["nb"];
 $tmp1="";
 $indice = array();
$list = $bdd ->query($sql);

								while($data = $list->fetch()){
							if($data['type'] == 1){echo "<div style=\"background-color:#F0F64A\"><li>Choisir la ou les bonne Reponse :</li>";}
							else{echo "<div style=\"background-color:#27BEC9\"><li> Choisir une seul reponse juste</li>";}
									$tmp1="";
									$tmp="<ul>";
									$tmp .= "<div style=\"color:red\"><li><b><i><strong>";
									$tmp .= $data['Questions'];
									$tmp .= "</strong></i></b></li></div>";
									
									
									$tmp .= "</ul>";
									echo $tmp;
									$sql1 = "SELECT * FROM reponse where Id_que = " ; 
									$sql1 .= $data['Id_q'];
                                    $sql1 .=  " order by rand() ";
                                    $list1 = $bdd ->query($sql1);
									$tmp1="<ol>";
									    while($data2 = $list1->fetch()){
											
											$indice[$data2['Id_r']]= $data2['Id_r'];
											$tmp1 .= "<li>";
											$tmp1 .= "<input name=\"";
											$tmp1 .= $data2['Id_r'];
											$tmp1 .= "\"";
											$tmp1 .= "type = \"checkbox\" />&nbsp;&nbsp;";
											$tmp1 .= $data2['reponse'];
											$tmp1 .= "</li>";
											
											echo $tmp1;
											$tmp1="";
											
											
										}
									$tmp1 .= "</ol>";
									echo $tmp1;
									echo "</div>";
									echo "<hr/>";
									
									
									
									
									
									
								}






        $_SESSION['result'] = $indice;
		echo "</div>";
      echo "<input type=\"submit\" value=\"Result\">";


echo "</form >";




?>