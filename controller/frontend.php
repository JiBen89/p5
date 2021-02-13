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
function getConnectionView()
{
    require('view/frontend/connectionView.php');
}
function landing()
{
    require("view/frontend/landingView.php");
}
