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

/**
 * jsonDecode
 * Use : decode a json file and return it as a array
 * @return mixed
 */
function jsonDecode($path){
$str_json_file = file_get_contents($path);
 $decoded_json  =  json_decode($str_json_file, true);

 $out = $decoded_json;

return $out;
}

/**
 * @param $path
 * @param $data
 * @param $key
 * jsonEncode
 * Use : Encode, inputs to a specific file in json format
 */


function jsonEncode($path, $data, $key){
   $data_file_in = file_get_contents($path);


$json_data_in = array($key[0] => $data[0], $key[1] => $data[1]);

   $json_val = json_encode($json_data_in);

    $fh = fopen($path, 'r+') or die("can't open file");

    $stat = fstat($fh);
    ftruncate($fh, $stat['size']-1);
    fclose($fh);

    if(file_get_contents($path) == ""){
        file_put_contents($path, "[" . $json_val . "]", FILE_APPEND);
    }else {
        file_put_contents($path, "," . $json_val . "]", FILE_APPEND);
    }
}