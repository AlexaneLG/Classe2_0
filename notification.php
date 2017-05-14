<?php
include("ConnexionBDD.php");
/**
 * Created by PhpStorm.
 * User: Jean-Daniel
 * Date: 14/05/2017
 * Time: 18:04
 */

$request = $bdd->prepare('
SELECT * FROM teacher_meeting 
INNER JOIN meeting ON meeting.id_meeting = teacher_meeting.id_meeting 
INNER JOIN course ON meeting.id_course = course.id_course 
INNER JOIN category ON course.id_category = category.id_category 
INNER JOIN user ON meeting.id_student = user.id 
WHERE teacher_meeting.id_prof = ? ');
$request->execute(array($_SESSION['id']));

$i = 1;
while($donnee = $request->fetch()){
    echo "<h4><small>RENDEZ-VOUS N°".$i."</small></h4>
        <hr>
        <h2>".$donnee['content']."</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté par ".$donnee['firstname'].", ".$donnee['date']." ".$donnee['hour'].".</h5>
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
    $i ++;
}
?>