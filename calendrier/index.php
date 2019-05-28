<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Calendrier de la partie 9</title>

    </head>

    <body class="colorBackgroundBody">

        <div class="text-center">
            <h1>Calendrier de la partie 9</h1>
        </div>


        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
                            En fonction des choix, afficher un calendrier comme celui ci :</i>
                    </div>
                </div>
            </div>
        </div>


        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-6 mx-auto">
                    <form class="text-center mt-5"  action="index.php" method="post"> <!-- Je créer mon formulaire, method Post -->
                        <?php
                        $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre']; // je créer mon tableau des mois
                        ?>
                        <select name="month">
                            <?php
                            $key = 1; // je définis une variable que j'appelle Key à 1
                            foreach ($months as $month) { // je fais une boucle foreach sur mon tableau months
                                ?>
                                <option 
                                <?php
                                if (empty($_POST['month'])) { // si le choix du mois est vide, alors on laisse de base
                                    echo '';
                                } elseif ($_POST['month'] == $key) { // si le mois choisis est strictement == à ma variable Key
                                    echo 'selected'; // on le laisse en selected
                                };
                                ?> value="<?= $key++ ?>"> <!-- j'incrémente ma varriable key pour savoir quel mois est choisis  --> 
                                    <?= $month; ?></option> <!-- J'affiche mon tableau dans la liste déroulante -->
                                <?php
                            }
                            ?>
                        </select>
                        <select name="years">
                            <?php
                            for ($year = 1980; $year <= 2025; $year++) { // je créer une boucle for, j'initialise year à 1980, tan que year est inférieur ou égale à 2025, je l'incrémente de 1
                                ?>
                                <option <?php
                                if (empty($_POST['years']) && ($year == date('Y'))) { // si years est vide et que year = date en 4 chiffres
                                    echo 'selected'; // on laisse selected
                                } elseif (!empty($_POST['years']) && $_POST['years'] == $year) { // si years est pas vide et que years est = year
                                    echo 'selected'; // on laisse selected sur la date choisis
                                };
                                ?> value="<?= $year ?>"><?= $year; ?></option> <!-- On donne year comme value et on le rappel dans option pour la liste déroulante -->
                                    <?php
                                }
                                ?>
                        </select>
                        <input class="btn btn-danger" type="submit" value="Valider"/>
                    </form>

                    <?php
                    if (isset($_POST['month']) && isset($_POST['years'])) { // si mon mois et mon année existent 

                        $calendarDate = cal_days_in_month(CAL_GREGORIAN, $_POST['month'], $_POST['years']); // je créer une variable avec la fonction php cal_day... qui retourne le nombre de jour dans un mois pour une année et un calendrier donné, je lui définis le calendrier Grégorien, et le mois et l'année seront notre choix
                        $daysOfWeek = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']; // je créer un tableau des jours de la semaine
                        $firstDayInMonth = date('w', mktime(0, 0, 0, $_POST['month'], 1, $_POST['years'])); // je créer une variable qui va prendre le premier jour du mois et de l'année séléctionné 
                        $dayInMonth = date('w', mktime(0, 0, 0, $_POST['month'], $calendarDate, $_POST['years'])); // je créer une variable qui va prendre en compte le nombre de jour dans le mois et l'année sélectionné
                        $differenceInWeek = 7 - $dayInMonth; // je créer une variable que j'initialise à 7 - les jours du mois, pour les années bisextile
                        ?>
                        <table class="mt-5 mx-auto">
                            <tr>
                                <?php
                                foreach ($daysOfWeek as $inWeek) { // je fais une boucle pour les jours de la semaine
                                    ?>
                                    <th id="days"><?= $inWeek; ?></th> <!-- j'affiche les jours de la semaine dans un th -->
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            if ($firstDayInMonth == 0) { // Si le premier jour du mois est strictement == à 0
                                $firstDayInMonth = 7; // alors je lui met qu'il est égale = 7
                            }
                            $currentDays = 1; // je créer une variable que j'initialise à 1, qui sera incrémenter par la suite
                            for ($firstDayInWeek = 1; $firstDayInWeek <= $calendarDate + ($firstDayInMonth - 1); $firstDayInWeek++) { // je fais une boucle for si firstdayinweek est = 1, tan que firstdayinweek est inférieur ou égal à mon calendrer et au premier jour du mois - 1 ( pour les années bisextile ) alors j'incrémente mes jours
                                if ($firstDayInWeek % 7 == 1) { // je calclue le reste entre les jours de la semaine et 7 si c'est strictement = à 1 j'ouvre un tr
                                    ?>
                                    <tr> 
                                        <?php
                                    }
                                    if ($firstDayInWeek >= $firstDayInMonth) {  // si le premier jour de la semaine est supérieur ou égale au premier jour du mois
                                        ?>
                                        <td class="align-baseline"><?=
                                            $currentDays; // j'afficher le current day
                                            $currentDays++; // je l'incrément jusqu'à ce que le mois soit remplis
                                            ?></td>
                                        <?php
                                    } else { // sinon, je laisse des td vide
                                        ?>
                                        <td></td>
                                        <?php
                                    }
                                }
                                for ($lastDayInWeek = 1; $lastDayInWeek <= $differenceInWeek; $lastDayInWeek++) { // je créer une boucle for pour le dernier jour de la semaine, tan qu'il est inférieur ou égale à differenceinweek, je l'incrémente
                                    if ($lastDayInWeek < $calendarDate && $dayInMonth != 0) { // si il est strictement différent de 0 je créer des td vides
                                        ?>
                                        <td></td>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
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

    </body>
</html>