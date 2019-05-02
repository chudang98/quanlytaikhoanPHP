<?php
    session_start();

    include('./config.php');
    include('./model/model.php');
    include('./model/controller.php');
    
    // session_unset();
    $controll = "login";
    if(!empty($_SESSION))
        $controll = 'home';

    //! Gồm 5 module : 
    //     Home
    //     Sửa thông tin tài khoản : controller_edit
    //     Đăng nhập hệ thống : controller_login
    //     Hiển thị bảng danh sách các tài khoản : controller_view
    //     Thêm tài khoản : controller_add - Chưa hoàn thiện
    if(isset($_GET['controll']))
        $controll = $_GET['controll'];
    include("./controller/controller_" .$controll .".php");
?>