<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>Exercice 5, Partie 9</title>
        
    </head>
    
    <body class="colorBackgroundBody">
        
        <div class="text-center">
            <h1>EXERCICE 5, PARTIE 9</h1>
        </div>
        
        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</i>
                    </div>
                </div>
            </div>
        </div>
        
       <?php 
       
    $datetime1 = new DateTime('2018-11-27');
    $datetime2 = new DateTime('2016-05-16');
    $interval = $datetime2->diff($datetime1);
    
    $dateDay = time(); 
    $dateMay = mktime(00, 00, 00, 16, 5, 2016);
    $dateToday = date('d/m/Y');
    $datePast = date('16/5/2016');
    $interval2 = $dateDay - $dateMay;
       ?>
        
        <div class="dayMethod1 text-center mt-3">
            <p><b>Il y a <i><?= $interval->format('%a');  ?></i> jours qui séparent ces 2 dates</b></p>  
        </div>
        
        <div class="dayMethod2 text-center mt-5">
            <p><b>Le timestamp actuel est de <?= $dateDay ?> !</b></p> 
            <p><b>Le timestamp du 16 mai 2016 est de <?= $dateMay ?> ! </b></p>
            <p><b>L'interval entre les 2 dates est de <?= $interval->format('%a') ?> jours! </b></p>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>