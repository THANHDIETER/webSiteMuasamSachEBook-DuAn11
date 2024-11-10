<?php
    require_once 'connect/function.php';
    require_once 'controllers/homeController.php';
    require_once 'models/homeModel.php';

    $act=$_GET['act']??'/';
    match($act){
        '/'=>(new homeController())->home(),
        'detailpro' =>(new homeController())->detailpro($_GET['id'])
    }
?>