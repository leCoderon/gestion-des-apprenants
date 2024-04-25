<?php
session_start();
require_once("src/models/Learner.php");

if(!isset($_SESSION['admin']) && empty($_SESSION['admin'])){
    header("Location: index.php?action=loginForm");
}
$learners = getLearners();
require("views/homepage.php");
