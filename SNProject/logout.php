<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req=$bdd->prepare('delete from membre_online where membre_fname=:fname');
$req->bindParam(':fname', $_SESSION['fname'], PDO::ATTR_DRIVER_NAME);
$req->execute();
echo 'dhh';
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['time']);
echo'sss';


?>