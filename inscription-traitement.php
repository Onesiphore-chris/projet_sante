<?php
    session_start();
    require 'config.php';
    
    if(isset($_POST['nom']) && ($_POST['prenom']) && ($_POST['salaire']) && ($_POST['email']) && ($_POST['message'])){
        $nom= htmlspecialchars($_POST['nom']);
        $prenom= htmlspecialchars($_POST['prenom']);
        $salaire= htmlspecialchars($_POST['salaire']);
        $email= htmlspecialchars($_POST['email']);
        $message= htmlspecialchars($_POST['message']);

        $check = $dbb->prepare('SELECT prenom, salaire, email, message FROM sante WHERE email=?');
        $data =$check->fetch();
        $row = $check->rowCount();

        if($row == 0){

            if(strlen($email) <= 100){

                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $insert = $dbb->prepare('INSERT INTO sante (nom, prenom, salaire, email, message) VALUE(:nom, :prenom, :salaire, :email, :message)');
                    $insert->execute(array(
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'salaire' => $salaire,
                        'email' => $email,
                        'message' => $message
                    ));
                        echo header('Location:inscription-enrolement.php');
                    
                }else{
                     echo header('Location:inscription-enrolement.php?reg_err=email');
               }
            }else{
                echo header('Location:inscription-enrolement.php?reg_err=email_length');
               }
        }else{
            echo header('Location:inscription-enrolement.php?');
        }
    }else{

        // echo header('Location:inscription-enrolement.php?');
     var_dump($_POST);
    }
?>