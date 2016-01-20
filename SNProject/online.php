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

$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$time=$_SESSION['time'];
$exist=false;
$req=$bdd->prepare('INSERT INTO membre_online(membre_fname,membre_lname,timecnx) VALUES (:membre_fname, :membre_lname, :timecnx)');
$req2=$bdd->query('select * from membre_online');
while($donnes=$req2->fetch())
{
if($donnes['membre_fname']==$fname)
$exist=true;
else
$exist=false;
}
if ($exist==false)
{
$req->execute(
array(
'membre_fname'=>$fname,
'membre_lname'=>$lname,
'timecnx'=>$time)
);
}


?>