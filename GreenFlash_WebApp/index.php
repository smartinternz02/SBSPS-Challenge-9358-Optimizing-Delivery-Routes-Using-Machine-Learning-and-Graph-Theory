<!DOCTYPE html>
<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
   <head>
      <title></title>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <!--[if mso]>
      <xml>
         <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            <o:AllowPNG/>
         </o:OfficeDocumentSettings>
      </xml>
      <![endif]-->
      <!--[if !mso]><!-->
      <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>
	  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
      <!--<![endif]-->
      <script src="js/jquery-3.2.1.min.js"></script>
      <link rel="StyleSheet" href="my_journey1.css" />
   </head>
   <body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">

<div id="map" style="height:600px;"></div>
<div id="content-container" >
			
<input type="hidden" id="route_id" />
			<div id="group_307"  >

				<div id="group_306"  >
					<div id="rectangle_3115"  ></div>
					<img src="skins/scooter.png" id="scooter" />
					<a id="_prize_link" href="reward.html" >
					<img src="skins/_prize.png" id="_prize" />
					</a>
					<a id="_user_link" href="profile.html" >
					<img src="skins/_user.png" id="_user" />
					</a>
					<div id="reward" >
						Reward
					</div>
					<div id="my_journey" >
						My Journey<br/>
					</div>
					<div id="profile" >
						Profile
					</div>

				</div>

			</div>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
		</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIjm11DjM8gXGnpAnHXLxX6g3gUP_VrL0"></script>
      
<script>
        let map, infoWindow;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 6,
  });
  //infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement("button");

   locationButton.textContent = "Let's Go";
   locationButton.classList.add("custom-map-control-button","start");
   map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(locationButton);
   locationButton.addEventListener("click", () => {
        if(locationButton.classList.contains("start")){
            $.ajax({
                url: 'start_route.php',
                success: function(r){
                    saveLoc(r);
                    locationButton.textContent = "Stop";
                    locationButton.classList.remove("start");
                    $('#route_id').val(r);
                }
            });
        }else{
            $.ajax({
                url: 'stop_route.php',
                data: {'route_id':$('#route_id').val()},
                success: function(r){
                    locationButton.textContent = "Let's Go";
                    locationButton.classList.add("start");
                    $('#route_id').val('');
                }
            });
        }
   });
  
  if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          lat = position.coords.latitude;
          lng = position.coords.longitude;

          //infoWindow.setPosition(pos);
          //infoWindow.setContent("Location found.");
          //infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
}

function fetchLoc(){
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          lat = position.coords.latitude;
          lng = position.coords.longitude;
          new google.maps.Marker({
                position: pos,
                map,
                title: "Hello World!",
          });
          //infoWindow.setPosition(pos);
          //infoWindow.setContent("Location found.");
          //infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
      return pos;
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  };

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

initMap();

function saveLoc(r){
    setInterval(() => {
        route = $('#route_id').val();
        if(route != ''){
            coords = fetchLoc();
            lat = coords.lat;
            lng = coords.lng;
            $.ajax({
                type:'POST',
                data:{"lat":lat, "lng":lng ,'route_id':r},
                url:"save_coords.php"
            });
        }
    }, 5000);
}


        </script>
</body>
</html>