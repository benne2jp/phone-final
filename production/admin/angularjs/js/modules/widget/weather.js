"use strict";
(function(){
    angular.module('blankonApp.widget.weather', [])

        .controller('widgetWeatherCtrl',function(){
            var icons = new Skycons({"color": "white"},{"resizeClear": true}),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        })

})();