<?php
    $dbLink=mysqli_connect('mysql-thomasfillols.alwaysdata.net', '189840','pikachuchu')
        or die('Erreur de connexion au serveur:'.mysqli_connect_error());

    mysqli_select_db($dbLink,'thomasfillols_td2')
        or die('Erreur dans la sélection de la base:'.mysqli_error($dbLink));

    $query='SELECT id, email, date1 FROM User';

    if(!($dbResult=mysqli_query($dbLink, $query))){
        echo'Erreur de requête<br/>';
        //Affiche le type d'erreur.
        echo'Erreur:'.mysqli_error($dbLink).'<br/>';
        //Affiche la requête envoyée.
        echo'Requête:'.$query.'<br/>';
        exit();
    }

    while($dbRow=mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow['id'].'<br/>';
        echo $dbRow['email'].'<br/>';
        echo $dbRow['date1'].'<br/>';
        echo'<br/><br/>';
    }
?>