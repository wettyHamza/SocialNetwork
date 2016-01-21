<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>BOOTSTRAP CHAT EXAMPLE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <script type="text/javascript" src="ajaxonline.js"></script>
    <script type="text/javascript" src="ajaxwinclosed.js"></script>

</head>
<?php
include('online.php');
?>
<body style="font-family:Verdana">
  <div class="container">
<div class="row " style="padding-top:40px;">
<span class="input-group-btn">
<form  action='logout.php' method='post'>

    <button class="btn btn-info" type="submit" style="margin-left:90%">Logout</button>
    </form>
   </span>
    <h3 class="text-center" >want to hangout! </h3>
    <br /><br />
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
               Want to hangout !
            </div>
            <div class="panel-body">
<ul class="media-list">

                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Jhon Rexa | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
              Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                                    Duis vel condimentum massa.
                                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                                    <br />
                                                   <small class="text-muted">Jhon Rexa | 23rd June at 5:00pm</small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
            </div>
            <div class="panel-footer">
                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">SEND</button>
                                    </span>
                                </div>
            </div>
        </div>
    </div>
    <div  class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
               ONLINE USERS
            </div>
            <div class="panel-body">

                <ul id="tagul" class="media-list">
                        <?php
                        try
                        {
                        	$bdd = new PDO('mysql:host=localhost;dbname=sn;charset=utf8', 'root', '');

                        }
                        catch(Exception $e)
                        {
                                die('Erreur : '.$e->getMessage());
                        }

                        $req=$bdd->query('SELECT * FROM membre_online');

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
                                </ul>
                </div>
            </div>
        
    </div>
</div>
<span class="input-group-btn">
    <button class="btn btn-info" style="margin-left:90%">Reload</button>
 </span>
  </div>

  <script type="text/javascript"> window.onunload=close; </script>

</body>
</html>
