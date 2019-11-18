<?php
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