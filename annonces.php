
<?php
include("ConnexionBDD.php");

if($_SESSION['account'] == "prof"){
    echo "<script>console.log('index = 3');</script>";
    $request = $bdd->prepare('SELECT * FROM meeting 
    INNER JOIN course ON meeting.id_course = course.id_course 
    INNER JOIN category ON course.id_category = category.id_category 
    INNER JOIN user ON meeting.id_student = user.id
    WHERE category.id_category IN ( 
    SELECT a.id_category FROM user_category AS a 
    INNER JOIN category AS b ON a.id_category = b.id_category 
 )');
    $request->execute(array($_SESSION['id']));
    $i = 1;
    while($donnee = $request->fetch()){
        echo "<h4><small>ANNONCE N°".$i."</small></h4>
        <hr>
        <h2>".$donnee['content']."</h2>
        <h5><span class=\"glyphicon glyphicon-time\"></span> Posté par ".$donnee['firstname'].", ".$donnee['date']." ".$donnee['hour'].".</h5><br>
        <form action='Loadingdata.php' method='post'>
            <input type='hidden' name='idMeeting' value=".$donnee['id_meeting'].">
            <input type='submit' value='Postuler'>
        </form>
        <br>";
        $i ++;
    }
}
?>