<?php
    if (isset($_POST['deconnexion'])){
        session_destroy();
        unset($_SESSION);
        echo "<script type='text/javascript'>document.location.replace('Accueil.php');</script>";
    }
?>
<!doctype html>
<link rel="icon" type="image/png" href="favicon.ico" />
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Accueil.php"><img src="Logo%20blanc.png" </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="Accueil.php">Accueil</a></li>
                <?php
                    if(isset($_SESSION['firstname'])){
                        echo "<li><a href='Profil.php'>".$_SESSION['firstname']."</a></li>";
                    }else{
                        echo "<li><a href='#'>Profil</a></li>";
                    }
                ?>
                <li><a href="#">Cours</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black">
                            <?php
                                if(!isset($_SESSION['firstname'])){
                                    echo "<span class='glyphicon glyphicon-log-in'></span> Connexion</a>
                                    <ul class='dropdown-menu'>
                                        <li><a href='#' data-toggle='modal' data-target='#ModalConnexion'>Connexion</a></li>
                                        <li><a href='#' data-toggle='modal' data-target='#ModalInscription'>Inscription</a></li>
                                    </ul>";
                                }else{
                                    echo "<span class='glyphicon glyphicon-log-out'></span>
                                    <form action='".$_SERVER['PHP_SELF']."' method='post' style='display:inline'>
			                        <input type='submit' value='Déconnexion' name='deconnexion' style='background-color:transparent;border:none;margin:0;padding:0;'/></form></a>";
                                }
                            ?>
                </li>
            </ul>
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

                        <form action="Loadingdata.php" method="post" class="form-horizontal" >
                            <label for="usernameInput">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <br>
                            <label for="passwordInput">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
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
                                        <input type="text" class="form-control" name="firstname" id="fisrtname"  placeholder="Enter your Firstname"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="username" class="cols-sm-2 control-label">Lastname</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Enter your Lastname"/>
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
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-7">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"  placeholder="Confirm your Password"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userInput" class="cols-sm-2 control-label">Type d'utilisateur</label>
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="user"/>Élève</label>
                                    <label><input type="radio" name="optradio" value="prof"/>Professeur</label>

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