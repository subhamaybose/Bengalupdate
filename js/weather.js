/*if("geolocation" in navigator){
	navigator.geolocation.getCurrentPosition(function(position) {
    loadWeather(position.coords.latitude+','+position.coords.longitude);
	});
}else{
	loadWeather("Kolkata, IN","");
}*/
$(document).ready(function() {
	//loadWeather("Kolkata, IN","");
	if("geolocation" in navigator){
		navigator.geolocation.getCurrentPosition(function(position) {
			setInterval(loadWeather(position.coords.latitude+','+position.coords.longitude), 1000);
		});
	}else{
		setInterval(loadWeather("Kolkata, IN",""), 1000);
	}
	//setInterval(loadWeather, 1000);
});
function loadWeather(location, woeid){
	$.simpleWeather({
		location: location,
		woeid: woeid,
		unit: 'c',
		success: function(weather) {
		  html = '<ul><li>'+weather.city+', '+weather.country+'</li></ul>';
		  html+= '<h2><img src="weathericons/'+weather.code+'.svg"> '+weather.temp+'&deg;'+weather.units.temp+'</h2><div class="clear"></div><a href="https://www.yahoo.com/news/weather" target="_blank">More</a>';
		  console.log(html);
		  //$("#weather").html(html);
		},
		error: function(error) {
			console.log(error);
		  $("#weather").html('<p>'+error+'</p>');
		}
    });
}