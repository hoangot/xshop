<?php 
    // var_dump( $_SESSION);
    // exit();
    require_once "../../global.php";
    check_login();
    $VIEW_NAME = "trang-chinh/home.php";
    require "../layout.php";
?>