
<?php
include("ConnexionBDD.php");

if($_SESSION['account'] == "prof"){
    /*$request = $bdd->prepare('SELECT * FROM meeting
    INNER JOIN course ON meeting.id_course = course.id_course 
    INNER JOIN category ON course.id_category = category.id_category 
    INNER JOIN user ON meeting.id_student = user.id
    INNER JOIN teacher_meeting ON meeting.id_meeting = teacher_meeting.id_meeting 
    WHERE category.id_category IN ( 
    SELECT a.id_category FROM user_category AS a 
    INNER JOIN category AS b ON a.id_category = b.id_category 
 )');*/
    $request = $bdd->prepare('SELECT * FROM meeting 
    INNER JOIN course ON meeting.id_course = course.id_course 
    INNER JOIN category ON course.id_category = category.id_category 
    INNER JOIN user ON meeting.id_student = user.id
    WHERE category.content IN (
    	SELECT content FROM user_category
        INNER JOIN category ON category.id_category = user_category.id_category
        WHERE user_category.id_user = 9
    )');
    $request->execute(array($_SESSION['id']));
    $i = 1;
    while($donnee = $request->fetch()){
        echo "<h4><small>ANNONCE N°".$i."</small></h4>
        <hr>
        <h2>".$donnee['content']."</h2>
        <h4>".$donnee['chapter']."</h4>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté par ".$donnee['firstname'].", ".$donnee['date']." ".$donnee['hour'].".</h5><br>
        <form action='Loadingdata.php' method='post'>
            <input type='hidden' name='idMeeting' value=".$donnee['id_meeting'].">";
        /*if ($donnee['state'] == NULL) {
            echo "<input type='submit' value='Postuler'>";
        } else {
            echo "<span class=\"label label-primary\">Vous avez déjà postulé à cette annonce.</span>";
        }*/

        $request2 = $bdd->prepare('SELECT state FROM teacher_meating 
        WHERE teacher_meeting.id_meeting = ?');
        $request2->execute(array($donnee['id_meeting']));
        $etat = $request2->fetch();
        if (isset($etat)) {
            echo "<span class=\"label label-primary\">Vous avez déjà postulé à cette annonce.</span>";
        } else {
            echo "<input type='submit' value='Postuler'>";
        }

        echo "</form>
        <br>";
        $i ++;
    }
} else {
    $request = $bdd->prepare("SELECT * FROM meeting 
    INNER JOIN course ON course.id_course = meeting.id_course 
    INNER JOIN category ON course.id_category = category.id_category 
    WHERE id_student = ? ");
    $request->execute(array($_SESSION['id']));
    $i = 1;
    while($donnee = $request->fetch()){
        echo "<h4><small>MON ANNONCE N°".$i."</small></h4>
        <hr>
        <h2>".$donnee['content']."</h2>
        <h4>".$donnee['chapter']."</h4>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté le ".$donnee['date']." ".$donnee['hour'].".</h5><br>";
        $i ++;
    }
}
?>