<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 20.01.2020
 * Time : 09:14
 *
 *
 */

ob_start();
$titre = "Rent A Snow - produits";


?>

<?php
$snow = jsonDecode();
echo "marque" ." : " . "modèle" ." : " . "type" ." : " . "quantitée" ." : " . "prix" . "</br>";

for ($i = 1; $i <= 6; $i++) {
    echo implode(" : ", $snow["snow" . $i][0]) . "</br>";
}

?>



<?php

$content = ob_get_clean();

require "gabarit.php";

?>