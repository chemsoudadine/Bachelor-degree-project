<?php 
	session_start();
    include("database.php"); 
?>
<!-- Delete General Chairs -->
<?php	
	if(isset($_POST['Delete_GC'])){
		if(isset($_GET['ID_GC'])){
			$sql = "DELETE FROM general_chairs WHERE ID_GC = '".$_GET['ID_GC']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_gc'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_gc'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_gc'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>

<!-- Delete Organization Chairs -->
<?php	
	if(isset($_POST['Delete_OCH'])){
		if(isset($_GET['ID_OCH'])){
			$sql = "DELETE FROM org_chairs WHERE ID_OCH = '".$_GET['ID_OCH']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_och'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_och'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_och'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>
<!-- Delete Organization Committee -->
<?php	
	if(isset($_POST['Delete_OC'])){
		if(isset($_GET['ID_OC'])){
			$sql = "DELETE FROM org_committee WHERE ID_OC = '".$_GET['ID_OC']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_oc'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_oc'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_oc'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>

<!-- Delete Program Chairs -->
<?php	
	if(isset($_POST['Delete_PCH'])){
		if(isset($_GET['ID_PCH'])){
			$sql = "DELETE FROM pgm_chairs WHERE ID_PCH = '".$_GET['ID_PCH']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_pch'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_pch'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_pch'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>
<!-- Delete Pgrogram Committee -->
<?php	
	if(isset($_POST['Delete_PC'])){
		if(isset($_GET['ID_PC'])){
			$sql = "DELETE FROM pgm_committee WHERE ID_PC = '".$_GET['ID_PC']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_pc'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_pc'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_pc'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>

<!-- Delete Steering Committee -->
<?php	
	if(isset($_POST['Delete_ST'])){
		if(isset($_GET['ID_ST'])){
			$sql = "DELETE FROM stee_committee WHERE ID_ST = '".$_GET['ID_ST']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_st'] = 'Member <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_st'] = 'Something went wrong in deleting member';
			}
		}
		else{
			$_SESSION['error_st'] = 'Select Member to delete first';
		}
		header('location: Committee.php');
	}		
?>


<!-- Delete Topics -->
<?php	

	if(isset($_POST['Delete_Topics'])){
		if(isset($_GET['ID_TP'])){
			$sql = "DELETE FROM topics WHERE ID_TP = '".$_GET['ID_TP']."'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_tp'] = 'Title <b>deleted</b> successfully';
			}		
			else{
				$_SESSION['error_tp'] = 'Something went wrong in deleting title';
			}
		}
		else{
			$_SESSION['error_tp'] = 'Select Title to delete first';
		}

		header('location: Topics.php');

	}
?>
