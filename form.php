<?php require("user.php"); ?>
<?php session_start(); ?>
<?php
$connect = new PDO('mysql:host=localhost;dbname=remediation;charset=utf8', 'root', '');
?>
<form name="inscription" method="post" action="form.php">
    Entre ton login : <input type="text" name="login" />
    Entre ton mdp : <input type="text" name="mdp" />
    Entre ton nom : <input type="text" name="nom" />
    Entre ton age : <input type="text" name="age" />
    <input type="submit" name="valider" value="OK" />
</form>
<?php
if (isset($_POST['valider'])) {
    if (empty($_POST['login'])) {
        echo "Login est vide.";
    } else {
        if (empty($_POST['mdp'])) {
            echo "Mot de passe est vide.";
        } else {
            $login = ($_POST['login']);
            $mdp = ($_POST['mdp']);
            $_SESSION['login'] = $login;
            echo "Vous êtes connecté !    ";
            $User1 = new User($_POST['login'], $_POST['nom'], $_POST['mdp'], $_POST['age']);
            echo $User1->getLogin() . '<p>';
            echo $User1->getNom() . '<p>';
            echo $User1->getMdp() . '<p>';
            echo $User1->getAge() . '<p>';
        }
    }
}
// il me manque juste la fonction deconnect a voir et logiquement ça sera bon
?>