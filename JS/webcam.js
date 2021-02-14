

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

        let btnShoot = getElementById('shootMe');
        btnShoot.addEventListener("click", function () {
            webcam.snap();
            document.querySelector('#download-photo').href = "images/";
            }
