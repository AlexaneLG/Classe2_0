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
                'account' => $_POST['optradio'],
            ));
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['account'] = $_POST['optradio'];
        }

        header("refresh:0;url=Accueil.php");

    }
    elseif(isset($_POST['buttonconnexion'])){ //Lors de la connexion
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
    } elseif (isset($_POST['buttonmeeting'])) {
        if (isset($_POST['date']) == "" || isset($_POST['heure']) == "") {
            header("refresh:0;url=Profil.php?rdv=0");
            echo "<script>alert('Veuiller complèter tout le formulaire.')</script>";
        } else {
            $request = $bdd->prepare('SELECT id_course FROM course WHERE chapter = ?');
            $request->execute(array($_POST['chapter']));
            $donnee = $request->fetch();
            $idCourse = $donnee['id_course'];

            $request = $bdd->prepare('INSERT INTO meeting(date, hour, numhours, id_student, id_course) 
VALUES (:date, :hour, :numhours, :id_student, :id_course)');
            $request->execute(array(
                'date' => $_POST['date'],
                'hour' => $_POST['heure'],
                'numhours' => $_POST['nombreHeure'],
                'id_student' => $_SESSION['id'],
                'id_course' => $idCourse
            ));
            header("refresh:0;url=Profil.php?rdv=1");
        }
    } elseif (isset($_POST['idMeeting'])) {
        $request = $bdd->prepare('INSERT INTO teacher_meeting(id_meeting, id_prof, state)
VALUES (:id_meeting, :id_prof, :state)');
        $request->execute(array(
            'id_meeting' => $_POST['idMeeting'],
            'id_prof' => $_SESSION['id'],
            'state' => 0
        ));
        header("refresh:0;url=Profil.php?index=3&rdv=2");
    } elseif (isset($_POST['buttonprofaccepte'])) {
        $request1 = $bdd->prepare('UPDATE teacher_meeting SET state = 1 WHERE id_teacher_meeting = ?');
        $request1->execute(array($_POST['idTeacherMeeting']));
        $request2 = $bdd->prepare('UPDATE teacher_meeting SET state = 2 WHERE NOT id_teacher_meeting = ?');
        $request2->execute(array($_POST['idTeacherMeeting']));
        $request3 = $bdd->prepare('SELECT * FROM teacher_meeting WHERE id_teacher_meeting = ?');
        $request3->execute(array($_POST['idTeacherMeeting']));
        $teacherMeeting = $request3->fetchAll(PDO::FETCH_ASSOC);
        $request4 = $bdd->prepare('UPDATE meeting SET id_prof = ? WHERE id_meeting = ?');
        foreach ($teacherMeeting as  $value) {
            $idProf = $value['id_prof'];
            $idMeeting = $value['id_meeting'];
        }
        $request4->execute(array($idProf, $idMeeting));
        header("refresh:0;url=Profil.php?index=2");
    }

?>