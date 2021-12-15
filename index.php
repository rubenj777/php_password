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
    ]
];

$username = false;
$password = false;

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
        <button class='btn btn-info m-2' name='indice1'>indice 1</button>
        <button class='btn btn-info m-2' name='indice2'>indice 2</button>
        <button class='btn btn-info m-2' name='indice3'>indice 3</button>
        </div>
    </form>";

$indice1 = "<p class='text-center'>username:<br>il est parfois salé<br>password :<br>il en porte sur le nez</p>";
$indice2 = "<p class='text-center'>username:<br>à ne pas confondre avec Hedi<br>password:<br>la marque de sa nouvelle voiture</p>";
$indice3 = "<p class='text-center'>username:<br>cheveux bleus<br>password:<br>elle en maîtrise l'art</p>";


$content = $formulaire;
$error = "";

if (isset($_GET['username']) && (isset($_GET['password']))) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    foreach ($users as $user) {
        $secret = "<h1 class='text-center'>bienvenue, " . $user['username'] . " !</h1>";
        if (!$username && !$password) {
            $error = "<h2 class='text-center'>aucun des champs n'est rempli</h2>";
        } elseif (!$username && $password) {
            $error = "<h2 class='text-center'>user non renseigné</h2>";
        } elseif ($username && !$password) {
            $error = "<h2 class='text-center'>password non renseigné</h2>";
            if ($username != $user['username']) {
                $error = "<h2 class='text-center'>user n'existe pas</h2>";
            }
        } else {
            if ($username == $user['username'] && $password == $user['password']) {
                $content .= $secret;
            } elseif ($username == $user['username'] && $password != $user['password']) {
                $error = "<h2 class='text-center'>le mot de passe est incorrect</h2>";
            }
        }
    }
}

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
        if (isset($_GET['indice1'])) {
            echo $indice1;
        };
        if (isset($_GET['indice2'])) {
            echo $indice2;
        };
        if (isset($_GET['indice3'])) {
            echo $indice3;
        };

        ?>
    </div>
</body>

</html>