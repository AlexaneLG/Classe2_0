<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;

            }

            /* Add a gray background color and some padding to the footer */
            footer {
                background-color: #f2f2f2;
                padding: 25px;
            }

            .carousel-inner img {
                width: 100%; /* Set width to 100% */
                margin: auto;
                min-height:200px;
            }

            /* Hide the carousel text when the screen is less than 600 pixels wide */
            @media (max-width: 600px) {
                .carousel-caption {
                    display: none;
                    color: black;
                }
            }
        </style>
    </head>

    <body>
        <?php include('Navbar.php');?>
            <div class="jumbotron text-center">
                <h1>Une nouvelle façon d'apprendre</h1>
                <p>Trouvez facilement des professeurs particuliers pour le lycée général</p>
            </div>
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-8 text-center" id="prof">
                            <h1>Où les trouver ?</h1>
                            <p>Des professeurs ...</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="Logo.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid conteneur">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="row">
                            <img class="img-responsive prof-image1" src="particulier.jpg">
                        </div>
                        <div class="row">
                            <h1>...chez vous</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="row">
                            <img class="img-responsive prof-image2" src="webcam.jpg">
                        </div>
                        <div class="row">
                            <h1>...partout</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container-fluid text-center conteneur matieres">
                    <div class="row">
                        <h1>Retrouvez toutes vos matières</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <span class="glyphicon glyphicon-font logo"></span>
                            <h1>Français</h1>
                        </div>
                        <div class="col-sm-3">
                            <span class="glyphicon glyphicon-plus-sign logo"></span>
                            <h1>Mathématiques</h1>
                        </div>
                        <div class="col-sm-3">
                            <span class="glyphicon glyphicon-globe logo"></span>
                            <h1>Langues</h1>
                        </div>
                        <div class="col-sm-3">
                            <span class="glyphicon glyphicon-list logo"></span>
                            <h1>Et d'autres</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-6" style="height:130px;">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker11'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker11').datetimepicker({
                            daysOfWeekDisabled: [0, 6]
                        });
                    });
                </script>
            </div>
    </body>
</html>