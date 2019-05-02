<?php
    session_start();

    include('./config.php');
    include('./model/model.php');
    include('./model/controller.php');
    
    // session_unset();
    $controll = "login";
    if(!empty($_SESSION))
        $controll = 'home';
    if(isset($_GET['controll']))
        $controll = $_GET['controll'];
    include("./controller/controller_" .$controll .".php");
?>