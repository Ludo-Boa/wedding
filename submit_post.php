<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=mariage;charset=utf8', 'root', 'lb171177!', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO confirmations (nom, prenom, nb_adulte, nb_enfant, reponse, date_reponse) VALUES(?, ?, ?, ?, ?, NOW())');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['nba'], $_POST['nbe'], $_POST['optradio']));

header('Location: index.php');
?>
