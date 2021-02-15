
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const snapSoundElement = document.getElementById('snapSound');
    const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);

    let btnOn = document.getElementById('camOn');
    let btnOff = document.getElementById('camOff');
    let btnShoot = document.getElementById('shoot');

    btnOn.addEventListener("click", function () {
        webcam.start();
            console.log("webcam started");
        })

    btnOff.addEventListener("click", function () {
        webcam.stop();
        })