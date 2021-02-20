<?php $title = "hello"; ?>
<?php ob_start(); ?>
<div class="container text-center">
    <?php if (isset($_SESSION['pseudo'])) {
        echo   ' <h2>Bonjour ' . $_SESSION['pseudo'] . ' </h2>';
    }
    ?>
    <img src="images/avantapres.jpg" alt="statue avant après">
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>