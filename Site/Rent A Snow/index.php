<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 16.12.2019
 * Time : 14:23
 *
 *
 */


require "controler/controler.php";
if(isset($_GET['action'])){
    $action = $_GET['action'];

    switch ($action){
        case 'home':
            home();
            break;
        case 'login':
            login();
            break;
        case 'contact':
            contact();
            break;
        default:
            home();

    }

}else{

    home();

}


?>