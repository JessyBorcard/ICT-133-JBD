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
function home(){

    $_GET['action']="home";
    require "view/home.php";

}



?>