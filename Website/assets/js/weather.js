var xhr = new XMLHttpRequest();
var weatherCity = document.querySelector("#weather-city");
var weatherTemp = document.querySelector("#weather-temp");

xhr.onload = function () {

	if (xhr.status >= 200 && xhr.status < 300) {
		let res = JSON.parse(xhr.response);
		let city = res.name;
		let temp = res.main.temp + '°C';

		weatherCity.innerHTML = city;
		weatherTemp.innerHTML = temp;

	} else {
		console.log('The request failed!');
	}

	console.log('end of request');
};

xhr.open('GET', 'https://community-open-weather-map.p.rapidapi.com/weather?units=metric&mode=json&q=eindhoven');
xhr.setRequestHeader("x-rapidapi-host", "community-open-weather-map.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "0f7303e035msh9d179acf60d8a4ap1216ffjsn3ebef6b7f3de");
xhr.send();