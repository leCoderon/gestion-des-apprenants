<?php
require("src/models/User.php");

$email = null;
$password = null;

if (
    isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["password"]) && !empty($_POST["password"])
) {
    $email = htmlspecialchars($_POST["email"]);
    $password  = password_hash($_POST["password"], PASSWORD_DEFAULT);
} else {
    throw new Exception("vos informations sont incorrectes");
}

$success = createUser(
    $email,
    $password
);

if (!$success) {
    throw new Exception("Impossible de creer votre compte");
} else {
    $_SESSION['success'] = "Admin ajouter ajouter avec success";
    header("Location: index.php");
}
