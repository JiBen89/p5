<!DOCTYPE html>
<html> 
<head>
    <meta name="pixedevo" content="text/html; charset=utf-8"  />
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/p4Style.css">

    <link rel="icon" type="image/png" href="images/logo.png" />
</head>

<body>
    <header>
            <?php
            if (empty($_SESSION['pseudo'])) {
                echo '<div class="text-center" id="landingConnect">
                    <button type="button" class="btn btn-dark"><a href="index.php?action=inscription" class="text-white">Inscription</a></button>' .
                    '<button type="button" class="btn btn-dark"><a href="index.php?action=connection" class="text-white">Connexion</a></button>' .
                    '<button type="button" class="btn btn-light"><a href="index.php">Accueil</a></button>
                    </div>';
            } else {
                echo '<p class="text-right text-light"> Bonjour ' . $_SESSION['pseudo'] . ' ' . ' <a href="index.php?action=disconect" class="text-light"> (déconexion) </a></br></p>';
                echo '<div class="navbar-expand navbar-dark ">
                            <div class="row">
                                <a href="index.php?action=bioAuthor" class="navbar-brand col"> A propos de Jean Forteroche</a> 
                                <a href="index.php?action=allPosts" class="navbar-brand col"> L\'oeuvre complète </a>
                                <a href="index.php?" class="navbar-brand col"> Retour à l\'accueil  </a>
                            </div>
                        </div>';
            }
            ?>
    </header>
    <?= $content ?>
</body>

</html>