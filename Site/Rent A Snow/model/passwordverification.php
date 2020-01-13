<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 06.01.2020
 * Time : 14:29
 *
 *
 *
 * /








/* @param $password
 * @return bool
 */


function checkPassword($password){
    $bool = FALSE;
if ($password == "1234"){
    $bool = TRUE;

}else{
    $bool = FALSE;
}
return $bool;
}
?>