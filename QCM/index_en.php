<?php 
	session_start();
	if($_SESSION['con'] != 'true')
		echo "<script type='text/javascript'>window.location='login.php';</script>";
	
	
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
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
				<li><a href="specialite.php">Spécialités </a></li>
				<li><a href="QCM.php">QCM </a></li>
				<li><a href="Question.php">Question </a></li>
				<li><a href="inscription.php">inscription </a></li>
				<li><a href='Login.php'>Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </div>
	<img src="images/index.jpg" width="1350" height="500" alt="" title="" />
	<div  Align="center"><h2>ESPACE ENSIGNANT  BONJOUR : <?php   echo $_SESSION['utilisateur']  ;    ?></h2></div>
	
	
	
	


    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>