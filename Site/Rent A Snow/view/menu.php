<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 06.01.2020
 * Time : 13:59
 *
 *
 */
ob_start();
$titre = "Rent A Snow - Accueil";


?>


<div class="nav-collapse collapse">
    <ul class="nav nav-pills ddmenu">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li><a href="index.php?action=login">Login</a></li>
        <li><a href="view/content/contact.php">Produits</a></li>
    </ul>
</div>
</div>


<?php
$content2 = ob_get_clean();

require  "gabarit.php";

?>

