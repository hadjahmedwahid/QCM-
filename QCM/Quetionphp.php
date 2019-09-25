 <?php 
 
                              $contenu = '';
							
							
							$desc = $_POST["Desc"];
							$type = $_POST["type"];
							$sp = $_POST["sp"];
							include 'ConnexionDB.php';
                            							
				
						
							
	 						if(isset($_POST["Desc"])!='' && isset($_POST["type"])!=''&& isset($_POST["sp"])!='')
							{ 
						
						$contenu = " INSERT INTO `qcm`.`questions` (`Id_q`, `Questions`, `idsp`, `type`) VALUES (NULL, '";
							$contenu .= $desc;
							$contenu .="','";
							$contenu .= $sp;
							$contenu .="','";
							$contenu .= $type;
							$contenu .= "')";
							$bdd ->exec ($contenu) ;
						
							
							
					$var2 = $bdd ->query('SELECT max(Id_q) as NB FROM questions');
					$dataQuestion = $var2->fetch();
					$Q = $dataQuestion['NB'];	
                    				
							//********************************reponse 1 *********************************
										$contenu="";
										if(isset($_POST["rep1"]) && isset($_POST["note1"])){
											
											
										 if( isset($_POST["case1"])){ $r1 = 1 ;}else{ $r1 = 0;};
									  
									  
									  $contenu = " INSERT INTO `qcm`.`reponse` (`Id_r`, `reponse`, `Correct`, `Note`, `Id_que`) VALUES (NULL, '";
										$contenu .= $_POST["rep1"];
										$contenu .="','";
										$contenu .= $r1;
										$contenu .="','";
										$contenu .= $_POST["note1"];
										$contenu .="','";
										$contenu .= $Q;
										$contenu .= "')";
										$bdd ->exec ($contenu) ;
									  }
							//********************************reponse 2 *********************************
										$contenu="";
										if(isset($_POST["rep2"]) && isset($_POST["note2"])){
											
											
										 if( isset($_POST["case2"])){ $r2 = 1 ;}else{ $r2 = 0;};
									  
									  
									  $contenu = " INSERT INTO `qcm`.`reponse` (`Id_r`, `reponse`, `Correct`, `Note`, `Id_que`) VALUES (NULL, '";
										$contenu .= $_POST["rep2"];
										$contenu .="','";
										$contenu .= $r2;
										$contenu .="','";
										$contenu .= $_POST["note2"];
										$contenu .="','";
										$contenu .= $Q;
										$contenu .= "')";
										$bdd ->exec ($contenu) ;
									  }		  
									  
							//********************************reponse 3 *********************************
										$contenu="";
										if(isset($_POST["rep3"]) && isset($_POST["note3"])){
											
											
										 if( isset($_POST["case3"])){ $r3 = 1 ;}else{ $r3 = 0;};
									  
									  
									  $contenu = " INSERT INTO `qcm`.`reponse` (`Id_r`, `reponse`, `Correct`, `Note`, `Id_que`) VALUES (NULL, '";
										$contenu .= $_POST["rep3"];
										$contenu .="','";
										$contenu .= $r3;
										$contenu .="','";
										$contenu .= $_POST["note3"];
										$contenu .="','";
										$contenu .= $Q;
										$contenu .= "')";
										$bdd ->exec ($contenu) ;
									  }		  
									  
							//********************************reponse 4 *********************************
										$contenu="";
										if(isset($_POST["rep4"]) && isset($_POST["note4"])){
											
											
										 if( isset($_POST["case4"])){ $r4 = 1 ;}else{ $r4 = 0;};
									  
									  
									  $contenu = " INSERT INTO `qcm`.`reponse` (`Id_r`, `reponse`, `Correct`, `Note`, `Id_que`) VALUES (NULL, '";
										$contenu .= $_POST["rep4"];
										$contenu .="','";
										$contenu .= $r4;
										$contenu .="','";
										$contenu .= $_POST["note4"];
										$contenu .="','";
										$contenu .= $Q;
										$contenu .= "')";
										$bdd ->exec ($contenu) ;
									  }		  
									  
									  
						     echo "<script type='text/javascript'>alert('Question ajoute');</script>";
						     echo "<script type='text/javascript'>window.location='Question.php';</script>";
							}
						
						
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>