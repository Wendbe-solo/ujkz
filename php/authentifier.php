<?php
    session_start();
    include ('database.php');


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

                echo $_SESSION['email'];
                header('Location: index.php');

                

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>université</title>
</head>
<body class="container bod">

    <div class="card heade mb-3" >
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../image/Logo_Université_de_Ouagadougou.jpg" width="200px" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title">Université Joseph KI ZERBO <br> de OUAGADOUGOU </h4>
              <br><br><br>
              <h5 class="card-text">Application de gestion des Etudiants de UFR-SDS</h5>
            </div>
          </div>
        </div>
      </div>

      <br><br>

      <h3 class="text-center viens">Authentification </h3>

      <center>
      <div class="text-center image">
        <img src="../image/28399.png" width="100px" height="100px" class="rounded mx-auto d-block"  alt="...">
      </div>
    </center>
    <br>
      <center>
      <form action="" method="POST" align="center"> 
        <input type="text" name="email"  autocomplete="off" class="formulaire" placeholder="EMAIL"> 
        <br> 
        <br>
        <input type="password" name="mdp"  autocomplete="off" class="formulaire" placeholder="MOT DE PASSE">
        <br>
        <br>
        <br><br>
        <div class="container flex">
     <a href="../index.html" class="formula" > Retour
    </a>
        <input type="submit" value="Se connecter" class="formula" name="envoi">
  </div>
    </form>
      </center>





      <br> <br>



    <div class="d-flex bd-highlight fote">
        <div class="p-2 flex-fill bd-highlight">NOUS CONTACTER <br>
            Email: contact@ujkz.bf <br>
            Telephone: +226 25 30 70 64 /65 <br>
            Adresse: 03 BP 7021 Ouagadougou <br>
            03</div>
        <div class="p-2 flex-fill bd-highlight">Sciences de la Santé (SDS)</div>
        <div class="p-2 flex-fill bd-highlight">BIBLIOTHEQUES <br>
            Vous avez accès à plus <br>
            de 25 000 documents et <br>
            ouvrages.</div>
      </div>

      <p class="text-center fote">Copyright © Université Joseph KI-ZERBO 2022</p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>