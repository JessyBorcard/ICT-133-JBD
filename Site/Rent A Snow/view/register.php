<?php
/**
 * Created by PhpStorm
 * Project's name :
 * Use :
 * User : Jessy.BORCARD
 * Date : 20.01.2020
 * Time : 14:20
 *
 *
 */


ob_start();
$titre = "Rent A Snow - login";


?>
    <form method="post" action="index.php?action=register">
        <label>login</label><input type="text" name="usernameregister" required><br>
        <label>password</label><input type="password" name="passwordregister" required><br>
        <input  type="checkbox" name="bool" hidden="">
        <input type="submit">   <input type="reset" value="reset">
    </form>
<?php $password = @$_POST['bool'];
?>
<?php if($password == 1) :  ?>
    <p>le mdp est juste</p>

<?php  else:?>
    <p>mot de passe incorrecte !</p>

<?php endif; ?>

<?php
$content = ob_get_clean();

require  "gabarit.php";

?>