<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body><script>
    
$(document).ready(function() {

//$("#demo").html($("#demo").text().replace(/wifi,/g, "<i class='fa fa-check'>Wifi </i> <br>"));
const container = document.getElementById('demo');

// 👇️ "One, Two, Three"
const result = container.textContent.trim();
let wifi = result.includes("wifi");

let park = result.includes("park");
let pools = result.includes("pools");
let pets = result.includes("pets");
if(wifi)
{
    </script><br>  <div class="icon-box col-md-3 col-sm-4">
								<a class="page-icons" href="#"><i class="fa fa-wifi" style="font-size:26px">Free WiFi</i></a>
							</div><script>
            
          
									
}
if(park)
{
    </script><br><i class="fas fa-car-side" style="font-size:26px">Parking Facilities</i><script>
}
if(pools)
{
    </script><br><i class="fas fa-swimming-pool" style="font-size:26px">Swimming Pool</i><script>
}
if(pets)
{
    </script><br><i class="fas fa-dog" style="font-size:26px">Pets Allowed</i><script>
}
});
</script>
	<div id="demo"> 		
<?php

require 'db_connection.php';

$result = mysqli_query($db_connection,"SELECT * FROM rent");
while($row = mysqli_fetch_array($result))

  {
    echo $row['rent_rules'];
  }
?>

</div>
<button id="button1">Get</button>

</body>
</html>