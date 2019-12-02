<?php
/**
 * Created by PhpStorm
 * Project's name :show table
 * Use :show table
 * User : Jessy.BORCARD
 * Date : 25.11.2019
 * Time : 09:16
 *
 *
 */

echo date("F");
$tr = '';
$tr2 = '';
$td = '<td style="text-align: right;">';
$td2 = '</td>';
$increment = 8;
echo '<hr><br><table>';
$i = 1;
while( $i <= 31){
    $days[$i] = array($i);
    $td = '<td style="text-align: right;">';
    $td2 = '</td>';

    if ($days[$i] == null){
        break;
    }
    if($i == $increment){
        $tr = '<tr>';

        $increment = $increment + 7;

    }

    if($i%2){

        $td = '<td  style="width: 100px;background:#558BC5;text-align: right;">';

    }

    echo $tr. $td. implode( $days[$i]) . $tr2;
    $tr = '';
$td = '<td>';
    $i++;
}
echo '</table>'

?>