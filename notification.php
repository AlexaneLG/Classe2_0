<?php
include("ConnexionBDD.php");
/**
 * Created by PhpStorm.
 * User: Jean-Daniel
 * Date: 14/05/2017
 * Time: 18:04
 */

if($_SESSION['account'] == "prof") {
    $request = $bdd->prepare('
    SELECT * FROM teacher_meeting 
    INNER JOIN meeting ON meeting.id_meeting = teacher_meeting.id_meeting 
    INNER JOIN course ON meeting.id_course = course.id_course 
    INNER JOIN category ON course.id_category = category.id_category 
    INNER JOIN user ON meeting.id_student = user.id 
    WHERE teacher_meeting.id_prof = ? ');
    $request->execute(array($_SESSION['id']));

    $i = 1;
    while ($donnee = $request->fetch()) {
        echo "<h4><small>RENDEZ-VOUS N°" . $i . "</small></h4>
        <hr>
        <h2>" . $donnee['content'] . "</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté par " . $donnee['firstname'] . ", " . $donnee['date'] . " " . $donnee['hour'] . ".</h5>
        ";
        switch ($donnee['state']) {
            case 0:
                echo "<h5><span class='label label-primary'>En attente</span></h5><br>";
                break;
            case 1:
                echo "<h5><span class='label label-success'>Accepté</span></h5><br>";
                break;
            case 2:
                echo "<h5><span class='label label-danger'>Refusé</span></h5><br>";
        }
        $i++;
    }
} else {
    $request = $bdd->prepare('SELECT * FROM meeting
    INNER JOIN teacher_meeting ON teacher_meeting.id_meeting = meeting.id_meeting 
    INNER JOIN course ON course.id_course = meeting.id_course 
    INNER JOIN category ON category.id_category = course.id_category 
    INNER JOIN user ON user.id = teacher_meeting.id_prof 
    WHERE id_student = ? ');
    $request->execute(array($_SESSION['id']));
    $meetings = $request->fetchAll(PDO::FETCH_ASSOC);

    $request2 = $bdd->prepare('SELECT id_prof.meeting FROM meeting
    INNER JOIN teacher_meeting ON teacher_meeting.id_meeting = meeting.id_meeting 
    INNER JOIN course ON course.id_course = meeting.id_course 
    INNER JOIN category ON category.id_category = course.id_category 
    INNER JOIN user ON user.id = teacher_meeting.id_prof 
    WHERE id_student = ? ');
    $request2->execute(array($_SESSION['id']));
    $idProf = $request2->fetchAll(PDO::FETCH_ASSOC);

    $i = 1;
    foreach ($meetings as  $value) {
        echo "<h4><small>RENDEZ-VOUS N°" . $i . "</small></h4>
        <hr>
        <h2>" . $value['content'] . "</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté le " . $value['date'] . " " . $value['hour'] . ".</h5>
        <h5>Professeur volontaire : ".$value['firstname'];

        echo "<script>console.log(".$value['id_prof'].")</script>";
        if ($value['id_prof'] == NULL) {
            echo " <form action='Loadingdata.php' method='POST'><input type='hidden' name='idTeacherMeeting' value=".$value['id_teacher_meeting']."><input name='buttonprofaccepte' type='submit' value='Accepter'></form></h5>";
        }else {
            switch ($value['state']) {
                case 0:
                    echo "<h5><span class='label label-primary'>En attente</span></h5><br>";
                    break;
                case 1:
                    echo "<h5><span class='label label-success'>Accepté</span></h5><br>";
                    break;
                case 2:
                    echo "<h5><span class='label label-danger'>Refusé</span></h5><br>";
            }
        }
        echo "<br>";
        $i++;
    }

}
?>