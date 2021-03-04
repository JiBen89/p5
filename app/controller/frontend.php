<?php
require "vendor/autoload.php";

use app\model\PicsManager;
use app\model\UserManager;

function getInscriptionView()
{
    require('app/view/frontend/inscriptionView.php');
}
function pseudoAvailiable($pseudo)
{
    $userManager = new UserManager();
    $userExist = $userManager->checkUser($pseudo);
    return $userExist;
}
function addUser($pseudo, $pass, $mail)
{
    $hashed = password_hash($pass, PASSWORD_DEFAULT);
    $pseudoExist = pseudoAvailiable($pseudo);
    $error = true;
    $userManager = new UserManager();
    if ($pseudoExist === false) {
        $affectedLines = $userManager->addUser($pseudo, $hashed, $mail);
        if ($affectedLines === false) {
            $error = true;
        }
    } else {
        throw new Exception('le pseudo est déjà utilisé <a href="index.php?action=inscriptionView"> retour ici </a>!');
    }
    if (!$error) {
        header('Location: index.php');
    }
}

function connectUser($pseudo, $pass)
{
    $connectUser = new UserManager();
    $userData = $connectUser->getUser($pseudo);
    if (!empty($userData)){
        $isPasswordCorrect = password_verify($pass, $userData['pass']);
        if ($isPasswordCorrect){
            $_SESSION['idUser'] = $userData['id'];
            $_SESSION['pseudo'] = $userData['pseudo'];
            $_SESSION['adm'] = $userData['adm'];
            header('Location: index.php' );
        }
    }
        else {
            echo 'Mauvais mot de passe !';
        }
}

function updateAvatar($avatarWay , $id) 
{
    var_dump($avatarWay, $id);
    $avatar = new UserManager();
    $avatarPicture  = $avatar->setAvatar($avatarWay, $id);
    return $avatarPicture;
}

function sendPicsToDb($fileName, $kindOfpicture, $idUser, $privat)
{
    $pictureIndb = new PicsManager();
    $pix = $pictureIndb->sendPicture($fileName, $kindOfpicture, $idUser, $privat);

    if ($pix === false) {
        throw new Exception('Impossible de charger les photos ' );
    }
}
function getAllPics()
{
    $numberPUblicPics = new PicsManager();
    $allPublicPics = $numberPUblicPics->totalPublicPics();

    if (isset($_GET['p'])) {
        $currentPage = $_GET['p'];
    } else {
        $currentPage = 1;
    }

    $pixPerPage = 30;
    $pixTotal = $allPublicPics->rowCount();
    
    $nbPage = ceil($pixTotal/$pixPerPage);

    $departure  = ($currentPage-1)*$pixPerPage;

    $pictures = new PicsManager();
    $allFacesPics = $pictures->getAllPics($departure, $pixPerPage);

    require('app/view/frontend/landingView.php');
    return $allFacesPics;
}

function getMyPicsView($idUser)
{
    $pictures = new PicsManager();
    $data = $pictures->getPictures($idUser);

    require('app/view/frontend/myPicsView.php');
    return $data;
}

function getMeteoView()
{
    require('app/view/frontend/meteoView.php');
}

function getProfilView()
{
    require('app/view/frontend/profilView.php');
}
function takePicture()
{
    require('app/view/frontend/webcamView.php');
}
function getConnectionView()
{
    require('app/view/frontend/connectionView.php');
}
function choseKind()
{
    require("app/view/frontend/kindOfPixView.php");
}
function getWhyView()
{
    require("app/view/frontend/whyView.php");
}
function getStoreImageView()
{
    require("app/view/frontend/storeImage.php");
}
function landing()
{
    getAllPics();

}