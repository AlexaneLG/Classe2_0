<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Dropdowncustom.css">
    <link rel="stylesheet" href="boot">
</head>
<body>

<div class="page-header" style="border-bottom: 0px solid #e0e0e0;  background-color: #222; margin-top: 0%; margin-bottom: 0%; padding-bottom: 0%">
    <div class="container">
        <ul class="nav navbar-nav" style="margin-left: 0%">
            <!-- <li class="list-unstyled"><a href="Main.php" style="color:black; font-size: 250%; text-decoration: none">Class 2.0</a></li>-->
            <li class="list-unstyled"><img src="Home.png" width="50" height="50" alt="" onclick="window.location='Accueil.php';"></li>
            <li class="dropdown" style="margin-left:40px">
                <a href="Accueil.php" class="dropdown-toggle" data-toggle="dropdown" style="color: #9d9d9d; background-color: #222">Accueil</a>
            </li>

            <?php
            if(!isset($_SESSION['firstname'])){

                ?>
                <li class="dropdown">
                    <a href="#" style="color:#9d9d9d; background: #222;">Profil</a>
                </li>
                <?php

            }
            else {
                ?>
                <li class="dropdown">
                    <a href="Profil.php" style="color:#9d9d9d; background: #222;"><?php echo $_SESSION['firstname']?></a>
                </li>

                <?php
            }
            ?>

            <li><a href="#" style="color: #9d9d9d; background: #222;">Cours</a></li>

        </ul>


        <div class="nav navbar-nav navbar-right">
            <?php
            if (!isset($_SESSION['firstname'])) {
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" onmouseover="this.color" style="color:#9d9d9d; background-color: #222"><span
                                class="glyphicon glyphicon-user"></span>Mon compte</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#ModalConnexion">Connexion</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#ModalInscription">Inscription</a></li>
                    </ul>
                </li>
                <?php
            }

            else {
                /*        echo "<li>
            <form action='".$_SERVER['PHP_SELF']."' method='post'><span class='glyphicon glyphicon-log-out'></span>
            <a type='submit' value='Déconnexion' name='deconnexion' style='background-color:transparent;border:none;margin:0;padding:0;'> a</a></form></li>";
    }*/
                ?>
                <li>
                    <form action="$_SERVER['PHP_SELF']" method="post" style="margin-top: 10%">
                        <button class="btn-link" type="submit" name="logoutbutton" style="text-decoration: none; color: #9d9d9d;"><span class='glyphicon glyphicon-log-out'></span>Deconnexion
                        </button>
                    </form>
                </li>
                <?php
            }
            ?>
        </div>

        <div class="modal fade" id="ModalConnexion" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Connexion</h4>
                    </div>
                    <div class="modal-body">

                        <form action="Loadingdata.php" method="post" class="form-horizontal">
                            <label for="usernameInput">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <br>
                            <label for="passwordInput">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                            <br>
                            <button type="submit" class="btn btn-primary center-block" name="buttonconnexion">Log
                                in
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="pull-left">Forgot your password?</a>
                        <p>Pas encore membre? <a href="#" data-dismiss="modal" data-toggle="modal"
                                                 data-target="#ModalInscription">Inscrit </a>toi dès maintenant</p>
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
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"
                                                                               aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="firstname" id="fisrtname"
                                               placeholder="Enter your Firstname"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">Lastname</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"
                                                                               aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                               placeholder="Enter your Lastname"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"
                                                                               aria-hidden="true"></i></span>
                                        <input type="email" class="form-control" name="email" id="email"
                                               placeholder="Enter your Email"/>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"
                                                                               aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Enter your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-7">
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"
                                                                               aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirmpassword"
                                               id="confirmpassword" placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center radio">
                                <p style="font-weight: bold">Je m'inscris en tant que...</p>
                                <label class="radio-inline">
                                    <input type="radio" name="type">Professeur
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="type">Elève
                                </label>
                            </div>


                            <div class="form-group ">
                                <button type="submit" name="buttonregister"
                                        class="btn btn-primary btn-lg btn-block login-button">Register
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>


    </div>
</div>

</body>
</html>
