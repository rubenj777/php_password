<?php

$users = [
    [
        "username" => "julien",
        "password" => "lunettes"
    ],
    [
        "username" => "abdel",
        "password" => "peugeot"
    ],
    [
        "username" => "marie",
        "password" => "ninjutsu"
    ],
    [
        "username" => "gislain",
        "password" => "quinoa"
    ],
    [
        "username" => "thomas",
        "password" => "fromage"
    ]
];



$formulaire = "<form class='text-center'>
        <div class='form-group mb-3'>
            <input type='text' name='username' placeholder='username'>
        </div>
        <div class='form-group mb-3'>
            <input type='text' name='password' placeholder='password'>
        </div>
        <div class='form-group mb-3'>
            <button type='submit' class='btn btn-success'>GO !</button>
        </div>
        </form>
    <form>
        <div class='form-group text-center'>
        <button class='btn btn-info m-2' name='personne1'>personne 1</button>
        <button class='btn btn-info m-2' name='personne2'>personne 2</button>
        <button class='btn btn-info m-2' name='personne3'>personne 3</button>
        <button class='btn btn-info m-2' name='personne4'>personne 4</button>
        <button class='btn btn-info m-2' name='personne5'>personne 5</button>
        </div>
    </form>";

$personne1 = "<p class='text-center'>username:<br>il est parfois salé<br>password :<br>il en porte sur le nez</p>";
$personne2 = "<p class='text-center'>username:<br>à ne pas confondre avec Hedi<br>password:<br>la marque de sa nouvelle voiture</p>";
$personne3 = "<p class='text-center'>username:<br>cheveux bleus<br>password:<br>elle en maîtrise l'art</p>";
$personne4 = "<p class='text-center'>username:<br>aime les gâteaux<br>password:<br>ressemble à son nom de famille</p>";
$personne5 = "<p class='text-center'>username:<br>adore les comics<br>password:<br>mange beaucoup de plats à base de...</p>";


$form = true;
$content = $formulaire;
$error = "";

$emptyField = "<h2 class='text-center'>veuillez renseigner tous les champs</h2>";
$unknownUser = "<h2 class='text-center'>user inconnu</h2>";
$wrongPass = "<h2 class='text-center'>mauvais password</h2>";



if ((isset($_GET['username']) && isset($_GET['password'])) && (!empty($_GET['username']) && !empty($_GET['password']))) {
    $userExists = false;
    $password;
    foreach ($users as $user) {
        if ($_GET['username'] == $user['username']) {
            $secret = "<h2 class='text-center'>salut " . $user['username'] . " !</h2>";
            $userExists = true;
            $password = $user['password'];
        }
    }
    if ($userExists) {
        if ($password == $_GET['password']) {
            $form = false;
        } else {
            $error = $wrongPass;
        }
    } else {
        $error = $unknownUser;
    }
} else {
    $error = $emptyField;
}

$form ? $content = $formulaire : $content = $secret;

?>


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

        echo $content;
        echo $error;
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