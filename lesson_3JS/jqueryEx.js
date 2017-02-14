'use strict';


window.showWeather = function(){
  $.ajax({
    				url: "https://api.forecast.io/forecast/5f1c3e52990f71327a89217a24505159/42.0347222,-93.6197222?units=us&lang=en",
    				dataType: "jsonp",
    				success: function (data) {
  	      		console.log('The JsonP Object: ');
  	      		console.log(data);
              document.getElementById("NetweatherContainer").innerHTML =	"<div>"+"Ames"+", Iowa"+
  										"</div><div style=\"font-size:300%;clear:left\"> "+
  										Math.round((data.currently.apparentTemperature))+" "+"F"+
  										"</div><div class=\"right\"><strong>Humidity</strong><br/>"+
  										Math.round(data['currently']['humidity']*100*10)/10+"%</div><div class=\"right\"><strong>Pressure</strong><br/>"+
  										 Math.round((data['currently']['pressure']*0.00131579)*100)/100+
  										" atm</div><div style=\"clear:left\">"+
  										data['currently']['summary']+"</div><div class=\"clear\"></div>";
  	  				}
  				});
}
