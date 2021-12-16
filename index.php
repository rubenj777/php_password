<?php require_once "logique.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/superhero/bootstrap.min.css" />
    <title>Verification</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="/verification">Verification</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="Verification">Verification
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chut...</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <?php
        echo $error;
        echo $content;

        if (isset($_GET['personne1'])) {
            echo $personne1;
        };
        if (isset($_GET['personne2'])) {
            echo $personne2;
        };
        if (isset($_GET['personne3'])) {
            echo $personne3;
        };
        if (isset($_GET['personne4'])) {
            echo $personne4;
        };
        if (isset($_GET['personne5'])) {
            echo $personne5;
        };

        ?>
    </div>
</body>

</html>