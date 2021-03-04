
let apiCall = function(city){
    
let url = 'https://api.openweathermap.org/data/2.5/weather?q='+ city +'&units=metric&appid=9ec6d5dabe01f5dffd22b6d008d84a64&lang=fr';

fetch(url).then( response => 
    response.json().then(data => {      
        document.getElementById('city').innerHTML = 
        "<i class='fas fa-city'></i> "+ data.name;
        document.getElementById('temp').innerHTML = 
        "<i class='fas fa-temperature-low'></i>" + data.main.temp + ' °';
        document.getElementById('humidity').innerHTML =
        "<i class='fas fa-tint'></i> " + data.main.humidity + ' %';
        document.getElementById('wind').innerHTML =
        "<i class='fas fa-wind'></i>" + data.wind.speed + ' km/h';
    }
        )).catch(err => console.log('erreur : ' + err));

        }

document.querySelector('form').addEventListener('submit', function(e){
    e.preventDefault();
    let city = document.getElementById('inputCity').value;
    apiCall(city);
})

apiCall('london');
