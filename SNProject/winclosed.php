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
$statu=0;
$req=$bdd->prepare('update  membre_online set statu= :statu where id= :id');
$req->execute(array('statu'=>$statu,
'id'=>$id
));
//session_destroy();
?>