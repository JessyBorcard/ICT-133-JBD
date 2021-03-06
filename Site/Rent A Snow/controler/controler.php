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

session_start();


require "model/passwordverification.php";
require "model/model.php";


/**
 * home
 * Use :open the home page
 */
function home()
{


    $_SESSION['time'] = currentTime();
    $_SESSION['greetings'] = timeIdentification($_SESSION['time']);
    $_GET['action'] = "home";
    require "view/home.php";
}
/**
 * login
 * Use : call login.php page
 */
function login($in){

    $bool = 0;
    $password = @$in['password'];
    $username = @$in['login'];
    $checkedpassword = checkPassword($username, $password);
    if(!$password){

        $_GET['action'] = "login";
        require "view/login.php";
    }else {

        if ($checkedpassword == FALSE) {

            $bool = 1;
            $_SESSION['login'] = $username;

            $_GET['action']="home";
            require "view/home.php";
        } else {

            $_GET['action'] = "login";
            require "view/login.php";
            $bool = 2;
        }

    }


$_POST['bool'] = $bool;



}


/**
 * products
 * Use :Open the products page
 */
function products(){



    $_GET['action'] = "products";
    require "view/products.php";

}

/**
 * logout
 * Use :logout the user
 */
function logout(){

    session_destroy();
    $_GET['action']="home";
    require "view/home.php";
}

function register($in){



    $_GET['action']="register";
    require "view/register.php";

    $password = @$in['passwordregister'];
    $username = @$in['usernameregister'];

    $data_array = array ($username ,$password);
    $key_array = array("username", "password");
    if(isset($password)) {
        jsonEncode("json.json", $data_array, $key_array);
    }
}

?>