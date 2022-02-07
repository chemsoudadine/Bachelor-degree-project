<?php include("database.php"); ?>
<?php
	session_start();
	unset ($_SESSION["AID"]);	
	session_destroy();
	echo "<script>window.open('../CFPSaida/','_self')</script>";
?>
