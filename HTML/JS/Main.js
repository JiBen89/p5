class Main {
    constructor() {


        let adresse = document.getElementById("adresse");
        let bikeAvailiable = document.getElementById("bikeAvailiable");
        let places = document.getElementById("places");
        let btnReserver = document.getElementById("btn-reserve");

        let slide1 = new Slide("Pour faire une reservation, choisissez une station.", 1, "../images/diapo1.jpg");
        let slide2 = new Slide("Rentrez votre nom et prenom dans les champs.", 2, "../images/diapo2.jpg");
        let slide3 = new Slide("Signez et validez votre reservation.", 3, "../images/diapo3.jpg");
        let slide4 = new Slide("Et voila,vous avez 20 minutes !", 4, "../images/diapo4.jpg");

        let getTab = [slide1, slide2, slide3, slide4];

        let mondiapo = new Slider(getTab);

        document.addEventListener("keydown", function (e) { //touche du clavier pour ajouter ou soustraire 1 a la valeur position 
            if (e.keyCode === 37) {
                mondiapo.defilerArriere();
            }
            else if (e.keyCode === 39) {
                mondiapo.defilerAvant();
            }
        }); // touche du clavier pour position - ou +
        btnAvant.addEventListener('click', () => { mondiapo.defilerAvant() });
        btnArriere.addEventListener('click', () => { mondiapo.defilerArriere() });

        document.getElementById('play').addEventListener('click', () => {
            clearInterval(mondiapo.timer);
            mondiapo.timer = setInterval(function () { mondiapo.defilerAvant(); }, mondiapo.timeRate);
        })

        document.getElementById('pause').addEventListener('click', () => {
            clearInterval(mondiapo.timer);
        })

        let maCarte = new Map('mapid', 45.75, 4.85, 13);
        maCarte.drawMarker();

        let inpName = document.getElementById("inpName");
        let inpSurname = document.getElementById("inpSurname");
        let currentStation = document.getElementById("currentStation");
        let blockCanvas = document.getElementById("block-canvas");

        btnReserver.addEventListener("click", function () {

            let name = inpName.value;
            let surname = inpSurname.value;

            inpName.innerHTML = localStorage.getItem("name");
            inpSurname.innerHTML = localStorage.getItem("surname");

            if (name == "") {
                alert("le champs nom est vide");
            } //message d'erreur champs name vide
            if (surname == "") {
                alert("le champs prénom est vide");
            }//message d'erreur champs surname vide
            if (name == "" || surname == "") {
                alert("Veuillez remplir le nom et le prénom.");
            }// si le nom ou le prénom n'est pas remplis message d'erreur

            localStorage.setItem("name", inpName.value);
            localStorage.setItem("surname", inpSurname.value);


            if (name != "" && surname != "") {
                blockCanvas.style.display = "block";
            }
        })


        let monCanvas = new CanvasObjet();

        canvas.addEventListener("mousedown", function (e) {
            monCanvas.draw = true;
            monCanvas.lastPosition = monCanvas.getMposition(e);
        });
        canvas.addEventListener("mousemove", function (e) {
            monCanvas.mousePosition = monCanvas.getMposition(e);
            monCanvas.canvasResult()
        });
        document.addEventListener("mouseup", function (e) {
            monCanvas.draw = false;
        });


        canvas.addEventListener("touchstart", function (e) {
            monCanvas.drawTouch = true;
            monCanvas.lastPositionTouch = monCanvas.getTposition(e);
        });

        canvas.addEventListener("touchmove", function (e) {
            monCanvas.touchPosition = monCanvas.getTposition(e);
            monCanvas.canvasResult();
            e.preventDefault();
        });
        canvas.addEventListener("touchend", function (e) {
            monCanvas.drawTouch = false;
        });

        let btnClear = document.getElementById("bt-clear");
        let btnSend = document.getElementById("bt-send");
        let myCountDown = new CountDown(20, 0);

        btnClear.addEventListener("click", function (e) {
            monCanvas.clearCanvas();
            monCanvas.draw = false;
            sessionStorage.setItem('canvasfull', this.draw);
        });

        let loadMin = sessionStorage.getItem('stkMin');
        let loadSec = sessionStorage.getItem('stkSec');
        let reservation = document.getElementById('block-reservation');

        btnSend.addEventListener('click', () => {
            let data = sessionStorage.getItem('canvasfull');
            if (data === 'true') {
                monCanvas.clearCanvas();
                monCanvas.draw = false;
                let currentAdress = sessionStorage.getItem("currentAdress");
                currentStation.innerHTML = "Mr " + localStorage.getItem("name") + " " + localStorage.getItem("surname") + " à réserver un vélo a la station : " + currentAdress;
                blockCanvas.style.display = "none";
                clearInterval(myCountDown.timer);
                myCountDown.reset(20, 0);
                myCountDown.timer = setInterval(function () { myCountDown.count(); }, 1000);
            }
            if (data !== "true") {
                alert("veuillez signer pour efffectuer une réservation");
            }
        });
        if (loadMin > 0 || loadSec > 0) {
            let currentAdress = sessionStorage.getItem("currentAdress");
            currentStation.innerHTML = "Mr " + localStorage.getItem("name") + " " + localStorage.getItem("surname") + " à réserver un vélo a la station : " + currentAdress;
            myCountDown.reset(loadMin, loadSec);
            myCountDown.timer = setInterval(function () { myCountDown.count(); }, 1000);
        }
    }
}
let monMain = new Main();
