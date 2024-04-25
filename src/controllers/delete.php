<?php
session_start();
require_once('src/models/Learner.php');

$id = $_GET["id"];


$success = deleteLearner($id);

if (!$success) {
    throw new Exception("Identifiant invalide");
} else {
    $_SESSION['success'] = "Apprenant supprimé avec success";
    header("Location: index.php");

}
