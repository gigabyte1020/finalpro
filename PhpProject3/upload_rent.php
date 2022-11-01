<!-- hOST UPLOADING HOTEL DETAILS -->
<script>
 if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
session_start();
require 'db_connection.php';
include 'banner1.php';

  if($_SESSION['user_role']!="host") {
    header("Location: error.php");
  exit;}
if(isset($_POST['upload']) )
{
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;



$hstid = $_SESSION['user_id'];
$rentname = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentname']));
$rentsumm = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentsumm']));
$rentdet = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentdet']));
$rentpr = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentpr']));

$checkbox1=$_POST['amn'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  


$rentadd = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentadd']));
$locadd = $_POST['txtbx'];
//echo $locadd;
$sql = "INSERT INTO `rent`(`rent_hostid`, `rent_name`, `rent_img`, `rent_detail`, `rent_price`, `rent_summary`, `rent_rules`,`rent_add`,`rent_latln`)  VALUES ('$hstid','$rentname','$filename','$rentdet','$rentpr','$rentsumm','$chk','$rentadd','$locadd')";
//echo "sqk is". $sql;
move_uploaded_file($tempname, $folder);
if(mysqli_query($db_connection, $sql)){
//    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
}

}
?>
<html>
    <body>
        
        <div class="typo inner-padding">
                    <div class="container">

        <div class="input-group allahsuper_mkstyles">
        <form action="" method='post'  enctype="multipart/form-data">
            
            
        <label for="name"><b>Name of your Place</b></label>
        <input  class="form-control"  type="text" placeholder="Enter name" name="rentname" required><br>

            
        <label for="name"><b>Upload Image</b></label>
        <input  class="form-control"  type="file" name="uploadfile" value=""> <br>
        
        <label for="name"><b>Enter a one sentence summary about your place</b></label>
        <input  class="form-control"  type="text" placeholder="Enter summary" name="rentsumm" ><br>
        
        <label for="name"><b>Enter some details about your place</b></label>
        <textarea  class="form-control" style="resize:none"  placeholder="Enter details" name="rentdet"></textarea><br>
        
        <label for="name"><b>Enter your price per night</b></label>
        <input  class="form-control"  type="number" placeholder="Enter price" name="rentpr"></textarea><br>
        
        <div class="typo inner-padding">  
           
        <label for="name"><b>Enter your Available amenities</b></label>
        <table class="table" border="1">  
 
   <tr>  
      <td>WiFi</td>  
      <td><input type="checkbox" name="amn[]" value="wifi"></td>  
   </tr>  
   <tr>  
      <td>Pets</td>  
      <td><input type="checkbox" name="amn[]" value="pets"></td>  
   </tr>  
   <tr>  
      <td>Free Parking</td>  
      <td><input type="checkbox" name="amn[]" value="park"></td>  
   </tr>  
   <tr>  
      <td>Pools</td>  
      <td><input type="checkbox" name="amn[]" value="pools"></td>  
   </tr>  
  
</table>  
</div>  
         <label for="name"><b>Enter address</b></label>
          <textarea  class="form-control" style="resize:none" placeholder="Enter address" name="rentadd"></textarea><br>
          
         <label for="name"><b>Select Location</b></label> 
        
         <!-- MAP STARTS -->
         
         
         
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

//
//function onMapClick(e) {
//    alert("You clicked the map at " + e.latlng);
//}

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
//window.alert(5 + 6);
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
         
         <!-- MAP ENDS -->
        <!--<input  class="form-control"  type="text" placeholder="Address goes herr" name="txtbx" id="txtbx"><br>-->
     
         <br>  <input hidden="" type="text" name="txtbx" id="txtbx"><br>        
<button type="submit" class="btn" name="upload">Upload</button>

        </form></div>
        </div></div><?php        include 'footer.php';?>
    </body>
</html>
