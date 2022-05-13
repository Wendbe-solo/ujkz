<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;','root','');
    if(isset($_POST['envoi'])){
        if(!empty($_POST['email']) AND !empty($_POST['mdp'])){

            $pseudo = htmlspecialchars($_POST['email']);
            $mdp = sha1($_POST['mdp']);

            $recupUser = $bdd->prepare('SELECT * FROM directeur WHERE email =? AND mdp =?');
            $recupUser->execute(array($pseudo,$mdp));

            if($recupUser->rowCount() >0 ){

                $_SESSION['email'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];

                header ('Location: index.php' );

            }else{ echo "votre email ou mot de passe est incorecte";

            }
        }else{
            echo "Veuillez compléter tous les champs ....";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexcion</title>
</head>
<body>
    <form action="" method="POST" align="center"> 
        <input type="email" name="email ">
        <br>
        <input type="password" name="mdp">
        <br><br>
        <input type="submit" value="envoyer" name="envoi">
    </form>
</body>
</html>