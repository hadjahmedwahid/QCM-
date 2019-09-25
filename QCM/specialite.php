<?php
		session_start();	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spécialités,</title>
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
<h1>Nouveau  Spécialités :</h1>
<form action="s.php" method="post">
	<div class="form-horizontal">
		
		<hr />
		

       <div class="form-group">
			<label class="control-label col-md-2" for="Objet">Spécialités :</label>
			<div class="col-md-10">
			
				<input name="code" id="Objet"  type="text" value="" required="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="Objet" data-valmsg-replace="true"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="Description">Description </label>
			<div class="col-md-10">
				<textarea cols="50" name="desc" rows="5" required=""> </textarea>
				<span class="field-validation-valid text-danger" data-valmsg-for="Description" data-valmsg-replace="true"></span>
			</div>
		</div>

	<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<input type="submit" value="Create" class="btn btn-default" />
			</div>
		</div>
	</div>
</form>

<hr/>
<h3>Liste des specialité </h3>
<div  Align="center">
<table  border="1px" width="600px" bgcolor="#CED818" bordercolor="#000000">
<?php  
include 'ConnexionDB.php';
echo "<tr>";
echo "<th> Code </th> <th>  Description</th>   ";
echo "</tr>";


$list = $bdd ->query('SELECT * FROM specialite');
								while($data = $list->fetch()){
									$tmp="";
									$tmp .= "<tr>";
									$tmp  .="<td>";
									$tmp .= $data['codesp'];
									$tmp .= "</td>";
									$tmp  .="<td>";
									$tmp .= $data['descsp'];
									$tmp .= "</td>";
									$tmp .= "</tr>";
									echo $tmp;
								}








?>





</table>

</div>


    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>