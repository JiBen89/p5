
    const webcamElement = document.getElementById('webcam');
    const canvasElement = document.getElementById('canvas');
    const snapSoundElement = document.getElementById('snapSound');
    const webcam = new Webcam(webcamElement, 'user', canvasElement, snapSoundElement);

    let btnOn = document.getElementById('camOn');
    let btnOff = document.getElementById('camOff');
    let btnShoot = document.getElementById('shoot');

    btnOn.addEventListener("click", function () {
    webcam.start()
        .then(result => {
            console.log("webcam started");
        })
        .catch(err => {
            console.log(err);
        })})

    btnOff.addEventListener("click", function () {
    webcam.stop()
        .then(result => {
            conseole.log("webcam off");
        })
        .catch(err => {
            console.log(err);
        })})

    btnShoot.addEventListener("click", function () {
    webcam.snap()
        .then(result => {
            console.log("photo taken")
        })
        .catch(err => {
            console.log(err);
        })})

