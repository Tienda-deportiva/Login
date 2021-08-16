<?php 

    include_once '../lib/helpers.php';
    
    include_once '../view/partials/head.php';
    include_once '../view/partials/header.php';
    include_once '../view/partials/navbar.php';
    //Condicion para restringir el acceso a la pagina
    if (isset($_SESSION['auth'])) {
        if ($_SESSION['auth']!= "ok") {
            redirect("login.php");
        }
    }else{
        redirect("login.php");
    }
    if (isset($_GET['modulo'])) {
       resolve();
    }else{
        include_once '../view/partials/content.php';
    }
    
    include_once '../view/partials/footer.php';
?>