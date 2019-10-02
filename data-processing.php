<?php

    $dbLink=mysqli_connect('mysql-thomasfillols.alwaysdata.net', '189840','pikachuchu')
        or die('Erreur de connexion au serveur:'.mysqli_connect_error());

    mysqli_select_db($dbLink,'thomasfillols_td2')
        or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

    $today=date('Y-m-d');

    $identifiant = $_POST['identifiant'];
    $sexe = $_POST['sexe'];
    $email = $_POST['E-mail'];
    $password = $_POST['mdp'];
    $telephone = $_POST['téléphone'];
    $pays = $_POST['nomPays'];
    $action = $_POST['action'];

    $query='INSERT INTO User(date1,password,pays,sexe,email,telephone)VALUES(';
    $query.='"'.$today.'",';
    //$query.='"'.$identifiant.'",';
    $query.='"'.$password.'",';
    $query.='"'.$pays.'",';
    $query.='"'.$sexe.'",';
    $query.='"'.$email.'",';
    $query.='"'.$telephone.'")';

    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo'Erreur:'.mysqli_error($dbLink).'<br/>';
        //Affiche la requête envoyée.
        echo'Requête:'.$query.'<br/>';
        exit();
    }

    if ($action == 'mailer'){
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL . $identifiant;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $password;
        $message .= 'Sexe : ' . PHP_EOL . $sexe;
        $message .= 'Telephone : ' . PHP_EOL . $telephone;
        $message .= 'Pays : ' . PHP_EOL . $pays;
        echo'<br/><strong>Envoyé</strong><br>';
        //mail($email,'test',$message);
    }

    else{
        echo'<br/><strong>Bouton non géré !</strong><br>';
    }

