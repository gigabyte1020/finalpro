<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Map</title>
    <link rel="stylesheet" href="lib/leaflet/leaflet.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">

    <!--    css for geocode-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<?php
$lloc="";
//     $lloc="L.latLng(50, 30)"; 
$str3=$_GET['lid'];
 $str2="L.";
$str3= lcfirst($str3); 
$lloc =  $str2.$str3;
 ?>
    <div class="row" style="width: 100%; height: 300px;" >
        
        <div id="map_div" class="col-md-12"></div>
    </div>

</div>


<script src="lib/leaflet/leaflet.js"></script>
<script src="lib/leaflet/jquery-3.5.1.js"></script>

<!--js file for geocode-->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>



<script>
          var latlng1 = <?php echo $lloc; ?>;
  
    var myMap;
var lyrOSM;    

    // create map object 
    myMap = L.map('map_div',  {center:[38.91454,-77.02171], zoom:12, zoomControl:false });

    //add basemap layer
    lyrOSM = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png'); 
    myMap.addLayer(lyrOSM);
    var latlng2 = L.latLng(50, 30);
    myMap.panTo(latlng1);
    var marker = L.marker(latlng1).addTo(myMap);
</script>

<body>
<?php ?>

</body>
</html>