<?php
try {
    $controller = isset($_GET['action']) ? $_GET['action'] : 'homepage';
    require('src/controllers/' . $controller . '.php');
} catch (Exception $e) {
    $message = $e->getMessage();
    require('views/404.php');
}
