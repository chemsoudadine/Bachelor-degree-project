<?php
    include "../Admin/database.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>
		<?php
			$sql ="SELECT * FROM conference ";
			$result = mysqli_query($conn, $sql);
			// output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				echo $row["Titre"];			
			?>
	</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Bootstrap 4 Tech Conference Template">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>

	<!-- Theme CSS -->  	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link id="theme-style" rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/MyStyle.css">	


</head> 
<!-- Modal Login -->
<div class="modal fade" id="LoginAd" tabindex="-1" role="dialog" aria-labelledby="LoginAdLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="LoginAdLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"  autocomplete="off">
			<div class="form-group">
				<?php
					if(isset($_POST["submit"])){
						$sql="SELECT ID_GC,username,pswd FROM general_chairs WHERE username='{$_POST["username"]}' AND pswd='{$_POST["pswd"]}'";
						$res=mysqli_query($conn,$sql);
						if(mysqli_num_rows($res)>0){
							$row=mysqli_fetch_assoc($res); 
							$_SESSION["ID_GC"]=$row["ID_GC"];
							$_SESSION["username"]=$row["username"];
							echo "<script>window.open('../Admin/','_self')</script>";
						} 
						else {  
							echo "<div id='error' class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
									<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
									</button><b>Invalid Username or Password</b>             
								</div>";        
						} 
						}                    
					?>
					<input type="text" name="username" value="" placeholder="Username" class="form-control" id="username" maxlength="80" size="30" >
					</div>
					<div class="form-group">
						<input type="password" name="pswd" value="" placeholder="Password" class="form-control" id="password" size="30" >						
					</div>

					<div class="col-sm-12">
						<div class="mt-4">
						<button type="submit" id="Submit_login" name="submit" class="btn bg-grad text-light">Login</button>

						</div>
					</div>                
		</form>
		
	  </div>
    </div>
  </div>
</div>

<body>    
	<header id="header" class="header fixed-top">	    
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<div class="site-logo ml-4"><a class="scrollto text-white" href="#hero-block">
					<?php 
						echo "{".$row["Titre"]."}";												
					?> 
					</a></div>    
					
					<div class="navbar-btn order-lg-2"><a class="btn bg-grad text-light" data-toggle="modal" data-target="#LoginAd">Login</a></div>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end mr-lg-3">
						<ul class="nav navbar-nav">
							
							<li class="nav-item"><a class="nav-link scrollto" href="#about-section">About</a></li>  
							<li class="nav-item"><a class="nav-link scrollto" href="#speakers-section">Speakers</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#committee-section">Committee</a></li> 
							<li class="nav-item"><a class="nav-link scrollto" href="#Important-Dates">Important Dates</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#topics-section">Topics</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="#venue-section">Venue</a></li>
							<!-- <li class="nav-item"><a class="nav-link scrollto" href="#sponsors-section">Sponsors</a></li>													 -->
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->
				
			</div><!--//container-->
		</div><!--//branding-->
	</header><!--//header-->
	
	<div id="hero-block" class="hero-block min-vh-100">
		<div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item-1 carousel-item active">
				</div>
				<div class="carousel-item-2 carousel-item">
				</div>
				<div class="carousel-item-3 carousel-item">
				</div>
			</div>
		</div>
		<div class="hero-block-mask"></div>
		<div class="container">
			<div class="hero-text-block animate__animated animate__fadeInRightBig animate__slow">
				<h1 class="hero-heading mb-2"><?php echo $row["Titre"]; ?></h1>
				<div class="hero-intro mb-4"><?php echo $row["Nom_Cnf"];?></div>
				<?php 
                  $sql="SELECT * FROM important_dates";
                  $res=mysqli_query($conn,$sql);                    
                  while( $rowI= mysqli_fetch_array($res) ) {
                    $rowI['ConferenceFr']=date("d ",strtotime($rowI['ConferenceFr']));
                    $rowI['ConferenceTo']=date("- d M",strtotime($rowI['ConferenceTo']));
                  
                ?>
				<div class="hero-meta mb-3"><i class="far fa-calendar-alt mr-2"></i><?php echo $rowI['ConferenceFr'].$rowI['ConferenceTo']; ?><i class="fas fa-map-marker-alt mx-2"></i><?php echo $row['Ville'].", ".$row['Country']; } ?></div>
				<?php } ?>
				<div class="hero-cta"><a class="btn bg-grad text-light btn-lg" href="#" target="_blank">Submission</a></div>
				
			</div><!--//hero-text-block-->
		</div><!--//container-->

	</div><!--//hero-block-->

	<section id="about-section" class="about-section section theme-bg-light min-vh-100">
		<div class="container">
			<h3 class="section-heading text-center mb-3">About DevConf</h3>
			<div class="section-intro single-col-max mx-auto mb-4">Briefly introduce your conference or event here. You should convince people why they should attend with a list of benefits. <strong>Are you a conference organizer? Want to source developer t-shirts as part of your conference package?</strong> Check out our programming tees at <a href="https://made4dev.com/" target="_blank">made4dev.com</a> - developers love them! Want to get a bulk discount or just want to use one of the t-shirt designs? Please email <a href="mailto:hello@made4dev.com">hello@made4dev.com</a> and we can discuss.</div>
			<div class="benefits-list text-center mb-3">
				<h4 class="text-center mb-4">Why Join Us</h4>
				<ul class="list-unstyled text-left d-inline-block">
					<li><i class="fas fa-check-circle mr-2"></i>Unique chance to lorem ipsum dolor</li>
					<li><i class="fas fa-check-circle mr-2"></i>Learn from the best in the industry</li>
					<li><i class="fas fa-check-circle mr-2"></i>Discover the best tools and practices</li>
					<li><i class="fas fa-check-circle mr-2"></i>Meet developers from all over the world</li>
					<li><i class="fas fa-check-circle mr-2"></i>Grow your network</li>
					<li><i class="fas fa-check-circle mr-2"></i>Practical workshops to lorem ipsum dolor</li>
					<li><i class="fas fa-check-circle mr-2"></i>After-party lorem ipsum dolor</li>
					<li><i class="fas fa-check-circle mr-2"></i>Free <a href="https://made4dev.com">developer t-shirts</a> and swag</li>
				</ul>
			</div><!--//benefits-list-->
			<div class="event-countdown text-center mb-3">		   
				<h4 class="countdown-intro mb-2 text-center mb-3">Event Starts In:</h4>
				<div id="countdown-box" class="countdown-box"></div>
			</div><!--//event-countdown-->
			<div class="about-cta text-center mb-5"><a class="btn btn-secondary btn-lg  mb-5" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devconf-free-bootstrap-4-conference-template-for-tech-conferences-and-events/" target="_blank">Get Your Ticket Today</a></div>
		</div><!--//container-->
	</section><!--//about-section-->

	<section id="speakers-section" class="speakers-section section min-vh-100">
		<div class="container">
			<h3 class="section-heading text-center mb-3">Speakers</h3>
			<!-- <div class="section-intro text-center single-col-max mx-auto mb-5">Our Speakers</div> -->
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1"><img src="assets/images/speakers/Admin.png" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Chems Eddine BOUANANI</h5>
							<div class="card-text mb-3">
								<div class="meta">University Of Saida Dr Tahar Moulay</div>
								<div class="meta">Saida, Algeria</div>
							</div><!--//card-text-->							
						</div><!--//card-->
					</div><!--//card-->
				</div><!--//col-->
				<div class="col-12 col-md-6 col-lg-3 mb-4">
					<div class="card rounded-0">
						<a href="#modal-speaker-1" data-toggle="modal" data-target="#modal-speaker-1"><img src="assets/images/speakers/Admin.png" class="card-img-top rounded-0" alt=""></a>
						<div class="card-body">
							<h5 class="card-title mb-2">Imed Salah Eddine FRIKI</h5>
							<div class="card-text mb-3">
								<div class="meta">University Of Saida Dr Tahar Moulay</div>
								<div class="meta">Saida, Algeria</div>
							</div><!--//card-text-->							
						</div><!--//card-->
					</div><!--//card-->
				</div><!--//col-->
			</div><!--//row-->			
		</div><!--//container-->
		
	</section><!--//speakers-section-->

	<section id="committee-section" class="Committee-section section bg-grad min-vh-100">
		<h3 class="section-heading text-center text-white mb-3">Committee</h3>
		<div class="container my-5 pb-5">		
			<div class="row">
				<div class="col-lg-9 mx-auto">
				<!-- Accordion -->
				<div id="accordionExample" class="accordion shadow">
					<!-- General Chairs -->
					<div class="card card-1">
						<div id="headingOne" class="card-header bg-white shadow-sm border-0">
							<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="d-block position-relative text-dark text-uppercase collapsible-link py-2">General Chair's</a></h6>
						</div>
						<div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse">
							<div class="card-body p-5">
								<?php 
									$sql="SELECT * FROM general_chairs";
									$res=mysqli_query($conn,$sql);                    
									while( $row= mysqli_fetch_array($res) ) {
										echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
									} 
								?>						
							</div>
						</div>
					</div>

					<!-- Organization Chairs -->
					<div class="card card-2">
						<div id="headingTwo" class="card-header bg-white shadow-sm border-0">
							<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Organization Chairs</a></h6>
						</div>
						<div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
							<div class="card-body p-5">
								<?php 
									$sql="SELECT * FROM org_chairs";
									$res=mysqli_query($conn,$sql);                    
									while( $row= mysqli_fetch_array($res) ) {
										echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
									} 
								?>						
							</div>
						</div>
					</div>

					<!-- Organization Committee -->
					<div class="card card-2">
					<div id="heading3" class="card-header bg-white shadow-sm border-0">
						<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Organization Committee</a></h6>
					</div>
					<div id="collapse3" aria-labelledby="heading3" data-parent="#accordionExample" class="collapse">
						<div class="card-body p-5">
							<?php 
								$sql="SELECT * FROM org_committee";
								$res=mysqli_query($conn,$sql);                    
								while( $row= mysqli_fetch_array($res) ) {
									echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
								} 
							?>						
						</div>
					</div>
					</div>

					<!-- Program Chairs -->
					<div class="card card-2">
					<div id="heading4" class="card-header bg-white shadow-sm border-0">
						<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Program Chairs</a></h6>
					</div>
					<div id="collapse4" aria-labelledby="heading4" data-parent="#accordionExample" class="collapse">
						<div class="card-body p-5">
							<?php 
								$sql="SELECT * FROM pgm_chairs";
								$res=mysqli_query($conn,$sql);                    
								while( $row= mysqli_fetch_array($res) ) {
									echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
								} 
							?>						
						</div>
					</div>
					</div>

					<!-- Program Committee -->
					<div class="card card-2">
					<div id="heading5" class="card-header bg-white shadow-sm border-0">
						<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Program Committee</a></h6>
					</div>
					<div id="collapse5" aria-labelledby="heading5" data-parent="#accordionExample" class="collapse">
						<div class="card-body p-5">
							<?php 
								$sql="SELECT * FROM pgm_committee";
								$res=mysqli_query($conn,$sql);                    
								while( $row= mysqli_fetch_array($res) ) {
									echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
								} 
							?>						
						</div>
					</div>
					</div>

					<!-- Steering Committee -->
					<div class="card card-2">
					<div id="heading6" class="card-header bg-white shadow-sm border-0">
						<h6 class="mb-0 font-weight-bold"><a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark text-uppercase collapsible-link py-2">Steering Committee</a></h6>
					</div>
					<div id="collapse6" aria-labelledby="heading6" data-parent="#accordionExample" class="collapse">
						<div class="card-body p-5">
							<?php 
								$sql="SELECT * FROM stee_committee";
								$res=mysqli_query($conn,$sql);                    
								while( $row= mysqli_fetch_array($res) ) {
									echo "<li class='text-capitalize mb-2'><b>".$row['Name']."</b> - ".$row['University']." - ".$row['Country']."</li>";
								} 
							?>						
						</div>
					</div>
					</div>

				</div>
				</div>
			</div>
		</div>
	</section><!--//Committee-section-->
	
	<div class="container">
		<hr>
	</div>
	
	<section id="Important-Dates" class="Important-Dates-section bg-grad section min-vh-100">
		<div class="container py-5">
			<h3 class="section-heading text-center text-white mb-3">Important Dates</h3>
			<div class="row">
				<div class="col-lg-7 mx-auto">					
					<!-- Timeline -->
						<?php 
							$sql="SELECT * FROM important_dates";
							$res=mysqli_query($conn,$sql);                    
							while( $rowI= mysqli_fetch_array($res) ) {
								$rowI['Deadline']=date("M d, Y",strtotime($rowI['Deadline']));
								$rowI['Notification']=date("M d, Y",strtotime($rowI['Notification']));
								$rowI['Camera_Ready']=date("M d, Y",strtotime($rowI['Camera_Ready']));
								$rowI['ConferenceFr']=date("M d ",strtotime($rowI['ConferenceFr']));
								$rowI['ConferenceTo']=date("- d, Y",strtotime($rowI['ConferenceTo']));
							
						?>
					<ul class="timeline">
						<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
							<div class="timeline-arrow"></div>
							<h2 class="h5 mb-0">Paper submission Deadline : <?php echo "<b class='text-primary'>".$rowI['Deadline']."</b>"; ?></h2>							
						</li>
						<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
							<div class="timeline-arrow"></div>
							<h2 class="h5 mb-0">Notification of acceptance : <?php echo "<b class='text-primary'>".$rowI['Notification']."</b>"; ?></h2>
						</li>
						<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
							<div class="timeline-arrow"></div>
							<h2 class="h5 mb-0">Camera Ready : <?php echo "<b class='text-primary'>".$rowI['Camera_Ready']."</b>"; ?></h2>
						</li>
						<li class="timeline-item bg-white rounded ml-3 p-4 shadow">
							<div class="timeline-arrow"></div>
							<h2 class="h5 mb-0">Symposium Days : <?php echo "<b class='text-success'>".$rowI['ConferenceFr'].$rowI['ConferenceTo']."</b>"; } ?></h2>
						</li>
					</ul><!-- End -->
				</div>
			</div>
		</div><!--//container-->
	</section><!--//schedule-section-->
	
	<section id="topics-section" class="topics-section section theme-bg-light min-vh-100">
		<div class="container">
		<h3 class="section-heading text-center mb-3">Topics</h3>
			<div class="row">
				<div class="col-lg-7 mx-auto">
					<div class="card-body p-5">
						<?php 
							$sql="SELECT * FROM topics";
							$res=mysqli_query($conn,$sql);                    
							while( $row= mysqli_fetch_array($res) ) {
								echo "<li class='text-capitalize mb-2'>".$row['Title']."</li>";
							} 
						?>						
					</div>
				</div>				
			</div>
		</div>

	</section><!--//tickets-section-->
	
	
	<section id="venue-section" class="venue-section section bg-grad text-white min-vh-100">
		<div class="container">
			<h3 class="section-heading text-center mb-5 text-white">Venue</h3>
			<div class="row py-lg-5">
				<div class="col-12 col-lg-7 h-100">
					<div class="desc">
						<h4 class="text-white mb-3">Welcome to Saida </h4>
						<p><b>Saida</b> city is located at the 34.8303, 0.1517 coordinates and it is situated at elevation 840 meters above sea level. Distance from Saida to cities are listed below: Distance from Saïda to Algiers 452 km, to Oran 175 km</p>
						<!--//row-->
					</div><!--//desc-->
					<div class="row venue justify-content-center">
						<div class="col-lg-6 p-3"><img src="assets/images/Msaida.jpg" alt=""></div>
						<div class="col-lg-6 p-3"><img src="assets/images/sAIDA.jpg" alt=""></div>
						<div class="col-lg-6 p-3"><img src="assets/images/P1.jpg" alt=""></div>
						<div class="col-lg-6 p-3"><img src="assets/images/HamamRabi.jpg" alt=""></div>	

					</div><!--//row--/col-->				
				</div><!--//row-->
			</div><!--//container-->
		</div>>
	</section><!--//venue-section-->

	<section id="sponsors-section" class="sponsors-section section">
		<div class="container">
			<h3 class="section-heading text-center mb-5">Sponsors &amp; Partners</h3>
			<!-- <div class="section-intro text-center single-col-max mx-auto mb-5">Want to become a sponsor? Get in touch lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat magna eu accumsan mattis.</div> -->
			<div class="row logos justify-content-center">
				<div class="logo-item col-6 col-md-4 col-lg-2"><img class="h-100" src="assets/images/logo-univ-saida.png" alt=""></div>
				<div class="logo-item col-6 col-md-4 col-lg-2"><img class="h-100" src="assets/images/pmb.png" alt=""></div>				
			</div><!--//row-->			
		</div><!--//container-->
	</section><!--//sponsors-section-->

	<footer class="footer py-5 bg-grad">
		<div class="container text-center">			
			
			<ul class="footer-links list-inline mx-auto mb-4">
				<li class="list-inline-item"><a href="#">Conduct US</a></li>
				<li class="list-inline-item">|</li>
				<li class="list-inline-item"><a href="#">Chemseddine.bouanani@gmail.com</a></li>
				<li class="list-inline-item">|</li>
				<li class="list-inline-item mr-0"><a href="#">+213542529361</a></li>
			</ul><!--//footer-link-->
			
			 <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Power by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a></small>
			
		</div><!--//container-->	    
	</footer>

	<!-- Modal Speaker -->
	<div class="modal modal-speaker modal-speaker-1" id="modal-speaker-1" tabindex="-1" role="dialog" aria-labelledby="speaker-1-ModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 id="speaker-1-ModalLabel" class="modal-title sr-only">Speaker Name</h4>
				</div>
				<div class="modal-body p-0">
					<div class="media flex-column flex-md-row theme-bg-light p-4 p-lg-5">
						<img class="profile-image mb-3 mb-md-0 mr-md-4 rounded-circle mx-auto" src="assets/images/speakers/speaker-1.jpg" alt="" />
						
						<div class="media-body text-center text-md-left mx-auto">
							<h2 class="name mb-2">Speaker Name</h2>
							<div class="meta">Job Title Or Position</div>
							<div class="meta mb-2">Company Or Organization</div>
							<ul class="social-list list-inline mb-0">
								<li class="list-inline-item"><a  href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
								<li class="list-inline-item"><a  href="#"><i class="fab fa-github fa-fw"></i></a></li>
							</ul><!--//social-list--> 
						</div><!--//media-body-->
					</div><!--//media-->
					
					<div class="desc p-4 p-lg-5">
						<p>You can put speaker's bio or talk related info here. Duis a mi quis metus porttitor eleifend. Pellentesque finibus ultrices imperdiet. Maecenas auctor tortor quis risus tincidunt, mattis mattis leo placerat. Fusce metus augue, sagittis eget enim vel, venenatis auctor est. In interdum felis massa, ac porta nunc pretium non. In fringilla orci vitae imperdiet malesuada. Vestibulum feugiat lobortis est, in sagittis nisi molestie vel. Mauris ultrices vitae lectus eu feugiat. Fusce semper, nisi at placerat mollis, augue elit pretium enim, eu pellentesque justo purus et lectus. </p>
						<p class="mb-0">Donec neque magna, molestie vel varius ut, pretium a urna. Pellentesque placerat nunc eu condimentum pellentesque. Vivamus dictum nisl leo, id fermentum lectus porttitor et. Pellentesque tristique erat libero, condimentum porttitor nisl pharetra et.</p>
					</div>
				</div><!--//modal-body-->
			</div><!--//modal-content-->
		</div><!--//modal-dialog-->
	</div><!--//modal-->
	
	<!-- Javascript -->          
	<script src="assets/plugins/jquery-3.4.1.min.js"></script>
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/jquery.scrollTo.min.js"></script>
	<script src="assets/js/main.js"></script>  

</body>
</html> 

