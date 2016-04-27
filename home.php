<?php
session_start();
include_once 'header.php';
?>
<head>
    <script src="http://maps.googleapis.com/maps/api/js">
    </script>
    <script>
            var myCenter = new google.maps.LatLng(-41.2244744, 174.8817894, 17);
            function initialize() {
                    var mapProp = {
                            center : myCenter,
                            zoom : 15,
                            mapTypeId : google.maps.MapTypeId.ROADMAP
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"),
                                    mapProp);
                    var marker = new google.maps.Marker({
                            position : myCenter,
                    });
                    marker.setMap(map);
                    var infowindow = new google.maps.InfoWindow({
                            content : "21 Kensington Ave, Petone, Lower Hutt 5012"
                    });

                    infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>


	<div class="w3-content">
		<div class="w3-row w3-margin">
			<div class="w3-container">
				<h2>Mission Statement</h2>
				<p>Our mission at AutoMate is to be your No. 1, no hassle go to
					companion for your used car buying and selling needs. It is free to
					post and view ads of cars. Just register to the site, sign-in and
					type in the details of the car you want to sell. To buy a car, just
					go to the find a car page use the filter options or just type in
					the search bar to see results. No memberships and fees needed. Just
					contact the seller and you are good to go.</p>
			</div>
		</div>
	</div>

	<div class="w3-center">
		<h2>Company Location</h2>
	</div>

	<div class="w3-content">
		<div class="w3-row w3-margin">
			<div class="w3-container">
				<!-- http://www.w3schools.com/googleapi/google_maps_overlays.asp -->
				<div class="google-maps">
					<div id="googleMap"></div>
				</div>
			</div>
		</div>
	</div>

	<br>

	<footer class="w3-container w3-center w3-dark-grey">
		<p>� 2016 All Rights Reserved Wellington Institute of Technology
			(WelTec)</p>
	</footer>



</body>
</html>