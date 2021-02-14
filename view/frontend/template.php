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
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Photo</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Actu</a></li>
                        <li><a href="index.php?action=why">Info</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
    </header>
    <?php
    if (!empty($_SESSION['pseudo'])) {
        echo '<button type="button" class="btn" id="photo"><a href="index.php?action=takePicture"><img src="images/photo.png" alt="camera"></a></button>';
    }
    ?>
    <?php
    if (empty($_SESSION['pseudo'])) {
        echo '<div class="text-center" id="landingConnect">
                    <button type="button" class="btn btn-dark"><a href="index.php?action=inscription" class="text-white">Inscription</a></button>' .
            '<button type="button" class="btn btn-dark"><a href="index.php?action=connection" class="text-white">Connexion</a></button></div>';
    } else {
        echo $_SESSION['pseudo'];
        echo '<a href="index.php?action=disconect" class="text-danger"> (déconexion) </a></br></p>';
    }
    ?>
    <?= $content ?>
</body>

</html>