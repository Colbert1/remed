<?php session_start();
if (isset($_SESSION['Variable'])) {
    echo "Tu as le chiffre : " . $_SESSION['Variable'];
} else {
    echo "c'est votre premiere visite vous n'avez pas de variables de session";
    $_SESSION['Variable'] = rand(0, 1000);
}
echo '<form action="deco.php"><input type="submit"></form>';

?>