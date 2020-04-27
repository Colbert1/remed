<?php require("user.php"); ?>
<?php
$connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');
?>
<form name="inscription" method="post" action="post.php">
    Entre ton login : <input type="text" name="login" />
    Entre ton mdp : <input type="text" name="mdp" />
    Entre ton nom : <input type="text" name="nom" />
    Entre ton age : <input type="text" name="age" />
    <input type="submit" name="valider" value="OK" />
</form>
<?php
if (isset($_POST['valider'])) {
    $User1 = new User($_POST['login'], $_POST['nom'], $_POST['mdp'], $_POST['age']);
    echo $User1->getLogin() . '<p>';
    echo $User1->getNom() . '<p>';
    echo $User1->getMdp() . '<p>';
    echo $User1->getAge() . '<p>';
    if ($User1->connect()) {
        echo "Connecté";
    } else(empty($_SESSION['login']) && empty($_SESSION['nom']) && empty($_SESSION['mdp']) && empty($_SESSION['age'])) {
        echo "Pas Connecté";
    }
}


?>