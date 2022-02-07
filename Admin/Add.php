<?php 
	session_start();
    include("database.php"); 
?>

<!-- Add new General Chair's -->
<?php
	if(isset($_POST['Add_GC'])){
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
			$sql="INSERT INTO general_chairs(Name,University,Country,username,pswd) VALUES ('{$name}','{$university}','{$country}','{$username}','{$pswd}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_gc'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_gc'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>

<!-- Add Organization Chairs -->
<?php
	if(isset($_POST['Add_OCH'])){
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM org_chairs WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_och'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO org_chairs(Name,University,Country) VALUES ('{$name}','{$university}','{$country}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_och'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_och'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>
<!-- Add Organization Committee -->
<?php
	if(isset($_POST['Add_OC'])){
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM org_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_oc'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO org_committee(Name,University,Country) VALUES ('{$name}','{$university}','{$country}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_oc'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_oc'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>


<!-- Add new Program Chair's -->
<?php
	if(isset($_POST['Add_PCH'])){
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM pgm_chairs WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_pch'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO pgm_chairs(Name,University,Country) VALUES ('{$name}','{$university}','{$country}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_pch'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_pch'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>
<!-- Add new Pgrogram Committee -->
<?php
	if(isset($_POST['Add_PC'])){
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM pgm_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_pc'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO pgm_committee(Name,University,Country) VALUES ('{$name}','{$university}','{$country}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_pc'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_pc'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>

<!-- Add Steering Committee -->
<?php
	if(isset($_POST['Add_ST'])){
		$name = filter_var($_POST['Name'],FILTER_SANITIZE_STRING);
		$university = filter_var($_POST['University'],FILTER_SANITIZE_STRING);
		$country = filter_var($_POST['Country'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM stee_committee WHERE Name='$name' AND University='$university' AND Country='$country'";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_st'] = 'Member <b>'.$name.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO stee_committee(Name,University,Country) VALUES ('{$name}','{$university}','{$country}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_st'] = 'Member <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_st'] = 'Something went wrong while adding';
			}
		}
		header('location: Committee.php');
	}
	
?>

<!-- Add new Topic -->
<?php
	if(isset($_POST['add_title_'])){
		$title = filter_var($_POST['Title'],FILTER_SANITIZE_STRING);

		$q="SELECT * FROM topics WHERE Title='$title' ";
		$res1=mysqli_query($conn,$q);
		if(mysqli_num_rows($res1)!=0){
			$_SESSION['error_tp'] = 'Title <b>'.$title.'</b> Already Exist';			
		}
		else{
			$sql="INSERT INTO topics(Title) VALUES ('{$title}')";
			$res=mysqli_query($conn,$sql);	
			if($res){
				$_SESSION['success_tp'] = 'Title <b>added</b> successfully';
			}		
			else{
				$_SESSION['error_tp'] = 'Something went wrong while adding Title';
			}
		}
		header('location: Topics.php');
	}	
?>

<?php 
	if(isset($_POST["AddSpo"])) {
        // Set image placement folder
        $target_dir = "imgages/";
        // Get file path
        $target_file = $target_dir . basename($_FILES["Img"]["name"]);        

        if (!file_exists($_FILES["Img"]["tmp_name"])) {
            // Validation goes here
        } else {
            if (move_uploaded_file($_FILES["Img"]["tmp_name"], $target_file)) {
                $sql = "INSERT INTO sponsors (Img) VALUES ('$target_file')";
                $stmt = $conn->prepare($sql);
				if(mysqli_query($conn,$sql)){
					$_SESSION['success_son'] = 'Images <b>Uploaded</b> successfully';                 
                }
            } else {
                $_SESSION['error_spn'] = 'Something went wrong while adding Image';
            }
        }

    }
?>

<!-- 
	$Myfile=base64_encode(file_get_contents($_FILES['Img']['tmp_ame']));
		$sql="INSERT INTO sponsors(Img) VALUES ('$Myfile()";
		if(mysqli_query($conn,$sql)){
			$_SESSION['success_son'] = 'Images <b>Uploaded</b> successfully';					}
		else {
			$_SESSION['error_spn'] = 'Something went wrong while adding Image';
		}
 -->