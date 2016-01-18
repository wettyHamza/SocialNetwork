<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$fname=htmlspecialchars($_POST['first_name']);
$lname=htmlspecialchars($_POST['last_name']);
$statu=$_POST['statu'];
$mail=htmlspecialchars($_POST['mail']);
$pswd=htmlspecialchars($_POST['pswd']);

if((isset($_POST['month']))and (isset($_POST['day']))and (isset($_POST['year']))){
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];

$req = $bdd->prepare('INSERT INTO membre_signup(membre_first_name, membre_last_name, membre_statu, membre_mail, membre_pswd, membre_db,membre_mb,membre_yb) VALUES(:membre_first_name, :membre_last_name, :membre_statu, :membre_mail, :membre_pswd,:membre_db,:membre_mb,:membre_yb)');
$req->execute(array(
	'membre_first_name' => $fname,
	'membre_last_name' => $lname,
	'membre_statu' => $statu,
	'membre_mail' => $mail,
	'membre_pswd' => $pswd,
	'membre_db' => $day,
	'membre_mb'=>$month,
	'membre_yb'=>$year
	));

}
?>