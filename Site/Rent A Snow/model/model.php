<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 13.01.2020
 * Time : 14:51
 *
 *
 */

function currentTime(){
    $time = date("H:i:s") ;
    return $time;
}

/**
 * @param $time
 * timeIdentification
 * Use : get's current time and display various greetings depending on the time
 * @return string
 */
function timeIdentification($time){
    if ($time < 14 ){
        $greetings = "bonjour";
    }else if($time >= 14 && $time < 19){
        $greetings = "bon après-midi";
    }else if($time >= 19 && $time < 23){
        $greetings = "bonne soirée";
    }else if($time >= 23 && $time <=7){
        $greetings = "bonne nuit";
    }
    return $greetings;
}