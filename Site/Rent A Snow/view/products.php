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

echo "<table style='width:100%'><tr>";

echo "<th>"."marque" ."</th> " . "<th>". "modèle" ."</th>" ."<th>". "type" ."</th>"."<th>". "quantitée" ."</th>"."<th>". "prix" . "</th>";

for ($i = 1; $i <= 6; $i++) {
    echo "<tr>"."<td style=' border: 1px solid black;'>". implode("</td><td style=' border: 1px solid black;'> ", $snow["snow" . $i][0]) ."</td>". "</tr>";
}
echo "</table>";

?>



<?php

$content = ob_get_clean();

require "gabarit.php";

?>