<?php 
	session_start();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>résultat</title>
    <link href="Content/Site.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/modernizr-2.6.2.js"></script>
	
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
	
				<li><a href='Login.php'>Deconnexion</a></li>
				
				
			
                </ul>
            </div>
        </div>
    </div>
	<div aligh="center">
	
	
	
	
	
	<?php 
	$aff = "<ul>";
	include 'ConnexionDB.php';
	$note = 0;
	$indice = $_SESSION['result'];$i=0;
	$t=0;
	foreach($indice as $element)
	{

      $idr = " SELECT * FROM reponse where Id_r = " .$element;
	  $list = $bdd ->query($idr);
      $data = $list->fetch();
      $sql = "SELECT * FROM questions  where Id_q = " .$data['Id_que'];
      $list2 = $bdd ->query($sql);
      $data2 = $list2->fetch(); 

	if($i %4 == 0){ // echo "<br/>"; 
         // echo $data2['Questions'] . "<br/>";	
          $aff .= '<li style="text-align:centre; color:#black; font-weight: bold">' .$data2['Questions'] . '</li><li><br/></li>'; 
	}
			//echo $element ."&nbsp;";
			if( isset($_POST[$element])){ //echo "coché" ;
				$note += $data['Note'];
				if($data['Note'] > 0){
					$t += $data['Note'];
					$aff .= '<li style="text-align:left; color:green; font-weight: bold">' . $data['reponse'] .'&nbsp;' .$data['Note']. '</li>';
				}else{
					
					$aff .= '<li style="text-align:left; color:red">' . $data['reponse'] .'&nbsp;' .$data['Note']. '</li>';
				}
				
				
				
				
				
				
				
				
			}else{// echo "non coché";
			//$aff .= '<li>' . $data['reponse'] . '&nbsp;&nbsp;0 <br/>'   .'</li>';      




     if($data['Note'] > 0){
		 $t += $data['Note'];
					$aff .= '<li style="text-align:left; color:#FF8040; font-weight: bold">' . $data['reponse'] .'&nbsp; 0</li>';
				}else{
					
					$aff .= '<li>' . $data['reponse'] .'&nbsp; 0</li>';
				}





			};
			//echo "<br/>";
   $i++;
			}
				
	
	
	echo " <h2>la note final est :". $note ."/" .$t."</h2>" ;
	
	
	
	
	
	
	
	
	$aff .= "</ul>";
	echo $aff;
	
	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>