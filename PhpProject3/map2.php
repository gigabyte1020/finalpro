<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First Map</title>
    <link rel="stylesheet" href="lib/leaflet/leaflet.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">

    <!--    css for geocode-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />


    <div class="row" style="width: 100%; height: 300px;" >
        
        <div id="map_div" class="col-md-12"></div>
    </div>

</div>


<script src="lib/leaflet/leaflet.js"></script>
<script src="lib/leaflet/jquery-3.5.1.js"></script>

<!--js file for geocode-->
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>



<script>
     if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
    var myMap;
var lyrOSM;    

$(document).ready(function () {
    // create map object 
    myMap = L.map('map_div',  {center:[38.91454,-77.02171], zoom:12, zoomControl:false });

    //add basemap layer
    lyrOSM = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png'); 
     myMap.addLayer(lyrOSM);

    // L.Control.geocoder().addTo(myMap);
    var geocoder = L.Control.geocoder({
        defaultMarkGeocode: true
    })
        .on('markgeocode', function(e) {
            var bbox = e.geocode.bbox;
            var poly = L.polygon([
                bbox.getSouthEast(),
                bbox.getNorthEast(),
                bbox.getNorthWest(),
                bbox.getSouthWest()
            ]).addTo(myMap);
            myMap.fitBounds(poly.getBounds());
           
        })
        .addTo(myMap);


function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}

myMap.on('click', onMapClick);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(myMap);

var latln=e.latlng.toString();
sessionStorage.setItem("lloc",latln);
document.getElementById("txtbx").value = latln;
}


myMap.on('click', onMapClick);

});</script>
<?php 
require 'db_connection.php';
if(isset($_POST['submit']) )
{
    echo "fsdffsf";
    $loc = $_POST['txtbx'];
    $sql = "INSERT INTO `loc`(`city`)VALUES ('$loc') ";
   if(mysqli_query($db_connection, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
}

}
            
?>
<body>
<form>
    <input type="text" name="txtbx" id="txtbx">
<input type="submit">
</form>
</body>
</html>