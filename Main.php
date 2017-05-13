<?php
include("Top.php");
?>

<head>
    <link rel="stylesheet" href="Chat.css">
</head>


<body>
<style>
    ::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar
    {
        width: 12px;
        background-color: #F5F5F5;
    }
    ::-webkit-scrollbar-thumb
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }

</style>
<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="center-block" src="c++logo.png" width="290" height="180" alt="c++">
        </div>

        <div class="item">
            <img class="center-block" src="javalogo.png" width="290" height="180" alt="java">
        </div>

        <div class="item">
            <img class="center-block" src="pythonlogo.jpg" width="290" height="180" alt="python">
        </div>

    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->


<div class="container">

    <img src="learn.jpg" class="center-block" width=100%>
    <!--    <div class=" nav nav-pills flex-column">
            <ul class="list-unstyled">
                <li><button type="button" class="btn btn-default">Maths</button></li>
                <li><button type="button" class="btn btn-default">Informatique</button></li>
                <li><button type="button" class="btn btn-default">Physique</button></li>
            </ul>
        </div>-->

   <h3 style="text-decoration: underline; font-style: italic;">Decouvrez nos meilleurs cours:</h3>

    <div class="jumbotron">
        <div class="row">

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="pythonlogo.jpg" width="200">
                </div>
            </div>

            <div class="col-sm-4">

                <div class="thumbnail">

                    <img src="c++logo.png" width="200">


                </div>



            </div>

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="javalogo.png"width="220">
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="pythonlogo.jpg" width="200">
                </div>
            </div>

            <div class="col-sm-4">

                <div class="thumbnail">

                    <img src="c++logo.png" width="200">


                </div>



            </div>

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="javalogo.png"width="220">
                </div>
            </div>
        </div>

    </div>
</div>


<footer>
    <?php
    include("footer.php");
    ?>
</footer>
</body>