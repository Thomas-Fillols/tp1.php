<?php

    $dbLink = mysqli_connect('mysql-thomasfillols.alwaysdata.net', '189840', 'pikachuchu')
        or die('Erreur de connexion au serveur:' . mysqli_connect_error());

    mysqli_select_db($dbLink, 'thomasfillols_td2')
        or die('Erreur dans la sélection de la base:' . mysqli_error($dbLink));


    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];

    $query="SELECT id,password FROM User where id = '$identifiant' and password = '$mdp'";

    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo'Erreur:'.mysqli_error($dbLink).'<br/>';
        //Affiche la requête envoyée.
        echo'Requête:'.$query.'<br/>';
        exit();
    };

        $dbRow=mysqli_fetch_assoc($dbResult);

            if ($dbRow['id'] == $identifiant && $dbRow['password'] == $mdp) {
                header('Location:page1.php');
            } else {
                header('Location:page2.php');
            }

