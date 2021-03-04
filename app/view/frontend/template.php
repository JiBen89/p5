<!DOCTYPE html>
<html>

<head>
    <meta name="pixedevo" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="app/CSS/pixedevo.css">
    <link rel="stylesheet" type="text/css" href="app/CSS/bootstrap.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" type="text/css" href="app/CSS/pixedevo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">PixedEvo</a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?action=why">Utilité </a></li>
                    <?php if (!empty($_SESSION['pseudo'])):
                        echo '<li class="nav-item"><a class="nav-link" href="index.php?action=takePicture">Photo </a></li>' .
                            '<li class="nav-item"><a class="nav-link" href="index.php?action=profil">Profile </a></li>' .
                            '<li class="nav-item"><a class="nav-link" href="index.php?action=meteo">Meteo</a></li>' .
                            '<li class="nav-item"><a class="nav-link text-danger" href="index.php?action=disconect"> (déconexion) </a></li>';
                    endif;
                    if (empty($_SESSION['pseudo'])):
                        echo '
                    <li class="nav-item"><a class="nav-link text-right" href="index.php?action=inscription">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link text-right" href="index.php?action=connection">Connection</a></li>';
                    endif;
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <?= $content ?>
    <div class="container"> 
        <footer>Copyright Tout Droit Réservé Mozzap Corporation benjamincalmet@gmail.com to contact me</footer>
    </div>
</body>

</html>