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
$id=$_SESSION['membre_id'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$time=$_SESSION['time'];
$exist=false;
$req=$bdd->prepare('INSERT INTO membre_online(id, membre_fname,membre_lname,timecnx) VALUES (:id, :membre_fname, :membre_lname, :timecnx)');
$req2=$bdd->prepare('select * from membre_online where id=?');
$req2->execute(array($id));
$count=$req2->rowCount();
$donnes=$req2->fetch();
if($count==0){

$req->execute(
array(
'id'=>$id,
'membre_fname'=>$fname,
'membre_lname'=>$lname,
'timecnx'=>$time)
);
}



?>