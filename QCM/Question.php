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
	
	
	<h2>Create Questions</h2>

<form action="Quetionphp.php" method="post">
	<div class="form-horizontal">
		
		<hr />

		<div class="form-group">
			<label class="control-label col-md-2"  for="Description">Description </label>
			<div class="col-md-10">
				<textarea cols="200" id="Description" name="Desc" rows="8">
                                 </textarea>
				<span class="field-validation-valid text-danger" data-valmsg-for="Description" data-valmsg-replace="true"></span>
			</div>
		</div>

		
			<div class="form-group">
			<label class="control-label col-md-2" for="direction"> type :</label>
			<div class="col-md-10">
				<select name="type"  ><option value="0">Selectionner le Type </option>
<option value="1">QCM</option>
<option value="2">QCS</option>


</select>
			
			</div>
		</div>
			<div class="form-group">
			<label class="control-label col-md-2" for="direction">Spécialités</label>
			<div class="col-md-10">
				<select data-val="true"  id="" name="sp"><option value="">Selectionner la Spécialités</option>
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
 <hr/>
 <h3>Ajouter Réponses</h3>
 
 <b><p style="aligne:centre"> Cocher les Réponses correcet : </p></b>
 <div class="form-group">
			<label class="control-label col-md-2" for="Objet">Réponce 1 :</label>
			<div class="col-md-10">
			<input name="case1" type = "checkbox" />
			<input class="form-control text-box single-line" name="rep1" type="text" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="Objet" data-valmsg-replace="true"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="IdUser">Note</label>
			<div class="col-md-10">
				<input class="form-control text-box single-line" name="note1" type="number" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="IdUser" data-valmsg-replace="true"></span>
			</div>
		</div>
		<hr/>
		
		<div class="form-group">
			<label class="control-label col-md-2" for="Objet">Réponce 2 :</label>
			<div class="col-md-10">
			<input 		name="case2"	type = "checkbox" />
				<input class="form-control text-box single-line"  name="rep2" type="text" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="Objet" data-valmsg-replace="true"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="IdUser">Note</label>
			<div class="col-md-10">
				<input class="form-control text-box single-line" name="note2"  type="number" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="IdUser" data-valmsg-replace="true"></span>
			</div>
		</div>
		<hr/>
		
		<div class="form-group">
			<label class="control-label col-md-2" for="Objet">Réponce 3 :</label>
			<div class="col-md-10">
			<input name="case3" type = "checkbox" />
				<input class="form-control text-box single-line" name="rep3" type="text" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="Objet" data-valmsg-replace="true"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="">Note</label>
			<div class="col-md-10">
				<input class="form-control text-box single-line" name="note3" type="number" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="IdUser" data-valmsg-replace="true"></span>
			</div>
		</div>
		<hr/>
		
		<div class="form-group">
			<label class="control-label col-md-2" >Réponce 4 :</label>
			<div class="col-md-10">
			<input name="case4" type = "checkbox" />
				<input class="form-control text-box single-line" name="rep4" type="text" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="Objet" data-valmsg-replace="true"></span>
			</div>
		</div>
 <div class="form-group">
			<label class="control-label col-md-2">Note</label>
			<div class="col-md-10">
				<input class="form-control text-box single-line" name="note4" type="number" value="" />
				<span class="field-validation-valid text-danger" data-valmsg-for="IdUser" data-valmsg-replace="true"></span>
			</div>
		</div>
		<hr/>
 
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<input type="submit" value="Create" class="btn btn-default" />
			</div>
		</div>
	</div>
</form>
	
	
	


    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</body>
</html>