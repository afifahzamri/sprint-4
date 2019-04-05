
let searchButton = document.getElementById("submit-btn");
var search_Input = document.getElementById("city");


var temperature = document.getElementById("temp");
var morning = document.getElementById("morning-div");
var afternoon = document.getElementById("afternoon-div");
var night = document.getElementById("night-div");
var locationname = document.getElementById("locationname");
var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");

searchButton.addEventListener("click", findWeatherDetails);
search_Input.addEventListener("keyup", enterPressed);

function enterPressed(event) {
    if (event.key === "Enter") {
        findWeatherDetails();
        
    }
}

function findWeatherDetails() {

    var api = "https://api.oip.tm.com.my/app/t/malaysia.open.data/met/1.0.0/v2/data?";
    var datasetid="datasetid=FORECAST";
    var datacategoryid ="&datacategoryid=GENERAL" ;
    var locationid = "&locationid=";
    var d = new Date();
    var currDate = String(d.getDate()).padStart(2,'0');
    var currMonth = String(d.getMonth()+ 1).padStart(2,'0');
    var currYear = d.getFullYear();
    var dateStr = currYear + "-" + currMonth + "-" + currDate ;
    var lang = "&lang=en";

    var sum = api + datasetid + datacategoryid + locationid + search_Input.value.slice(0, 12) + "&start_date=" + dateStr + "&end_date="+ dateStr + lang ;

    var request;
    request = new XMLHttpRequest();

    request.open("GET", "https://cors-anywhere.herokuapp.com/" + sum, true); // true for asynchronous 
    request.setRequestHeader("Content-Type","application/json");
    request.setRequestHeader("Authorization", "Bearer 0937382d-b291-3fc3-8bb6-6d9b30784e81");
    request.setRequestHeader("BEToken", "METToken 4a4d69b92255ffe7bcedd8afa9f37b8eed1c48ee");
    request.setRequestHeader("Origin","api.oip.tm.com.my");
    request.setRequestHeader("Access-Control-Allow-Origin","*");
    request.onload = function () {

        var data = JSON.parse(this.response);
        
        //output weather
        temperature.innerHTML = data.results[3].value + "°C/" + data.results[4].value + "°C";
        morning.innerHTML = " " + data.results[0].value;
        afternoon.innerHTML = data.results[1].value;
        night.innerHTML = " " + data.results[2].value;

        //output geolocation
        locationname.innerHTML = data.results[0].locationname +" , " + data.results[0].locationrootname;
        latitude.innerHTML = "Latitude:"+ " "+ data.results[0].latitude;
        longitude.innerHTML = "Longitude:" + " " + data.results[0].longitude



        if (request.status >= 200 && request.status < 400) {
            console.log(data);
        } else {
            console.log(search_Input.value);
        }
    }

    request.send();
}