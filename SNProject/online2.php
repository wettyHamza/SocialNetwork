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
$tmpreload=time()-20;



                        $req=$bdd->prepare('SELECT * FROM membre_online where id <> ?');
                        $req->execute(array($id));
                        echo' <ul id="tagul" class="media-list">';
             while( $row=$req->fetch()){
               $statu=$row['statu'];

                      if($statu==1){


                                  echo' <li class="media">';

                                   echo ' <div class="media-body">';
                                          echo  '<div class="media">';
                                               echo' <div class="media-body" >';
                                                  echo'  <a href="#" style="text-decoration: none">';
                                                    echo'<h5 id="online_user">'.$row["membre_fname"].'</h5>';

                                                  echo' <small class="text-muted"></small>';

                                               echo' </div>';
                                       echo    ' </div>';

                                      echo'  </div>';
                                   echo' </li>';


                                     }

}
                             echo'</ul>';




   ?>