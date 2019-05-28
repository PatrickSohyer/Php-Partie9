<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Exercice 7, Partie 9</title>

    </head>

    <body class="colorBackgroundBody">

        <div class="text-center">
            <h1>EXERCICE 7, PARTIE 9</h1>
        </div>

        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Afficher la date du jour + 20 jours.</i>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $date = time();
        $dateFutur = date('d-m-Y', strtotime('+20 days'));
        ?> 


        <div class="futurDate text-center mt-3">
            <p><b>Dans 20 jours, nous serons le <?= $dateFutur; ?></b></p>
        </div>

        <p><a href="http://phpexercice/partie9/exo1/">Partie 9 exerice 1</a></p>
        <p><a href="http://phpexercice/partie9/exo2/">Partie 9 exerice 2</a></p>
        <p><a href="http://phpexercice/partie9/exo3/">Partie 9 exerice 3</a></p>
        <p><a href="http://phpexercice/partie9/exo4/">Partie 9 exerice 4</a></p>
        <p><a href="http://phpexercice/partie9/exo5/">Partie 9 exerice 5</a></p>
        <p><a href="http://phpexercice/partie9/exo6/">Partie 9 exerice 6</a></p>
        <p><a href="http://phpexercice/partie9/exo7/">Partie 9 exerice 7</a></p>
        <p><a href="http://phpexercice/partie9/exo8/">Partie 9 exerice 8</a></p>
        <p><a href="http://phpexercice/partie9/TP/">Partie 9 exerice TP</a></p>
        <p><a href="http://phpexercice/partie9/calendrier/">Partie 9 Calendrier</a></p>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
