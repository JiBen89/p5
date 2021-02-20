<?php
require_once('model/UserManager.php');

function getInscriptionView()
{
    require('view/frontend/inscriptionView.php');
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
function takePicture()
{
    require('view/frontend/webcamView.php');
}
function getConnectionView()
{
    require('view/frontend/connectionView.php');
}
function choseKind()
{
    require("view/frontend/kindOfPixView.php");
}
function landing()
{
    require("view/frontend/landingView.php");
}
function getWhyView()
{
    require("view/frontend/whyView.php");
}
