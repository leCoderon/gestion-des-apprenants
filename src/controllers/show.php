<?php
require_once("src/models/Learner.php");
$id = $_GET['id'];

$learner = showLearner($id);
require('views/show.php');