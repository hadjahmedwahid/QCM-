<?php 
	session_start();
	
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCM/QCS</title>
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
			<li><a href="QCM.php">QCM </a></li>
			
				<li><a href='Login.php'>Deconnexion</a></li>
                </ul>
            </div>
        </div>
    </div>
	<h3>génération de QCM/QCS</h3>
	<hr/>
	
	
	<form action="Generator.php" method="post">
	<div class="form-horizontal">
		
		<hr />
		
		<div class="form-group">
			<label class="control-label col-md-2" for="IdUser">Nombre des Questions</label>
			<div class="col-md-10">
				<input class="form-control text-box single-line"  name="nb" type="number" value="" />
				<span class="field-validation-valid text-danger"  data-valmsg-replace="true"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2" for="direction">le type de réponses</label>
			<div class="col-md-10">
				<select data-val="true"  name="type" ><option value="">Selectionner le Type </option>
<option value="1">QCM</option>
<option value="2">QCS</option>
<option value="3">QCM/QCS</option>

</select>
				<span class="field-validation-valid text-danger"  data-valmsg-replace="true"></span>
			</div>
		</div>

			<div class="form-group">
			<label class="control-label col-md-2" for="direction">Spécialités</label>
			<div class="col-md-10">
				<select name="sp" >
				<option value="">Selectionner la Spécialités</option>
				<?php
				include 'ConnexionDB.php';
				$list = $bdd ->query('SELECT * FROM specialite');
								while($data = $list->fetch()){
									$tmp='';
									
									$tmp .= '<option value="' ;
									$tmp .=  $data['idsp'];
						             $tmp.= '"';
									$tmp .= '>';
									$tmp .= $data['codesp'];
									$tmp .= '</option>';
									
									echo $tmp;
								}
				

?>
</select>
				<span class="field-validation-valid text-danger"  data-valmsg-replace="true"></span>
			</div>
		</div>
	
	
	
	<div class="col-md-offset-2 col-md-10">
				<input type="submit" value="Start" class="btn btn-default" />
			</div>
		</div>

    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>