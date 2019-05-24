<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>TP de la partie 9</title>
        
    </head>
    
    <body class="colorBackgroundBody">
        
        <div class="text-center">
            <h1>TP de la partie 9</h1>
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
        
        <form class="text-center mt-5" method="post" action="index.php"><!--Création de mon formulaire-->
            <select name="months" id="months"> <!--Je donne un name "months" à mon select-->
                <?php //ouverture balise php
                
                $arrayMonths = array( // création de ma variable sous forme de tableau ( array ) $arrayMonths
                    '1' => 'Janvier', // je donne une clé et une valeur pour chaque mois
                    '2' => 'Février',
                    '3' => 'Mars',
                    '4' => 'Avril',
                    '5' => 'Mai',
                    '6' => 'Juin',
                    '7' => 'Juillet',
                    '8' => 'Août',
                    '9' => 'Septembre',
                    '10' => 'Octobre',
                    '11' => 'Novembre',
                    '12' => 'Décembre'
                );
                
                $selected = ''; // création variable $selected, je la met vide. Elle me servira à laisser aficcher le choix de la personne pour le mois et l'année!
                
                foreach($arrayMonths as $key => $value) { //boucle foreach dans mon tableau $arrayMonth
                    if($_POST['months'] == $key) { // si le choix est strictement égal à la clé 
                        $selected = 'selected'; // le choix restera après validation
                    }
                    ?>
                
                <option value="<?= $key; ?>"  <?= $selected; ?>><?= $value; ?></option> <!-- Je lui met $key en value, je n'oublie pas d'appeler le $selected et je lui met donc $value à afficher -->
                
                <?php
                
                $selected =''; // réinitialisation de selected
                }
                        
                ?>
                
            </select>  
            
            <select name="years" id="years"> <!-- Je donne un name "years" à mon select -->
                
                <?php 
                
                $selected =''; // Je rappel mon $selected
                
                for($years = 1950; $years <= 2035; $years++) { // je créer une boucle avec la variable $years à laquelle je donne une valeur, si elle est inférieur ou égal à 2035, on lui rajoute +1
                    if($_POST['years'] == $years) { // si le choix est égal à la variable de ma boucle
                        $selected = 'selected'; // j'active le selected
                    }
                    
                ?>
                <option value="<?= $years; ?>" <?= $selected; ?>><?= $years ?></option> <!-- je donne $years comme valeur, je rappel le selected, et donc j'affiche $years -->
                <?php
                
                $selected = ''; // on remet le selected à 0
                }
                ?>
                
            </select>
            
            <input type="submit" value="Valider" />
            
        </form>
        
        <?php 
        
                setlocale(LC_TIME, 'fr-FR.utf8', 'fra'); // je définis la date en français
                
                $days = array( // je créer un tableau des jours
                    'Lundi',
                    'Mardi',
                    'Mercredi',
                    'Jeudi',
                    'Vendredi',
                    'Samedi',
                    'Dimanche'
                );
                
                if(isset($_POST['months']) and isset($_POST['years'])) { // je vérifie que Months et years existe bien
                    $dayOne = mktime(0, 0, 0, $_POST['months'], 1, $_POST['years']); // je créer une variable $dayOne je lui donne 0 0 0 en heure minute et seconde, il prendra le choix du mois, le 1er jour du mois et l'année choisis
                    $daysNumber = date('t', $dayOne); // je créer une variable $daysNumber, je le définis sur date, le t prends le nombre de jour dans le mois ( de 28 à 31 ) et je lui rajoute $dayOne
                    $dateGetInfo = getdate($dayOne); // je créer une variable $dateGetInfo à laquel je rajoute la fonction getdate qui va récupérer donc la date de mon $dayOne
                    $daysWeek = $dateGetInfo['wday'] - 1; // je créer une variable $daysWeek, je lui donne donc $dateInfos et je rajoute wday qui signifie les jours de la semaine, je met - 1 pour prendre en compte les années bisextile
                    
                    if($daysWeek < 0) { // si ma date est inférieur à 0
                        $daysWeek = 0; // je définis ma date sur 0
                    }
                    $currentDays = 1; // création de ma variable $currentDays que j'initialise à 1
             
        ?>
        
        <table class="text-center mt-5 mx-auto">
            <tr id="days">
                
                <?php 
                foreach($days as $day) { // j'appels mon tableau des jours
                    
                    ?>
                
                <th class="p-5"><b><i><?= $day; ?></i></b></th> <!-- j'affiche mon tableau des jours -->
                
                <?php
                }
                ?>

                
            </tr>
            
            <tr>
                
                <?php
                
                if($daysWeek > 0) { // si ma variable est supérieur à 0 
                   
                ?>
              
                <td class="p-5 text-center" colspan="<?= $daysWeek; ?>"></td> <!--je créer un colspan et j'intègre le daysweek -->
                
                <?php
               
                }
                
                while($currentDays <= $daysNumber) { // tan que ma variable currentdays est inférieur ou égale à $dayNumber
                    if ($daysWeek == 7) {  // si les jours atteignes 7
                        $daysWeek = 0; // alors les jours repasse à 0
                
                ?>
                
            </tr>
            <tr>
                
                <?php 
                    }
                ?>
                
                <td class="p-5 text-center bg-white"><?= $currentDays; ?></td> <!-- J'affiche les currentsday -->
                
                <?php
                
                $currentDays++; // j'incrémente les currents day
                $daysWeek++; // j'incrémente les daysweek
                }
                
                if ($daysWeeks != 0) { // si daysweek est différend de 0
                    $newDays = 7 - $daysWeeks; // je créer une nouvelle variable que j'initialise à 7, et je la soustrait avec $daysweeks
                
                ?>
                
                <td  class="p-5" colspan="<?= $newDays; ?>"></td> <!-- j'appelle ma variable newdays -->
                
            </tr>
           
        </table>
        
                <?php }
                
                }
                
                ?>
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
