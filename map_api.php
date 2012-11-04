<!DOCTYPE html>
<html>
    <head>
        <script
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>

        <script>
            var myPlace=new google.maps.LatLng(27.70781,85.315324);
            function initialize()
            {
                var mapProp = {
                    center:myPlace,
                    zoom:17,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
  
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var myCity = new google.maps.Circle({
                    center:myPlace,
                    radius:60,
                    strokeColor:"#666",
                    strokeOpacity:0.8,
                    strokeWeight:1.5,
                    fillColor:"#ffe8b0",
                    fillOpacity:0.4
                });

                myCity.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        <h2>Google Map of Ranipokhari, situated at Kathmandu, Nepal</h2>
        <div id="googleMap" style="width:700px;height:380px;"></div>
    </body>
</html>


