<?php

use function PHPSTORM_META\elementType;

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
                header('Location: index.php');
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
        } elseif ($_GET['action'] == 'profil') {
            getProfilView();
        } elseif ($_GET['action'] == 'setAvatar') {
            if(isset($_FILES['avatar']) && !empty($_FILES['avatar']['name'])){
                $sizeMax = 2097152;
                $extentisonValid = array('jpg','jpeg', 'gif', 'png');
                if ($_FILES['avatar']['size'] <= $sizeMax){
                    $extensionUpload = strtolower(substr( strrchr($_FILES['avatar']['name'],'.'), 1));
                    if(in_array($extensionUpload, $extentisonValid)){
                        $way = "member/avatar/" . $_SESSION['idUser'] .'.' . $extensionUpload;
                        $result = move_uploaded_file($_FILES['avatar']['tmp_name'], $way);
                        var_dump($way);
                        if ($result){
                            $avatarWay = $way ;
                            $id = $_SESSION['idUser'];
                            updateAvatar( $id, $avatarWay );
                            header('Location: index.php');
                        }else{
                            echo "fichier non importé";} 
                    } else {
                        echo "taille de l'image trop importante";
                }
                }
                } else {
                    echo "pas de fichier sélectionné" ;             //la photo ne doit pas dépasser 2 méga octet";
                } 
            } elseif ($_GET['action'] == 'storeImage') {
                getStoreImageView();
            } elseif ($_GET['action'] == 'sendToDb') {
                if(!empty($_POST['fileName'])){
                    sendPicsToDb($_POST['fileName'],  $_POST['kindOf'], $_SESSION['idUser'], 0);
                    getProfilView();
                } else { 
                    echo "pas d'images reçus";
            }}
    } else {
        landing();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
