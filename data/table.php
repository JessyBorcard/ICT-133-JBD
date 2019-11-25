<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 25.11.2019
 * Time : 09:16
 *
 *
 */

echo date("l");

for($i = 0; $i <= 31; $i++){

    $days[$i] = array($i);
    echo implode( $days[$i]);
}


?>