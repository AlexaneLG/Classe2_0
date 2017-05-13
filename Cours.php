<?php
include("Top.php");
?>

<div class="container">
    <h3>Informatique <span class="glyphicon glyphicon-triangle-right" style="font-size: 70%"></span> Cours:</h3>
    <div class="accordion" id="accordion">
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="pythonlogo.jpg" width="280" height="190" class="imgpython">
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapsecourspython">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                    <div class="panel-collapse collapse" id="collapsecourspython">
                        <div class="panel-body">
                            <p><br>Vous n'y connaissez rien en programmation et vous souhaitez apprendre un langage clair et intuitif ?
                                Ce cours d’initiationà Python est fait pour vous !
                                Et comme le veut la coutume ici-bas, on démarre de zéro, dans la joie et la bonne humeur.
                                Ainsi, si vous n'avez jamais programmé en quelque langage que ce soit, si vous ne savez que très
                                vaguement ce que programmer signifie, vous ferez le bon choix en choisissant Python pour commencer votre apprentissage.</p>
                        </div>
                    </div>
                    <br>
                    <form action="LoadingCours.php">
                        <button type="submit" class="btn btn-success">Voir les professeurs disponibles</button>
                    </form>
                </div>
            </div>

            <div class="col-sm-4">

                <div class="thumbnail">

                        <img src="c++logo.png"  width="280" height="190" class="imgc++">
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapsecoursc++">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                    <div class="panel-collapse collapse" id="collapsecoursc++">
                        <div class="panel-body">
                            <p><br>La programmation C++ vous intéresse mais ça vous paraît trop compliqué ?
                                Ce cours de C++ est fait pour des débutants comme vous qui n'ont jamais programmé !

                                Le langage C++ est un des langages les plus célèbres au monde. Très utilisé, notamment
                                dans le secteur des jeux vidéo qui apprécie ses performances et ses possibilités, le C++
                                est désormais incontournable pour les développeurs.

                                Le C++ est le descendant du langage C. Ces deux langages, bien que semblables au premier
                                abord, sont néanmoins différents. Le C++ propose de nouvelles fonctionnalités, comme la
                                programmation orientée objet (POO). Elles en font un langage très puissant qui permet de
                                programmer avec une approche différente du langage C.</p>
                        </div>
                    </div>
                    <br>
                    <form action="LoadingCours.php">
                        <button type="submit" class="btn btn-success">Voir les professeurs disponibles</button>
                    </form>


                </div>



            </div>

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="javalogo.png"  width="290" height="190">
                        <p><br>Java est un langage de programmation moderne développé par Sun Microsystems (aujourd'hui racheté par Oracle).
                            Il ne faut surtout pas le confondre avec JavaScript (langage de scripts utilisé principalement sur les sites web),
                            car Java n'a rien à voir.
                            Une de ses plus grandes forces est son excellente portabilité : une fois votre programme créé,
                            il fonctionnera automatiquement sous Windows, Mac, Linux, etc.</p>

                    <button type="submit" class="btn btn-success">Voir les professeurs disponibles</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="accordion" id="myAccordion">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel">
                    <img src="pythonlogo.jpg" width="280" height="190" class="imgpython">
                    <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#collapsible-1" data-parent="#myAccordion">Question 1?</button>
                    <div id="collapsible-1" class="collapse">
                        <p><br>Vous n'y connaissez rien en programmation et vous souhaitez apprendre un langage clair et intuitif ?
                            Ce cours d’initiationà Python est fait pour vous !
                            Et comme le veut la coutume ici-bas, on démarre de zéro, dans la joie et la bonne humeur.
                            Ainsi, si vous n'avez jamais programmé en quelque langage que ce soit, si vous ne savez que très
                            vaguement ce que programmer signifie, vous ferez le bon choix en choisissant Python pour commencer votre apprentissage.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel">
                    <div class="thumbnail">
                        <img src="c++logo.png"  width="280" height="190" class="imgc++">
                    </div>
                    <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#collapsible-2" data-parent="#myAccordion">Question 2?</button>
                    <div id="collapsible-2" class="collapse">
                        <p><br>La programmation C++ vous intéresse mais ça vous paraît trop compliqué ?
                            Ce cours de C++ est fait pour des débutants comme vous qui n'ont jamais programmé !

                            Le langage C++ est un des langages les plus célèbres au monde. Très utilisé, notamment
                            dans le secteur des jeux vidéo qui apprécie ses performances et ses possibilités, le C++
                            est désormais incontournable pour les développeurs.

                            Le C++ est le descendant du langage C. Ces deux langages, bien que semblables au premier
                            abord, sont néanmoins différents. Le C++ propose de nouvelles fonctionnalités, comme la
                            programmation orientée objet (POO). Elles en font un langage très puissant qui permet de
                            programmer avec une approche différente du langage C.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel">
                    <img src="javalogo.png"  width="290" height="190">
                    <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#collapsible-3" data-parent="#myAccordion">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <div id="collapsible-3" class="collapse">
                        <p><br>Java est un langage de programmation moderne développé par Sun Microsystems (aujourd'hui racheté par Oracle).
                            Il ne faut surtout pas le confondre avec JavaScript (langage de scripts utilisé principalement sur les sites web),
                            car Java n'a rien à voir.
                            Une de ses plus grandes forces est son excellente portabilité : une fois votre programme créé,
                            il fonctionnera automatiquement sous Windows, Mac, Linux, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <?php
    include ("footer.php")
    ?>
</footer>


