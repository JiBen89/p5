<!DOCTYPE html>
<html>

<head>
    <meta name="pixedevo" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/pixedevo.css">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">

    <link rel="icon" type="image/png" href="images/logo.png" />

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
                <?php if (!empty($_SESSION['pseudo'])) {
                echo '<li class="nav-item"><a class="nav-link" href="index.php?action=takePicture">Photo </a></li>' .
                    '<li class="nav-item"><a class="nav-link" href="index.php?action=profil">Profile </a></li>' .
                    '<li class="nav-item"><a class="nav-link text-danger" href="index.php?action=disconect"> (déconexion) </a></li>' ;
                    }
                    if (empty($_SESSION['pseudo'])) {
                        echo '
                    <li class="nav-item"><a class="nav-link text-right" href="index.php?action=inscription">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link text-right" href="index.php?action=connection">Connection</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </header>

    <?= $content ?>
    
</body>

</html>