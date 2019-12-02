<?php


/**
 * Created by PhpStorm
 * Project's name :C to php
 * Use :show some values
 * User : Jessy.BORCARD
 * Date : 25.11.2019
 * Time : 09:03
 *
 *
 */


$value = 20;
$step = 3;
$i= 0;

while( $i < 10){
    if($value >= 30){
        printf("le nombre vaut %d\n", $value);
        echo "<br>";
    }else{
        printf("nombre trop petit\n");
        echo "<br>";
    }
    $value+=$step;
    $i++;
}
return 0;

?>