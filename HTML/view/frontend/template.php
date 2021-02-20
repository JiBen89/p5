<!DOCTYPE html>
<html>

<head>
    <meta name="pixedevo" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/p4Style.css">

    <link rel="icon" type="image/png" href="images/logo.png" />
    <script type="text/javascript" src="https://unpkg.com/webcam-easy/dist/webcam-easy.min.js"></script>
</head>

<body>

    <header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">PixedEvo</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php?action=why">Utilité </a></li>
                <?php if (!empty($_SESSION['pseudo'])){
                    echo '<li class="nav-item"><a class="nav-link" href="index.php?action=takePicture">Photo </a></li>';
                }
                if (empty($_SESSION['pseudo'])) {
                    echo '
        <li class="nav-item"><a class="nav-link text-right" href="index.php?action=inscription">Inscription</a></li>
        <li class="nav-item"><a class="nav-link text-right" href="index.php?action=connection">Connection</a></li>';
                } else {
                    echo $_SESSION['pseudo'] . '<li class="nav-item"><a class="nav-lin text-danger" href="index.php?action=disconect" id="deco"> (déconexion) </a></li>';
                }
                ?>
            </ul>
        </nav>
        </div>
    </header>

    <?= $content ?>
</body>

</html>