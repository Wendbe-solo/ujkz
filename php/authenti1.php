<?php
    session_start();
    include 'database.php';
    
    $email=$_POST['email'];
    $passwords= md5($_POST['passwords']);
    $connecter=$_POST['connecter'];
    $error="";

    if(isset($connecter)){
        
        $verif=$base->prepare("SELECT * FROM directeur WHERE email=:email and passwords=:passwords limit 1");

        $verif->execute(array($email,$passwords));



        $utilisateur=$verif->fetchAll();
        if(!$utilisateur){

            $_SESSION['nom']=$nom;
            $_SESSION['connecter']='yes';

            header('location:index.php');
        }
    

        
        }
        ?>
    