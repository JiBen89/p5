

class Map {
    constructor(id, lat, lng, zoom) {
        this.id = id;
        this.lat = lat;
        this.lng = lng;
        this.zoom = zoom;
        this.mymap = L.map(this.id).setView([this.lat, this.lng], this.zoom);   //    this.mymap = L.map('mapid').setView([45.75, 4.85], 13); 

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoiamliZW4iLCJhIjoiY2tiNHllZzNjMDluOTJ4cXZ5bW5ra2wzbSJ9.YfeQYnP-aH_9na2MAv9ptw'
        }).addTo(this.mymap);
    }

    drawMarker() {

        fetch('https://api.jcdecaux.com/vls/v1/stations?contract=Lyon&apiKey=c4e7d232ba3b819a4e16d71c72bb1b28521ecc42')
            .then(response => response.json())
            .then(json => {

                let greenIcon = new L.Icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                });

                let redIcon = new L.Icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                });

                let orangeIcon = new L.Icon({
                    iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-orange.png',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowSize: [41, 41]
                });

                var markers = new L.MarkerClusterGroup(); //création du grouppement de marker
                let btnReserver = document.getElementById("btn-reserve");
                for (let i = 0; i < json.length; i++) {
                    let iconeChoisie;
                    if (json[i].status == "OPEN") {
                        iconeChoisie = greenIcon;
                        if (json[i].available_bikes == 0) {
                            iconeChoisie = orangeIcon;
                        }
                    }
                    else {
                        iconeChoisie = redIcon;
                    }

                    let marker = L.marker([json[i].position.lat, json[i].position.lng], { icon: iconeChoisie });
                    marker.number = json[i].number;

                    marker.addEventListener("click", function () {
                        fetch('https://api.jcdecaux.com/vls/v3/stations/' + this.number + '?contract=Lyon&apiKey=c4e7d232ba3b819a4e16d71c72bb1b28521ecc42')
                            .then(response => response.json())
                            .then(json2 => {

                                bikeAvailiable.innerHTML = ("il y a : " + json2.totalStands.availabilities.bikes + " vélos disponibles");

                                if (json2.totalStands.availabilities.bikes === 0) {
                                    btnReserver.style.display = "none";
                                }
                                else {
                                    btnReserver.style.display = "block";
                                }
                                places.innerHTML = ("le nombre de place disponible est de : " + json2.totalStands.availabilities.stands);
                                if (json2.adresse === null || json2.address === '') {
                                    adresse.innerHTML = ("Adresse : " + json2.name);
                                    sessionStorage.setItem("currentAdress", json2.name);
                                }
                                else {
                                    adresse.innerHTML = ("Adresse : " + json2.address);
                                    sessionStorage.setItem("currentAdress", json2.address);
                                }
                            })
                    });
                    markers.addLayer(marker); // remplissage du grouppement de marker
                }
                this.mymap.addLayer(markers); //affichage du grouppement de marker  
            });
    }
}


