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
    }

?>