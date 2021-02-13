<?php
require('controller/frontend.php');
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'inscription') {
            getInscriptionView();
        } elseif ($_GET['action'] == 'connection') {
            getConnectionView();
        } elseif ($_GET['action'] == 'inscriptionPost') {
            if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['mail'])) {
                if ($_POST['pass'] === $_POST['passCheck']) {
                    addUser($_POST['pseudo'], $_POST['pass'], $_POST['mail']);
                    header('location: index.php');
                } else {
                    echo 'les deux mots de passe ne sont pas indentiques <a href="index.php?action=inscriptionView"> retour ici </a>';
                }
            }}
    } else {
        landing();
    }
}catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}