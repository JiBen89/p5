<?php $title = "Inscription"; ?>
<?php ob_start(); ?>
<div class="container" id="inscriptionCtn">
    <h2>Inscription</h2>
    <div class="container" id="inscriptionCtn">
        <form action="index.php?action=inscriptionPost" method="post"> 
            <!--  action => inscriptionPost
                post : pseudo, pass, passCheck, email
            -->
            <div class="row">
                <div class="col champ">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="col-lg-3 champ">
                    <input type="text" id="pseudo" name="pseudo" />
                </div>
            </div>
            <div class="row">
                <div class="col champ">
                    <label for="pass">Mot de passe</label>
                </div>
                <div class="col-lg-3 champ">
                    <input id="pass" type="password" name="pass" />
                </div>
            </div>
            <div class="row">
                <div class="col champ">
                    <label for="passCheck">Vérification mot de passe</label>
                </div>
                <div class="col-lg-3 champ">
                    <input id="passCheck" type="password" name="passCheck" />
                </div>
            </div>
            <div class="row">
                <div class="col champ">
                    <label for="mail"> Email</label>
                </div>
                <div class="col-lg-3 champ">
                    <input id="mail" type="email" name="mail" />
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