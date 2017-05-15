<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" href="bootstrap/dist/css/bootstrap.min.css" />
    <link type="text/css" href="bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link type="text/css" href="bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="Moment.js/moment.js"></script>
    <script type="text/javascript" src="bootstrap/js/transition.js"></script>
    <script type="text/javascript" src="bootstrap/js/collapse.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript" src="bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>
</head>
<body>
<?php include("Navbar.php"); ?>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4><?php echo $_SESSION['firstname']; ?></h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active dropdown">
                    <a href="#section1 dropdown-toggle" data-toggle="dropdown" style="color:black">Rendez-vous</a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#ModalProfil">Nouveau rendez-vous</a></li>
                        <li><a href="Salon.php">Visionconférence</a></li>
                    </ul>
                </li>
                <li><a href="Profil.php?index=2">Notifications</a></li>
                <li><a href="Profil.php?index=3">Annonces</a></li>
                <li><a href="Profil.php?index=4">Mon profil</a></li>
            </ul><br>
        </div>

        <div class="col-sm-9">
            <?php
            if (isset($_GET['rdv'])){
                if ($_GET['rdv'] == 1) {
                    echo "<h5><span style='width: 100%; padding: 10px; text-align: center;' class=\"label label-success\">Rendez-vous soumis avec succès.</span></h5><br>";
                } else if ($_GET['rdv'] == 2) {
                    echo "<h5><span style='width: 100%; padding: 10px; text-align: center;' class=\"label label-success\">Validé, en attente d'une réponse.</span></h5><br>";
                } else {
                    echo "<h5><span style='width: 100%; padding: 10px; text-align: center;' class=\"label label-danger\">Échec</span></h5><br>";
                }
            }
            if(isset($_GET['index'])){
                if($_GET['index'] == 3){
                    include('annonces.php');
                } else if ($_GET['index'] == 2) {
                    include('notification.php');
                }
            }
            ?>
        </div>
        <div class="modal fade" id="ModalProfil" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nouveau rendez-vous</h4>
                    </div>
                    <div class="modal-body">

                        <form action="Loadingdata.php" method="post" class="form-horizontal" >
                            <label for="dateInput">Heure</label>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="timepicker2" type="text" name="heure" class="form-control input-small">
                                <span class="input-group-addon">
                <i class="glyphicon glyphicon-time"></i>
            </span>
                            </div>

                            <label for="hourInput">Date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input id="datepicker" type="text" name="date" class="form-control input-small">
                                <span class="input-group-addon">
                <i class="glyphicon glyphicon-th"></i>
            </span>
                            </div>

                            <label for="numhoursInput">Nombre d'heures</label>
                            <select class="form-control" name="nombreHeure">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>

                            <label for="numhoursInput">Matière</label>
                            <select id="matiere" class="form-control" name="matiere">
                                <option></option>
                                <option>Mathématiques</option>
                                <option>Physique</option>
                                <option>Sciences de la vie et de la terre</option>
                                <option>Philosophie</option>
                                <option>Histoire</option>
                                <option>Géographie</option>
                                <option>Anglais</option>
                                <option>Espagnol</option>
                            </select>

                            <label for="chapitreInput">Chapitre</label>
                            <select id="chapitre" class="form-control" name="chapter">

                            </select>

                            <script type="text/javascript">
                                $('#timepicker2').timepicker({
                                    minuteStep: 15,
                                    template: 'modal',
                                    appendWidgetTo: 'body',
                                    showSeconds: false,
                                    showMeridian: false,
                                    defaultTime: false
                                });

                                $('.datepicker').datepicker({
                                    format: 'yyyy/mm/dd',
                                    startDate: '-3d'
                                });
                            </script>

                            <button type="submit" class="btn btn-primary center-block" name="buttonmeeting">Envoyer</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

<script>
    $(function(){
        $('#matiere').change(function() {
            var m = $('#matiere').val();
            $.ajax({
                url : 'chapitres.php',
                type : 'get',
                data : {matiere : m},
                success : function(data){
                    $('#chapitre').empty();
                    var donnees = data;
                    if(data != ""){
                        var tab = donnees.split(',');
                        var j = (tab.length) - 1;
                        for (var i = 1; i <= j; i++){
                            $('#chapitre').append("<option>"+tab[i]+"</option>");
                        }
                    }
                }
            });
        });
    });
</script>

</body>
</html>
