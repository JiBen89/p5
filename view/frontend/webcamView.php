<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="text-center">
    <div class="row" id="type">
    <h1>Ta photo sera rangé dans la catégorie : <?php echo $_GET['action'] ?> </h1>
    </div>
</div>
<div class="text-center container">
    <div class="text-center row"> 

    <button type="button" class="btn btn-primary col" id="camOn">On</button>
    <button type="button" class="btn btn-danger col" id="camOff">Off</button>
    <button type="button" class="btn btn-dark col" id="shoot">Shoot</button>
    </div>
</div>
<div class="container">
    <div class="row">
    <video id="webcam" autoplay playsinline width="640" height="480"></video>
    <canvas id="canvas" class="d-none"></canvas>
    <audio id="snapSound" src="audio/snap.wav" preload="auto"></audio>
    </div>
</div>




<script language="JAVASCRIPT" src="JS/webcam.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>