<?php include("includes/header.php"); ?>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle -->
  <button id="sidebarCollapse" type="button" class="btn rounded-pill shadow-sm px-4 mb-5"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
  <!-- </Toggle -->


<div class="row justify-content-center">

  <?php
    if(isset($_SESSION['error_imp'])){
      echo " 
      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['error_imp']."             
      </div>
      ";
      unset($_SESSION['error']);
    }
    if(isset($_SESSION['success_imp'])){
      echo " 
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['success_imp']."             
      </div>
      ";
      unset($_SESSION['success_imp']);
    }
  ?>       

</div>

<div class="row">
<div class="col my-2">
      <div class="card card-outline-secondary h-100">
        <div class="card-header" >
            <h3 class="mb-0 text-center text-light">Important Dates</h3>
        </div>
        <div class="card-body">
        <table class="table table-responsive table-striped table-bordered">
          <thead>
              <tr>
                  <th scope="col">Deadline</th>
                  <th scope="col">Notification</th>
                  <th scope="col">Camera Ready</th>
                  <th scope="col">Conferance From</th>
                  <th scope="col">Conferance To</th>
                  <th scope="col">Edit</th>
              </tr>
          </thead>
          <tbody>
          <?php 
            $sql="SELECT * FROM important_dates";
            $res=mysqli_query($conn,$sql);                    
            while( $row= mysqli_fetch_array($res) ) {  
              echo "<tr>";
              echo "<td>".$row['Deadline']."</td>";
              echo "<td>".$row['Notification']."</td>";
              echo "<td>".$row['Camera_Ready']."</td>";
              echo "<td>".$row['ConferenceFr']."</td>"; 
              echo "<td>".$row['ConferenceTo']."</td>";           
              echo "<td> <a href='#Dates_".$row['ID_IMP']."'' class='btn-md' data-toggle='modal'><i class='fas fa-edit text-primary'></i></a> </td>";                               
              echo "</tr>";
              include('Modal.php'); 
            ?>           
          </tbody>
        </table>
        </div>
      </div>
</div> 

<div class="col my-2">
    <!-- form card change password -->
      <div class="card card-outline-secondary h-100" >
        <div class="card-header">
            <h3 class="mb-0 text-center text-light">Show Important Dates</h3>
        </div>
        <div class="card-body">
        <?php 
            $row['Deadline']=date("F-d-Y",strtotime($row['Deadline']));
            $row['Notification']=date("F-d-Y",strtotime($row['Notification']));
            $row['Camera_Ready']=date("F-d-Y",strtotime($row['Camera_Ready']));
            $row['ConferenceFr']=date("F-d-Y",strtotime($row['ConferenceFr']));
            $row['ConferenceTo']=date("F-d-Y",strtotime($row['ConferenceTo']));

            echo "<span class='text-primary font-weight-bold'>Submission Deadline :</span><b>".$row['Deadline']."</b> <br>";
            echo "<span class='text-primary font-weight-bold'>Authors Notification: </span><b>".$row['Notification']."</b> <br>";
            echo "<span class='text-primary font-weight-bold'>Camera - Ready : </span><b>".$row['Camera_Ready']."</b> <br>";
            echo "<span class='text-primary font-weight-bold'>Conferance : </span><b>".$row['ConferenceFr']."</b> <br>";
            echo "<span class='text-primary font-weight-bold'>Conferance : </span><b>".$row['ConferenceTo']."</b> <br>";
                    }
            ?>

        </div>
      </div>
</div> 
</div>   



<?php include("includes/footer.php"); ?>