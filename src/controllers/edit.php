<?php
require("src/models/Learner.php");
$id = $_GET['id'];
$learner = showLearner($id);    
require("views/edit.php");
