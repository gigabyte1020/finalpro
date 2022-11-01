
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<input type="text" name="daterange" value="" />

<script>
$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) 
  {
    document.getElementById("dte1").value = start.format('DD-MM-YYYY') ;
    var x = end.format('DD-MM-YYYY');
	document.getElementById("dte2").value= x  });
});
</script>
<form method="post">
	
<input type="text" id="dte1" name="dte1" value="" />
<input type="text" id="dte2" name="dte2" value="" />
        <input type="submit" value="Display" name="submit">
</form>
<?php

if(isset($_POST['submit']) )
{
	echo "workin";
	echo $_POST['dte1'];
	echo $_POST['dte2'];
}
?>