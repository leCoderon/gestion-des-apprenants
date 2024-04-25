<?php
session_start();

require_once("src/models/Learner.php");
$firstname = null;
$lastname = null;
$email = null;
$phone = null;
$city = null;
$paid = 0;

if (
    isset($_POST['firstname']) && !empty($_POST['firstname'])
    && isset($_POST['lastname']) && !empty($_POST['lastname'])
    && isset($_POST['phone']) && !empty($_POST['phone'])
    && isset($_POST['email']) && !empty($_POST['email'])
    && isset($_POST['city']) && !empty($_POST['city'])
    && isset($_POST['paid'])
) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $paid = $_POST['paid'];
} else {
    $_SESSION['error'] = "Veuillez renseigner tous les champs";
    header("Location: index.php");
}


$success = storeLearner($firstname, $lastname, $email, $phone, $city, $paid);

if (!$success) {
    $_SESSION['error'] = "Impossible d'ajouter cet apprenant";
    header("Location: index.php?");
} else {
    $_SESSION['success'] = "Apprenant ajouter avec success";
    header("Location: index.php");
}
