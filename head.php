<?php
/**
 * Created by PhpStorm.
 * User: OlivierLEUNG
 * Date: 20/03/2017
 * Time: 12:48
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class2.0</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/dist/css/custom.css">

</head>
<body style="height: 100%;">
<div class="container-full">

    <div class="page-header" style="border-bottom: 0px solid #e0e0e0; background-color: #2B81AF; margin-top: 0%; margin-bottom: 0%; padding-bottom: 0%">

        <div class="container">
                <!--<div class="navbar-header">-->
                  <!--  <div class="title">
                        <h1>Class2.0</h1>
                    </div>-->

                    <ul class="nav navbar-nav">
                        <li class="list-unstyled"><a href="Main.php" style="color:black; font-size: 250%; text-decoration: none">Class 2.0</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; font-size: 100%">Maths<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cours</a></li>
                                <li><a href="#">Exercices</a></li>
                                <li><a href="#">Instituteurs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black">Physique <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Cours</a></li>
                                <li><a href="#">Exercices</a></li>
                                <li><a href="#">Instituteurs</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black">Informatique <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="Cours.php">Cours</a></li>
                                <li><a href="#">Exercices</a></li>
                                <li><a href="#">Instituteurs</a></li>
                            </ul>
                        </li>


                        <li>
                            <form class="navbar-form navbar-left">
                                <div class="form-group has-feedback" style="display:inline-flex; width:100%" >
                                    <input type="text" class="form-control" id="search" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </li>


                    </ul>

           <!--     </div>-->
                <div class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black"><span class="glyphicon glyphicon-user"></span>Mon compte</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#ModalConnexion">Connexion</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#ModalInscription">Inscription</a></li>
                        </ul>
                    </li>
                </div>
            </div>

            <!-- Modal Connexion -->
            <div class="modal fade" id="ModalConnexion" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Connexion</h4>
                        </div>
                        <div class="modal-body">

                            <form action="Loadingdata.php" method="post" class="form-horizontal" >
                                <label for="usernameInput">Username</label>
                                <input type="text" class="form-control" id="usernameInput" placeholder="Nom d'utilisateur">
                                <br>
                                <label for="passwordInput">Password</label>
                                <input type="text" class="form-control" id="passwordInput" placeholder="Mot de passe">
                                <br>
                                <button type="submit" class="btn btn-primary center-block" name="buttonconnexion">Log in</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="pull-left">Forgot your password?</a>
                            <p>Pas encore membre? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#ModalInscription">Inscrit </a>toi dès maintenant</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal fade" id="ModalInscription" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Inscription</h4>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="Loadingdata.php">
                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">Firstname</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">Lastname</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">Username</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">Password</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                    <div class="cols-sm-7">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <button type="submit" name="buttonregister" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>


    </div>
            </nav>





</div>

<br>
<br>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>


