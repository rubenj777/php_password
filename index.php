<?php

$users = [
    [
        "username" => "ruben",
        "password" => "fromage"
    ],
    [
        "username" => "majax",
        "password" => "peugeot"
    ],
    [
        "username" => "marie",
        "password" => "bushido"
    ]
];

$username = false;
$password = false;


$secret = "bravo";

$formulaire = "<form>
        <div class='form-group'>
            <input type='text' name='username' placeholder='username'>
        </div>
        <div class='form-group'>
            <input type='text' name='password' placeholder='password'>
        </div>
        <div class='form-group'>
            <button type='submit' class='btn btn-success'>GO</button>
        </div>
    </form>";


$secret = "";

$content = $formulaire;


if (isset($_GET['username']) && (isset($_GET['password']))) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    foreach ($users as $user) {
        if (!$username && !$password) {
            $content .= "<h2>aucun des champs n'est rempli</h2>";
        } elseif ($username && !$password) {
            $content .= "<h2>password non renseigné</h2>";
            if ($username != $user['username']) {
                $content .= "<h2>user existe pas</h2>";
            }
        } elseif (!$username && $password) {
            $content .= "<h2>user non renseigné</h2>";
        } else {

            if ($username == $user['username'] && $password == $user['password']) {
                $content .= "<h2>ok</h2>";
            } else {
                $content .= "<h2>pas ok</h2>";
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
        <?= $content ?>
    </div>
</body>

</html>