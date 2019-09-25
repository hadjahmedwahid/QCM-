<?php 
		
		
		
							$_SESSION['utilisateur'] = '';
							
							$contenu = '';
							
							$code = $_POST["code"];
							$desc = $_POST["desc"];
							include 'ConnexionDB.php';
                            							
				
						
							
	 						if(isset($_POST["code"])!='' && isset($_POST["desc"])!='')
							{ 
						
						$contenu = " INSERT INTO `qcm`.`specialite` (`idsp`, `codesp`, `descsp`) VALUES (NULL, '";
							$contenu .= $code;
							$contenu .="','";
							$contenu .= $desc;
							$contenu .= "')";
							$bdd ->exec ($contenu) ;
						
							echo "<script type='text/javascript'>alert('spécialité ajouté');</script>";
						     echo "<script type='text/javascript'>window.location='index_en.php';</script>";
						
							}
						
						
						
						
						
						?>