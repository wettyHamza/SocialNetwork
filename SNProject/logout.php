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
$statu=0;
$id=$_SESSION['membre_id'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$time=$_SESSION['time'];
$req=$bdd->prepare('update  membre_online SET statu= :statu where id= :id');
$req->execute(array('statu'=>$statu,
'id'=>$id
));

echo 'dhhhhhjjiiipppp';
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['time']);
echo'sss';


?>