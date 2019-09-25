<?php
    $identifiant = $_POST['identifiant'];
    $sexe = $_POST['sexe'];
    $email = $_POST['E-mail'];
    $password = $_POST['mdp'];
    $telephone = $_POST['téléphone'];
    $pays = $_POST['nomPays'];
    $action = $_POST['action'];

    if ($action == 'mailer'){
        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL . $identifiant;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $password;
        $message .= 'Sexe : ' . PHP_EOL . $sexe;
        $message .= 'Telephone : ' . PHP_EOL . $telephone;
        $message .= 'Pays : ' . PHP_EOL . $pays;

        echo'<br/><strong>Mail envoyé</strong><br>';
    }
    else{
        echo'<br/><strong>Bouton non géré !</strong><br>';
    }