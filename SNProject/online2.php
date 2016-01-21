<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$tmpreload=time()-20;



                        $req=$bdd->prepare('SELECT * FROM membre_online where statu=1 and timecnx>?');
                        $req->execute(array($tmpreload) );

                        while($row=$req->fetch())
                        {

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

   ?>