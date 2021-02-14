<?php $title = "shooting photo !"; ?>
<?php ob_start(); ?>
<div class="text-center">
    <h1>Ta photo sera rangé dans la catégorie : <?php echo $_GET['action'] ?> </h1>
</div>
<div class="text-center">
    <button type="button" class="btn btn-primary btn-lg" id="shootMe">Shoot Me BAD BOY !!!</button>
    <video id="webcam" autoplay playsinline width="640" height="480"></video>
    <canvas id="canvas" class="d-none"></canvas>
    <audio id="snapSound" src="audio/snap.wav" preload="auto"></audio>
</div>
<script language="JAVASCRIPT" src="../JS/webcam.js"></script>
<script>
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const snapSoundElement = document.getElementById('snapSound');
    const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);

    webcam.start()
        .then(result => {
            console.log("webcam started");
        })
        .catch(err => {
            console.log(err);
        });

    let picture = webcam.snap();
    document.querySelector('#download-photo').href = picture;
</script>








<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>