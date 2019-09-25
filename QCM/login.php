<?php
		session_start();	
?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>login</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

 <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">


</head>



<body>

	<h1>BIENVENUE</h1>

	<h2>Log in to your Account</h2>
	<div class="w3layoutscontaineragileits">
		<form name="form1" method="post">
		<p>Vous êtes ? </p>
					<input type="radio" name ="specialite" value  = "ET" id = "ET"/><label> Etudiant </label>
						<input type="radio" name ="specialite" value  = "en" id = "en"/><label> Enseignant  </label>
						<br/>
			<input type="text" Name="email" placeholder="EMAIL" >
			<input type="password" Name="Password" placeholder="PASSWORD" required="">
			
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				
				
				
				
						<?php
							$_SESSION['con'] = 'false';
							$_SESSION['utilisateur'] = '';
							
							include 'ConnexionDB.php'; 
							$echec = 'true';
	 						if(isset($_POST["Password"])!='' && isset($_POST["email"])!='')
							{
								$auth = $bdd ->query('SELECT * FROM user');
								while($data = $auth->fetch()){
									if($data['email'] == $_POST["email"] && $data['password'] == $_POST["Password"]  ){  
										$_SESSION['iduer'] = $data['iduer'];
										$_SESSION['utilisateur'] = $data['nom'];
										$_SESSION['email'] = $data['email'];
										$_SESSION['con'] = 'true';
									if($data['etat'] == 0)	{
										echo "<script type='text/javascript'>window.location='index_et.php';</script>";
									}else{
										echo "<script type='text/javascript'>window.location='index_en.php';</script>";
									}
										
										
										break;
									}	
									else
										$echec = 'false';
								}
								if($echec=='false')
									echo'<ul><li align="center" style="color:Red">Nom  ou Email INCORRECTE</li></ul>';
							}

						?>
				
				
				
				
				
				
				<p><a href="Inscription.php">REGISTER NEW ACCOUNT <span>→</span></a></p>
				<br/>
			
			</div>
		</form>
	</div>

	   

</body>
<!-- //Body -->

</html>