<?php
session_start();


$id=$_SESSION['membre_id'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req=$bdd->prepare('delete from membre_online where id=?');
$req->execute(array($id));
session_destroy();
?>