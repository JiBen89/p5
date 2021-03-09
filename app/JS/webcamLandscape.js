
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    Webcam.set({
        width: 690,
        height: 300,
        image_format: 'png',
        jpeg_quality: 100
    });
  }else{
    Webcam.set({
        width: 400,
        height: 300,
        image_format: 'png',
        jpeg_quality: 100
    });
  }
Webcam.attach( '#my_camera' );

function take_snapshot() {
    Webcam.snap( function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    } );
}

function take_snapshot_with_delay() {
    Webcam.snap( function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    } );
}

let btnShoot = document.getElementById("btnShoot");
let btnSubmit = document.getElementById("btnSubmit");

btnSubmit.style.display= "none";
btnShoot.addEventListener("click", function () {
    btnSubmit.style.display= "block";
} )
