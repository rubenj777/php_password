<?php

$users = [
    [
        "username" => "julien",
        "password" => "f4585a3138607b53b00eb8cf0b1a27d1"
    ],
    [
        "username" => "abdel",
        "password" => "9f6cf82deb99289e14aea9dcc24e54cb"
    ],
    [
        "username" => "marie",
        "password" => "3e68052c6a8d5ebdf5f5b98c805b508f"
    ],
    [
        "username" => "gislain",
        "password" => "f8d5337cb3047dc21f6342c6f21ca0a4"
    ],
    [
        "username" => "thomas",
        "password" => "3f0cff1d3cc4642e15835d7304d453cc"
    ]
];

$salt = "45sdfç6za_r-6s*dq!66pqémmà)894fsd;f";

$formulaire = "<form class='text-center' method='post'>
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



if ((isset($_POST['username']) && isset($_POST['password'])) && (!empty($_POST['username']) && !empty($_POST['password']))) {
    $userExists = false;
    $password;
    foreach ($users as $user) {
        if ($_POST['username'] == $user['username']) {
            $secret = "<h2 class='text-center'>salut " . $user['username'] . " !</h2>";
            $userExists = true;
            $password = ($user['password'] . $salt);
        }
    }
    if ($userExists) {
        if ($password == md5($_POST['password']) . $salt) {
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
