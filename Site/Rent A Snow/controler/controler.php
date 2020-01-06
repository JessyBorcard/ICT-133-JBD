<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 16.12.2019
 * Time : 14:41
 *
 *
 */

/**
 * Function to redirect the user to the home page
 * (depending the action received by the index)
 */

require "model/passwordverification.php";
function home(){

    $_GET['action']="home";
    require "view/home.php";

}

/**
 * login
 * Use : call login.php page
 */
function login(){

    $bool = 0;
    $_GET['action'] = "login";
    if(!isset($_POST['password'])){}else {
        if (checkPassword($_POST['password']) == TRUE) {

            $bool = 1;
        } else {

            $bool = 2;
        }
    }

$_POST['bool'] = $bool;
    require "view/login.php";

}


?>