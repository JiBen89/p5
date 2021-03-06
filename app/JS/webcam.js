if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    Webcam.set({
        width: 300,
        height: 400,
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
};

let btnShootToo = document.getElementById("btnShootToo");

btnShootToo.addEventListener("click", function(){
    let counter = 5;
    let interval =  setInterval(function() {
        counter --;
        console.log(counter);
        document.getElementById("bip").innerHTML = counter;
        if (counter == 0){
            clearInterval(interval);
        }},1000);
});
