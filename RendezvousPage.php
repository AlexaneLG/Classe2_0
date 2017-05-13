<?php
include ("Top.php");
?>
<body>

<div class="container">
    <h3 style="font-size: 120%"><a href="Main.php">Home</a> <span class="glyphicon glyphicon-triangle-right" style="font-size: 70%"></span> Rendez-vous page:</h3>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <div class = jumbotron>


            </div>
        </div>
        <div class="col-sm-10">

                <h3 style="text-decoration: underline; font-size: 130%; font-weight: bold">Professeurs disponibles :</h3>
                <br>
                <table class="table table-bordered table-hover">
                    <thead style="background-color: deepskyblue; color: black;">
                    <tr>
                        <th>#</th>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Ville</th>
                        <th>Specialité</th>
                        <th>Emploi du temps</th>
                    </tr>
                    </thead>
                    <tbody> <!--PHP HERE-->
                    <tr onclick="window.location.href='Salon.php';">
                        <td>1</td>
                        <td>Olivier</td>
                        <td>Leung</td>
                        <td>Paris</td>
                        <td>Maths</td>
                        <td>Icone</td>
                    </tr>
                    </tbody>
                </table>

        </div>
    </div>
</div>
</body>

<footer>
    <?php
    include ("footer.php");
    ?>
</footer>

