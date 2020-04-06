<?php session_start();
?>
<?php require("user.php"); ?>
<?php
$connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');
?>
<form name="inscription" method="post" action="post.php">
    Entre ton login : <input type="text" name="login" />
    Entre ton age : <input type="text" name="age" />
    Entre ton nom : <input type="text" name="nom" />
    Entre ton mdp : <input type="text" name="mdp" />
    <input type="submit" name="valider" value="OK" />
</form>
<?php
if (isset($_POST['valider'])) {
    $_login = $_POST['login'];
    $_age = $_POST['age'];
    $_nom = $_POST['nom'];
    $_mdp = $_POST['mdp'];
    echo '' . $_login . ' ton nom est ' . $_nom . ' ton mdp est ' . $_mdp . ' tu as ' . $_age . ' ans.';
}
User1 = new User();
User1->getLogin();
User1->getNom();
User1->getMdp();
User1->getAge();

//$connection = $connect->prepare("SELECT * FROM remed WHERE nom,mdp");
//$connection = $connection->fetch();

//$_SESSION['nom'] = $connection['nom'];
//$_SESSION['mdp'] = $connection['mdp'];

?>