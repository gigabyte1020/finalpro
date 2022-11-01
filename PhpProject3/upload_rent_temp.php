<!-- hOST UPLOADING HOTEL DETAILS -->
<script>
 if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>
<?php
session_start();
require 'db_connection.php';
include 'banner.php';
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
$rentrul = mysqli_real_escape_string($db_connection,  htmlspecialchars($_POST['rentrul']));

$locadd = $_POST['locadd'];
$sql = "INSERT INTO `rent`(`rent_hostid`, `rent_name`, `rent_img`, `rent_detail`, `rent_price`, `rent_summary`, `rent_rules`,`rent_add`)  VALUES ('$hstid','$rentname','$filename','$rentdet','$rentpr','$rentsumm','$rentrul','$locadd')";
//echo "sqk is". $sql;
move_uploaded_file($tempname, $folder);
if(mysqli_query($db_connection, $sql)){
    echo "Records inserted successfully.";
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
        
        <label for="name"><b>Enter some rules for your place</b></label>
         <textarea  class="form-control" style="resize:none"placeholder="Enter rules" name="rentrul"></textarea><br>
        
         <label for="name"><b>Enter address</b></label>
          <textarea  class="form-control" style="resize:none" placeholder="Enter address" name="locadd"></textarea><br>
          
         <label for="name"><b>Select Location</b></label> 
         <div id="myspecialdiv" style="  min-width: 936px;
  min-height: 475px;
  width: fit-content;
  height: fit-content;">
             <iframe id="iframeid" style="  min-width: 936px;
  min-height: 475px;
  width: fit-content;
  height: fit-content;" frameborder="0" src="map2.php"></iframe>
</div>
         <script >
//             var lloc = sessionStorage.getItem("lloc");
//document.getElementById("adloc").value = check;</script>

        <input  class="form-control"  type="text" placeholder="Address goes herr" id="adloc"><br>
             
<button type="submit" class="btn" name="upload">Sign Up</button>

        </form></div>
        </div></div><?php        include 'footer.php';?>
    </body>
</html>
