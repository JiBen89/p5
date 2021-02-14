<?php
require('controller/frontend.php');

session_start();
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'inscription') {
            getInscriptionView();
        } elseif ($_GET['action'] == 'inscriptionPost') {
            if (!empty($_POST['pseudo']) && !empty($_POST['pass']) && !empty($_POST['mail'])) {
                if ($_POST['pass'] === $_POST['passCheck']) {
                    addUser($_POST['pseudo'], $_POST['pass'], $_POST['mail']);
                    header('location: index.php');
                } else {
                    echo 'les deux mots de passe ne sont pas indentiques <a href="index.php?action=inscriptionView"> retour ici </a>';
                }
            } else {
                echo 'il faut remplir tous les champs d\'inscription pour envoyer à la base de deonnés';
            }
        } elseif ($_GET['action'] == 'connection') {
            getConnectionView();
        } elseif ($_GET['action'] == 'connectUser') {
            if (!empty($_POST['pseudo']) && !empty($_POST['pass'])) {
                connectUser($_POST['pseudo'], $_POST['pass']);
                header('location: index.php');
            } else {
                echo 'il faut remplir les champs d\'identification<a href="index.php?action=connectionView"> retour ici </a> !';
            }
        } elseif ($_GET['action'] == 'disconect') {
            session_destroy();
            header('location: index.php');
        } elseif ($_GET['action'] == 'why') {
            getWhyView();
        } elseif ($_GET['action'] == 'takePicture') {
            choseKind();
        }elseif (($_GET['action'] == 'landscapePix') || ($_GET['action'] == 'bodyPix') || ($_GET['action'] == 'facePix') || ($_GET['action'] == 'worksPix')|| ($_GET['action'] == 'worksPix')){
            takePicture();
        }
    } else
        landing();
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
