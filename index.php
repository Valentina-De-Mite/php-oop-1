<!-- 
Create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
include __DIR__ . '/Models/classMovie.php';
include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
            background-color: palevioletred;
        }
    </style>
    <title>Movies</title>
</head>

<body>

    <main>
        <div class="container m-auto">
            <div class="row mt-5">

                <?php foreach ($movies as $movie) : ?>

                    <div class="col-4">
                        <div class="card p-3 d-flex">
                            <h2>Titolo: <?= $movie->getTitle() ?></h2>
                            <p>Anno: <span><?= $movie->getYear() ?></span></p>
                            
                            <p>Genere: <span><?= $movie->getGenre() ?></span></p>
                            
                        
                            <p>Lingua Originale: <span><?= $movie->getLanguage() ?></span> </p>
                            
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>






