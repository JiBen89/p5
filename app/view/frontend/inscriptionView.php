<?php $title = "Inscription"; ?>
<?php ob_start(); ?>
<div class="container" id="connectionCtn">

    <div class="container" id="inscriptionCtn">
        <form action="index.php?action=inscriptionPost" method="post"> 
            <h2>Inscription</h2>
            <div class="row">
                <div class="col-12 col-sm-6 my-3 ">
                    <label for="pseudo">Pseudo</label>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                    <input type="text" id="pseudo" name="pseudo"class="col-12 col-sm-10 col-lg-4 my-3" />
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-3 ">
                    <label for="pass">Mot de passe</label>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                    <input id="pass" type="password" name="pass" class="col-12 col-sm-10 col-lg-4 my-3"/>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-3 ">
                    <label for="passCheck">Vérification mot de passe</label>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                    <input id="passCheck" type="password" name="passCheck" class="col-12 col-sm-10 col-lg-4 my-3"/>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 my-3 ">
                    <label for="mail"> Email</label>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                    <input id="mail" type="email" name="mail" class="col-12 col-sm-10 col-lg-4 my-3"/>
                </div>
                <div class="col-12 col-sm-6 my-3 ">
                </div>
            </div>    
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-success" id="envoyer" class="col-12 col-sm-10 col-lg-4 my-3"/>
                    </div>
                </div>
        </form>

    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>