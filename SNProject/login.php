<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$mail_log=htmlspecialchars($_POST['mail_log']);
$pswd_log=htmlspecialchars($_POST['pswd_log']);

$req = $bdd->prepare('SELECT * FROM membre_signup where membre_mail=?');
$req->execute(array($mail_log));
$donnees=$req->fetch();

if(($donnees['membre_mail']!=$mail_log)||($donnees['membre_pswd']!=$pswd_log))
{
echo' <script> alert("fauux"); window.location.replace("index.html");</script>';
}
else
{
header('Location:chat.php');
session_start();
$_SESSION['fname']=$donnees['membre_first_name'];
$_SESSION['lname']=$donnees['membre_last_name'];
$_SESSION['time']=time();
$_SESSION['membre_id']=$donnees['membre_id'];


}

?>