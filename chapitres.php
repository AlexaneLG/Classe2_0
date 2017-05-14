<?php
 include('ConnexionBDD.php');

 $matiere = $_GET['matiere'];

 if ($matiere != "") {
     $request = $bdd->prepare("SELECT chapter FROM course, category WHERE category.content = ? AND  category.id_category = course.id_category");
     $request->execute(array($matiere));

     while ($donnees = $request->fetch()) {
         echo ",".$donnees['chapter'];
     }
 }