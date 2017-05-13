<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Classe2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Dropdowncustom.css">
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
            }
        }

        .well {
            font-size: 18pt;
        }

        .dropdown {
            background-color: white;
        }
    </style>
</head>
<body>
<?php include("Navbar.php");?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="ordi.jpg" alt="Image">
            <div class="carousel-caption">
                <h3>Le Bac en quelques clics</h3>
                <p>Un professeur juste pour vous</p>
            </div>
        </div>

        <div class="item">
            <img src="tableau.jpg" alt="Image">
            <div class="carousel-caption">
                <h3>...ou devenez professeur</h3>
                <p>Travaillez quand vous voulez</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container text-center">
    <h3>Une nouvelle façon d'apprendre</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="maison.jpg" style="width:100%" alt="Image">
            <p>À domicile</p>
        </div>
        <div class="col-sm-4">
            <img src="visio.jpeg" class="img-responsive" style="width:100%" alt="Image">
            <p>Vidéoconférence</p>
        </div>
        <div class="col-sm-4">
            <div class="well">
                <p>Inscrivez-vous</p>
                <form class="form-inline">
                    <div class="input-group">
                        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">S'inscrire</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="well">
            <a href="a_propos.php">À propos</a>
        </div>
    </div>
</div>

</body>
</html>
