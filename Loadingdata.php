<?php
    session_start();
include("ConnexionBDD.php");

    if(isset($_POST['buttonregister'])){ //Lors de l'inscription
        if($_POST['password'] != $_POST['confirmpassword']){
            header("refresh:0;url=Main.php");
            echo "<script>alert('Wrong password')</script>";
        }

        else{
            $request = $bdd->prepare('INSERT INTO user(firstname, lastname, email, password, account)
VALUES(:firstname, :lastname, :email, :password, :account)');
           // $hashpassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $request->execute(array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'account' => "user",
            ));
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['account'] = "user";
        }

        header("refresh:0;url=Accueil.php");

    }
    else if(isset($_POST['buttonconnexion'])){ //Lors de la connexion
        $connexion = false;
        if(!empty($_POST['email'])){
            $request = $bdd->prepare('SELECT * FROM  user WHERE email = ?');
            $request->execute(array($_POST['email']));

            while($donnee = $request->fetch()){
                if(empty($_POST['password'])){
                    $connexion = false;
                }

                else{
                    if($_POST['password'] == $donnee['password']){
                        $connexion = true;
                        $_SESSION['id'] = $donnee['id'];
                        $_SESSION['firstname'] = $donnee['firstname'];
                        $_SESSION['lastname'] = $donnee['lastname'];
                        $_SESSION['email'] = $donnee['email'];
                        $_SESSION['password'] = $donnee['password'];
                        $_SESSION['account'] = $donnee['account'];
                        $_SESSION['connect'] = "true";
                    }
                    else{//Mauvais password
                        $connexion = false;
                    }
                }
            }
        }

        else{
            $connexion = false;
        }

        if ($connexion == false){
            echo"<script>alert(\"Mauvais email/ mot de passe\")</script>";
            header("refresh:0;url=ConnexionPage.php");
        }
        else{ //Connexion reussie
            header("refresh:0;url=Accueil.php");
        }
    }

?>