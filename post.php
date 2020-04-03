<?php session_start();
?>
<?php
$connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');
?>
<form name="inscription" method="post" action="post.php">
    Entre ton nom : <input type="text" name="nom" />
    Entre ton mdp : <input type="text" name="mdp" />
    <input type="submit" name="valider" value="OK" />
</form>
<?php
if (isset($_POST['valider'])) {
    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];
    echo '' . $nom . ' ton mdp est ' . $mdp . '.';
}


$connection = $connect->prepare("SELECT * FROM remed WHERE nom,mdp");
$connection = $connection->fetch();

$_SESSION['nom'] = $connection['nom'];
$_SESSION['mdp'] = $connection['mdp'];

?>