<?php
    include "database.php";
    session_start();
    if(!isset($_SESSION["ID_GC"])){
        echo "<script>window.open('../CFPSaida/index.php','_self')</script>";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- BOOTSTRAP CSS & FONT AWSIOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="css/Style.css">
    
</head>

<body>
  <!-- As a link -->
<!-- Image and text -->    
        <!-- Vertical navbar -->
<div class="vertical-nav " id="sidebar">
  <div class="py-4 px-3 mb-4">
    <div class="media d-flex align-items-center"><img src="images/Admin.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <a href="." class="m-0 text-light">
            <?php
                $sql ="SELECT username FROM general_chairs where ID_GC = '".$_SESSION['ID_GC']."'";
                $result = mysqli_query($conn, $sql);
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<h4 class='m-0'>" . $row["username"] ."</h4>";
                }
            ?>
        </a>  
        <p class="font-weight-light text-warning mb-0">Admin</p>
      </div>
    </div>
  </div>

  <p class="font-weight-bold text-uppercase px-3 py-2 mb-0">Main</p>

  <ul class="nav flex-column mb-0">
    <li class="nav-item">
      <a href="." class="nav-link text-light">
      <i class="fas fa-users mr-3 fa-fw"></i>Spekers                    
        </a>
    </li>    
    <li class="nav-item">
      <a href="Committee.php" class="nav-link text-light">
        <i class="fas fa-users mr-3 fa-fw"></i>Committee
      </a>
    </li>
    <li class="nav-item">
      <a href="ImportantDates.php" class="nav-link text-light">
          <i class="far fa-calendar-check mr-3 fa-fw"></i>Important Dates
        </a>
    </li>
    <li class="nav-item">
      <a href="Topics.php" class="nav-link text-light">
        <i class="fas fa-newspaper mr-3 fa-fw"></i>Topics
      </a>
    </li>
    <li class="nav-item">
      <a href="Submission.php" class="nav-link text-light">
        <i class="fas fa-external-link-alt mr-3 fa-fw"></i>Submission
      </a>
    </li>
    <li class="nav-item">
      <a href="Sponsors.php" class="nav-link text-light">
        <i class="fas fa-ad mr-3 fa-fw"></i>Sponsors
      </a>
    </li>
  </ul>

  <p class="font-weight-bold text-uppercase px-3 py-2 mb-0">Setting</p>

  <ul class="nav flex-column mb-0">
    <li class="nav-item">
      <a href="ChangeConference.php" class="nav-link text-light">
          <i class="fas fa-user-tie mr-3 fa-fw"></i>Change Conference
        </a>
    </li>
       
    <li class="nav-item">
      <a href="Logout.php" class="nav-link text-light">
          <i class="fas fa-sign-out-alt mr-3 fa-fw"></i>Sign Out
        </a>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->

<!-- End content -->