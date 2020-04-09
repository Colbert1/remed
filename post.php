<?php session_start();
?>
<?php require("user.php"); ?>
<?php
//$connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');
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
    $User1 = new User($_POST['login'], $_POST['age'], $_POST['nom'], $_POST['mdp']);
    echo "$User1->getLogin()";
    echo "$User1->getNom()";
    echo "$User1->getMdp()";
    echo "$User1->getAge()";
}


//$connection = $connect->prepare("SELECT * FROM remed WHERE nom,mdp");
//$connection = $connection->fetch();

//$_SESSION['nom'] = $connection['nom'];
//$_SESSION['mdp'] = $connection['mdp'];

?>