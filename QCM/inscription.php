<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<!-- custom-theme -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->


<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

</head>

<body>

			<div class="main-page signup-page">
				
			<form name="form1" method="post"  >	
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>First Name* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text"  required name="nom">
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Last Name* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" required name="prenom">
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Email Address* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="email" required name="email" >
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Spécialité  :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" name="Gender" required value="0">
							Etudiant
							</label>
							<label>
								<input type="radio" name="Gender" required value="1">
								Enseignant
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h6>Login Information :</h6>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Password* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" required name="password">
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" required name="confirm">
					
						</div>
						<div class="clearfix"> </div>
				
					<div class="sub_home">
						<form>
							<input type="submit" value="Submit">
							
							
							
						
						<?php	
							
							
							
							
							
							$_SESSION['utilisateur'] = '';
							
							$contenu = '';
							$nom='';
							$prenom='';
							$email='';
							$password='';
							$confirm='';
							$etat = '';
						
							include 'ConnexionDB.php';
                            							
				         
						
							
	 						if(isset($_POST["nom"])!='' && isset($_POST["prenom"])!='' && isset($_POST["email"])!='' && isset($_POST["password"])!='' )
							{ 
						       if( $_POST["password"] != $_POST["confirm"]){
								   echo "<script type='text/javascript'>alert('mot de pass diferent de confermation');</script>";
                                   echo "<script type='text/javascript'>window.location='inscription.php';</script>";
								   }
							   
							   $contenu = '';
							$nom=$_POST["nom"];
							$prenom=$_POST["prenom"];
							$email=$_POST["email"];
							$password=$_POST["password"];
							
							$etat = $_POST["Gender"];
							   
							   
							   
							   
						$contenu = " INSERT INTO `qcm`.`user` (`iduser`, `nom`, `prenom`, `email`, `password`, `etat`) VALUES (NULL, '";
							$contenu .= $nom;
							$contenu .="','";
							$contenu .= $prenom;
							$contenu .="','";
							$contenu .= $email;
							$contenu .="','";
							$contenu .= $password;
							$contenu .="','";
							$contenu .= $etat;
							$contenu .= "')";
							$bdd ->exec ($contenu) ;
						
							echo "<script type='text/javascript'>alert('membre  ajouté');</script>";
							if( $etat == 1){
							echo "<script type='text/javascript'>window.location='index_en.php';</script>";}
							 else{ echo "<script type='text/javascript'>window.location='index_et.php';</script>";}
						
							}
						
						
							
							
							
							
							?>	
							
							
							
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>