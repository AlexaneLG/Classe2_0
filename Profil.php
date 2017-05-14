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
                        <li><a href="#" data-toggle="modal" data-target="#ModalInscription">Visionconférence</a></li>
                    </ul>
                </li>
                <li><a href="#section2">Notifications</a></li>
                <li><a href="#section3">Annonces</a></li>
                <li><a href="#section3">Photos</a></li>
            </ul><br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>

            </div>

        </div>

        <div class="col-sm-9">
            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h2>I Love Food</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
            <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
            <p>Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <br><br>

            <h4><small>RECENT POSTS</small></h4>
            <hr>
            <h2>Officially Blogging</h2>
            <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
            <h5><span class="label label-success">Lorem</span></h5><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>

            <h4>Leave a Comment:</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <br><br>

            <p><span class="badge">2</span> Comments:</p><br>

            <div class="row">
                <div class="col-sm-2 text-center">
                    <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="col-sm-10">
                    <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
                    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <br>
                </div>
                <div class="col-sm-2 text-center">
                    <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                </div>
                <div class="col-sm-10">
                    <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
                    <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <br>
                    <p><span class="badge">1</span> Comment:</p><br>
                    <div class="row">
                        <div class="col-sm-2 text-center">
                            <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
                        </div>
                        <div class="col-xs-10">
                            <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
                            <p>Me too! WOW!</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
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
                            <label for="dateInput">Date</label>
                            <div class="input-group bootstrap-timepicker timepicker">
                                <input id="timepicker2" type="text" class="form-control input-small">
                                <span class="input-group-addon">
                <i class="glyphicon glyphicon-time"></i>
            </span>
                            </div>

                            <label for="hourInput">Heure</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input id="datepicker" type="text" class="form-control input-small">
                                <span class="input-group-addon">
                <i class="glyphicon glyphicon-th"></i>
            </span>
                            </div>

                            <label for="numhoursInput">Nombre d'heures</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
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
                                    format: 'mm/dd/yyyy',
                                    startDate: '-3d'
                                });
                            </script>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="pull-left">Forgot your password?</a>
                        <p>Pas encore membre? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#ModalInscription">Inscrit </a>toi dès maintenant</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>
