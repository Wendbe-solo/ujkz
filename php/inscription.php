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
      <div class="container travail">

      <h3 class="text-center viens">Inscription Admin </h3>




      <center>
      <?php
    if(isset($_GET["error"])){
        if($_GET["error"]==1){
        echo"<div class='mot-de-pass' style='color:red;text-align:center;font-weight:bold;'
        >mot de passe different!</div>";
        }
        
    }
    ?>
    <div class="container-fluid formu">
        <div class=" row fofo">
            <div class=" col-md-10">
                <form action="inscription1.php" method="post">
                    Nom<input type="text" name="nom" id="" class="inputnom" required=""><br>
                    Prenom <input type="text" name="prenom" id="" class="inputprenom" required><br>
                    E-mail <input type="email" name="email" id="" class="inputmail" required><br>
                     Passwords<input type="passwords" name="passwords" id="" class="inputpasswords" required><br>
                    confirmer pass <input type="passwords" name="pconf" id="" class="inputpasswords1" required>
                    
                    <button type="submit" value="fermer" name="fermer" id="fermer"><a  class="buton" href="../index.html">Fermer</a></button> 
                    <span class="buton1"><button type="submit" value="Valider" name="valider" id="Valider"> Valider</button></span>

                </form>
        </center>
    </div>
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