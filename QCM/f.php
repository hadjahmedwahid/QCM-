<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
	
</head>
<body>
<?php
try
{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
$pdo_options);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}



$reponse = $bdd ->query('SELECT * FROM reponse');


$donnees = $reponse->fetch();
echo $donnees['Id'];
?>
 
</body>
</html>