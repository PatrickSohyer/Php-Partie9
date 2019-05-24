<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <title>Exercice 4, Partie 9</title>
        
    </head>
    
    <body class="colorBackgroundBody">
        
        <div class="text-center">
            <h1>EXERCICE 4, PARTIE 9</h1>
        </div>
        
        <div class="container container-fluid">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="exerciceConsign p-2 mt-3">
                        <i>Afficher le timestamp du jour.
Afficher le timestamp du mardi 2 août 2016 à 15h00.</i>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
        
       $time = time();
       $timestamp2 = 1470142800;
       setlocale(LC_TIME, 'fr_FR.UTF8');
             
        ?>
        
        <div class="timeClock text-center">
            <p class="date m-0">On est le : <b><?= date('j /  m / Y', $time); ?></b></p>
            <p class="date m-0">Le 2 août 2016 à 15h00 nous étions le : <b><?= strftime('%A %d %B %Y à %H', $timestamp2); ?></b></p>
        </div>
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
