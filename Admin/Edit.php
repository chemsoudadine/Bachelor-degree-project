<?php 
	session_start();
    include("database.php"); 
?>
<!-- Edit General Chair's -->
<?php
	if(isset($_POST['Edit_GC'])){
		$ID_GC = filter_var($_POST['ID_GC'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);
		$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
		$pswd = filter_var($_POST['pswd'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM general_chairs WHERE Name='$name' AND University='$university' AND Country='$country' AND username='$username' AND pswd='$pswd'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_gc'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE general_chairs SET Name = '$name', University = '$university', Country = '$country', username='$username', pswd='$pswd' WHERE ID_GC = '$ID_GC'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_gc'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_gc'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	

?>

<!-- Edit Organization Chairs -->
<?php
	if(isset($_POST['Edit_OCH'])){
		$ID_OCH = filter_var($_POST['ID_OCH'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM org_chairs WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_och'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE org_chairs SET Name = '$name', University = '$university', Country = '$country' WHERE ID_OCH = '$ID_OCH'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_och'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_och'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	
?>
<!-- Eddit Organization Committee -->
<?php
	if(isset($_POST['Edit_OC'])){
		$ID_OC = filter_var($_POST['ID_OC'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM org_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_oc'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE org_committee SET Name = '$name', University = '$university', Country = '$country' WHERE ID_OC = '$ID_OC'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_oc'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_oc'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	

?>

<!-- Edit Program Chair's -->
<?php
	if(isset($_POST['Edit_PCH'])){
		$ID_PCH = filter_var($_POST['ID_PCH'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM pgm_chairs WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_pch'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE pgm_chairs SET Name = '$name', University = '$university', Country = '$country' WHERE ID_PCH = '$ID_PCH'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_pch'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_pch'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	
?>
<!-- Eddit Program Committee -->
<?php
	if(isset($_POST['Edit_PC'])){
		$ID_PC = filter_var($_POST['ID_PC'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM pgm_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_pc'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE pgm_committee SET Name = '$name', University = '$university', Country = '$country' WHERE ID_PC = '$ID_PC'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_pc'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_pc'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	

?>
<!-- Eddit Steering Committee -->
<?php
	if(isset($_POST['Edit_ST'])){
		$ID_ST = filter_var($_POST['ID_ST'],FILTER_SANITIZE_STRING);		
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM stee_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_st'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE stee_committee SET Name = '$name', University = '$university', Country = '$country' WHERE ID_ST = '$ID_ST'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_st'] = 'Member <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_st'] = 'Something went wrong in updating member';
			}
		}
		header('location: Committee.php');		
	}
	

?>


<!-- EDIT Title of Topics -->
<?php
	if(isset($_POST['Edit_Topics'])){
		$ID_TP = filter_var($_POST['ID_TP'],FILTER_SANITIZE_STRING);		
		$title = filter_var($_POST['Title'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM topics WHERE Title='$title' ";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_tp'] = 'Title <b>'.$title.'</b> Already Exist';			
		}
		else{
			$sql = "UPDATE topics SET Title = '$title' WHERE ID_TP = '$ID_TP'";
			if(mysqli_query($conn, $sql)){
				$_SESSION['success_tp'] = 'Title <b>Edited</b> successfully';
			}		
			else{
				$_SESSION['error_tp'] = 'Something went wrong in updating Title';
			}
		}
		header('location: Topics.php');		
	}	

?>

<!-- Edit Important Dates -->
<?php
	if(isset($_POST['changeImD'])){	
		$ID_IMP = $_POST['ID_IMP'];        
        $Deadline= date($_POST['Deadline']);        
		$Notification = date($_POST['Notification']);
        $Camera_Ready = date($_POST['Camera_Ready']);
		$ConferenceFr = date($_POST['ConferenceFr']);
		$ConferenceTo = date($_POST['ConferenceTo']);
		$sql = "UPDATE important_dates SET Deadline = '$Deadline', Notification = '$Notification', Camera_Ready = '$Camera_Ready', ConferenceFr='$ConferenceFr', ConferenceTo='$ConferenceTo' WHERE ID_IMP = '$ID_IMP'";
		
		if(mysqli_query($conn, $sql)){
			$_SESSION['success_imp'] = 'Dates <b>Changed</b> successfully';
		}		
		else{
			$_SESSION['error_imp'] = 'Something went wrong in updating Important Dates';
		}
		header('location: ImportantDates.php');

	}
?>




<!-- Edit Conference -->
<?php
	if(isset($_POST['change_Cnf'])){	
		$ID_CNF = filter_var($_POST['ID_CNF'],FILTER_SANITIZE_STRING);		
		$Titre = filter_var($_POST['Titre'],FILTER_SANITIZE_STRING);
		$Nom_Cnf = filter_var($_POST['Nom_Cnf'],FILTER_SANITIZE_STRING);
		$Ville = filter_var($_POST['Ville'],FILTER_SANITIZE_STRING);
		$Country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);
		$sql = "UPDATE conference SET Titre = '$Titre', Nom_Cnf = '$Nom_Cnf', Ville='$Ville', Country='$Country' WHERE ID_CNF = '$ID_CNF'";
		
		if(mysqli_query($conn, $sql)){
			$_SESSION['success_cnf'] = 'Dates <b>Changed</b> successfully';
		}		
		else{
			$_SESSION['error_cnf'] = 'Something went wrong in updating Important Dates';
		}
		header('location: ChangeConference.php');

	}
?>

<!-- Edit URL Submission -->
<?php
	if(isset($_POST['change_Sub'])){	
		$ID_SB = filter_var($_POST['ID_SB'],FILTER_SANITIZE_STRING);		
		$URL = filter_var($_POST['URL'],FILTER_SANITIZE_STRING);
		$sql = "UPDATE submission SET URL = '$URL' WHERE ID_SB = '$ID_SB'";
		
		if(mysqli_query($conn, $sql)){
			$_SESSION['success_sub'] = 'Dates <b>Changed</b> successfully';
		}		
		else{
			$_SESSION['error_sub'] = 'Something went wrong in updating Important Dates';
		}
		header('location: Submission.php');

	}
?>