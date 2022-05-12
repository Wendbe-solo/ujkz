<?php
session_start();
include 'database.php';

    
    $valider = $_POST["valider"];

     $nom = $_POST["nom"];
     $prenom = $_POST["prenom"];
     $email = $_POST["email"];
     $passwords = md5($_POST["passwords"]);
     $pconf = md5($_POST["pconf"]);
    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;


    if($passwords==$pconf){
      // echo"mot de passe incorrect";
    
     $req = $base->prepare('INSERT INTO directeur(nom,prenom,email,passwords)
                        VALUES (:nom,:prenom,:email,:passwords)');

  $req->execute(array('nom'=>$nom, 'prenom'=>$prenom,'email'=>$email,'passwords'=>$passwords));
            
if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($password)  && !empty($password_repeat))
                        {
                          echo '<b>Veuillez remplir tous les champs</b>';
                  
                        }
                        else{


                        session_start();
                        $_SESSION['nom'] = $_POST['nom'];
                        $_SESSION['prenom'] = $_POST['prenom'];
                        header('Location:../index.html');


                        }


}
else{
  
  header("location: ./enregistad.php?error=1");
}
                        

                           ?> 