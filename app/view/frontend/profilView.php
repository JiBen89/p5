<?php $title = "Profile"; ?>
<?php ob_start(); ?>
<div class="container-fluid my-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?php echo htmlspecialchars($userInfos['avatar']) ?>" width="300px">
                <form method="POST" action="index.php?action=setAvatar" enctype="multipart/form-data">
                    <input type="file" name="avatar"><br>
                    <input type="submit" value="envoyer" name="submit">
                </form>
            </div>
            <div class="col">
                <h1>Coucou <?php echo htmlspecialchars($userInfos['pseudo']) ?></h1><br />
                Ici tu trouveras les informations concernant ton profile.<br />
                Tu vas même pouvoir ajouter un avatar! Attention, c'est la seule image que tu pourras uploader sur le site via un fichier annexe, <br />
                les autres images devront être prises via ta webcam ou la caméra de ton téléphone mobile cellulaire intelligent portatif ! <br />
                Tu pourras voir ou en est ton évolution et peut être même rentrer d'autre données !
            </div>
            <div class="row text-center m-5">
                <div class="col">
                <a href="index.php?action=myPics" id="pictureTook">All the pictures taken</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>