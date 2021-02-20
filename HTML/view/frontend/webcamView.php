<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="text-center">
    <h1>Ta photo sera rangé dans la catégorie : <?php echo $_GET['action'] ?> </h1>
</div>
<div class="text-center">

    <button type="button" class="btn btn-primary btn-lg" id="camOn">On</button>
    <button type="button" class="btn btn-danger btn-lg" id="camOff">Off</button>
    <button type="button" class="btn btn-dark btn-lg" id="shoot">Shoot</button>


    <video id="webcam" autoplay playsinline width="640" height="480"></video>
    <canvas id="canvas" class="d-none"></canvas>
    <audio id="snapSound" src="audio/snap.wav" preload="auto"></audio>
</div>




<script language="JAVASCRIPT" src="JS/webcam.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>