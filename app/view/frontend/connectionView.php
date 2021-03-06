<?php $title = "connexion"; ?>
<?php ob_start(); ?>
<div class="container">

    <div class="container" id="connection">
        <h2 class="my-3">Connexion</h2>
        <form action="index.php?action=connectUser" method="post">
            <div class="row justify-content-center">
                <div class=" col-12 col-sm-6 my-3">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="col-12 col-sm-6 my-3">
                    <input type="text" id="pseudo" name="pseudo" class="col-12 col-sm-10 col-lg-4  my-3" />
                </div>
            </div>
            <div class="row justify-content-center">

                <div class=" col-12 col-sm-6 my-3 ">
                    <label for="pass">Mot de passe</label>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                    <input id="pass" type="password" name="pass" class="col-12 col-sm-10 col-lg-4 my-3"/>
                </div>
            </div>
            <div class="row justify-content-center">
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