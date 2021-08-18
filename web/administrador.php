<?php 
    include_once '../lib/helpers.php';
    include_once '../view/Administrador/head.php';
    echo "<body>";
        include_once '../view/Administrador/header.php';
        include_once '../view/Administrador/navbar.php';
        
    if (isset($_GET['modulo'])) {
        resolve();
     }else{
         include_once '../view/Administrador/content.php';
     }
        include_once '../view/Administrador/footer.php';
    echo "</body>";

?>