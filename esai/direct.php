<?php
session_start();

$bdd= new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
if(isset($_POST['envoi'])){
    if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['email']);
        $nom =  htmlspecialchars($_POST['nom']);
        $prenom =  htmlspecialchars($_POST['prenom']);
        $mdp = sha1($_POST['mdp']);

        $insertUser = $bdd->prepare('INSERT INTO directeur(email,nom,prenom, mdp)VALUES (?,?,?,?) ');
        $insertUser->execute(array($pseudo,$nom,$prenom, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM directeur WHERE email = ? AND nom =? AND prenom = ? AND mdp =?');
        $recupUser->execute(array($pseudo,$nom,$prenom,$mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['email'] = $pseudo;
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }

        echo $_SESSION['id'];
        header ('Location: directc.php');

        
    }else{
        echo "veuillez compléter tous les champ ...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    

<form action="" method="POST" align="center">
    <input type="email" name="email" autocomplete="off">
    <br>
    <input type="text" name="nom" autocomplete="off">
    <br>
    <input type="text" name="prenom" autocomplete="off">
    <br>
    <input type="password" name="mdp" autocomplete="off">
    <br><br>
    <input type="submit" value="envoiyer" name="envoi">
</form>
</body>
</html>