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


function checkPassword($username, $password)
{
    $data = jsonDecode("json.json");
    $username2 = "";
    $password2 = "";

    $bool = FALSE;
    if(!$data == null) {
        foreach ($data as $elements) {
            $username2 = $elements["username"];
            $password2 = $elements["password"];

        }
    }else{

        $bool = FALSE;
    }
        if ($password == $password2 || $username == $username2){
            $bool = FALSE;
        }else{
            $bool = TRUE;
        }



return $bool;
}
?>