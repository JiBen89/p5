<?php $title = "connexion"; ?>
<?php ob_start(); ?>
<div class="container">

    <div class="container" id="connection">
    <h2>Connexion</h2>
        <form action="index.php?action=connectionPost" method="post">
            <div class="row">
            <div class="col-lg-3 champ">
                </div>
                <div class="col champ">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="col-lg-3 champ">
                    <input type="text" id="pseudo" name="pseudo" />
                </div>
                <div class="col-lg-3 champ">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 champ">
                </div>
                <div class="col champ">
                    <label for="pass">Mot de passe</label>
                </div>
                <div class="col-lg-3 champ">
                    <input id="pass" type="password" name="pass" />
                </div>
                <div class="col-lg-3 champ">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-success" id="envoyer" />
                </div>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>