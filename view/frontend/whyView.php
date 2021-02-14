<?php $title = "Pourquoi ?"; ?>
<?php ob_start(); ?>

<div class="container text-center">
    <div class="row">
        <div class="col">
        <h3>What is this ?</h3>
        <p>On peut être a même de se demander, pourquoi faire ce site ? Qu'elle est l'utilité ?

La question elle est vite répondue: pour voir les progrès / l'évolution,  photos après photos ! On pourrait se dire, pourquoi ne pas prendre une photo sur mon portable et le faire par moi-même ?

Ici, les photos sont stockées dans base de donnés à l'heure et jour ou elles ont été prise et ces données sont contrôlable !</p>

<h3>À qui est destiné ce site ?</h3>
<p>Ce site se destine aussi bien aux gyms addict qui veulent voir leurs progrès se dessiner, qu'aux gourous qui prétendent soigner l'acné en 1 semaine grâce à la rhubarbe, qu'à la fille qui arrête la cigarette pour voir si son teint change !
            </p>

        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>