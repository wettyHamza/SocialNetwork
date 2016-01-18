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

/*$req = $bdd->prepare('SELECT membre_pswd,membre_first_name FROM membre_signup WHERE membre_pswd=?');
$req->execute(array($_GET['membre_pswd']));

//$reponse = $bdd->query('SELECT membre_pswd FROM membre_signup WHERE membre_pswd=\'.$pswd_log\'');

while ($donnees = $req->fetch())
{
	echo $donnees['membre_pswd'];
}

$reponse->closeCursor();
*/

$stmt = $bdd->prepare("SELECT password, salt FROM customer WHERE login = ?");
$stmt->bind_param("s", $pswd_log);
$stmt->execute();
$stmt->bind_result($password_hash, $salt);

while ($stmt->fetch()) {
  $input_password_hash = hash('sha256', $input_password . $salt);
  if ($input_password_hash == $password_hash) {
    return true;
  }
  // You may want to log failed password attempts here,
  // for security auditing or to lock an account with
  // too many attempts within a short time.
}
$stmt->close();

// No rows matched $input_login, or else password did not match
return false;
?>