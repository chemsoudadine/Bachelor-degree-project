<?php include("includes/header.php"); ?>

<!-- Page content holder -->
<div class="page-content p-5" id="content">
  <!-- Toggle -->
  <button id="sidebarCollapse" type="button" class="btn rounded-pill shadow-sm px-4 mb-5"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
  <!-- </Toggle -->
<div class="row justify-content-center">
  <?php
    if(isset($_SESSION['error_cnf'])){
      echo " 
      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['error_cnf']."             
      </div>
      ";
      unset($_SESSION['error_cnf']);
    }
    if(isset($_SESSION['success_cnf'])){
      echo " 
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['success_cnf']."             
      </div>
      ";
      unset($_SESSION['success_cnf']);
    }
  ?>        
</div>
<div class="row">
  <div class="col-md">
    <!-- form card change password -->
      <div class="card card-outline-secondary" style="border: 1.5px solid rgb(0,121,213);">
        <div class="card-header" style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">
            <h3 class="mb-0 text-center text-light">Change Conference</h3>
        </div>
        <div class="card-body">
          <table class="table table-responsive-md table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Name of Title</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
            <?php 
              $sql="SELECT * FROM conference";
              $res=mysqli_query($conn,$sql);                    
              while( $row= mysqli_fetch_array($res) ) {  
                echo "<tr>";
                echo "<td>".$row['Titre']."</td>";
                echo "<td>".$row['Nom_Cnf']."</td>";     
                echo "<td>".$row['Ville']."</td>"; 
                echo "<td>".$row['Country']."</td>";       
                echo "<td> <a href='#Edit_Cnf_".$row['ID_CNF']."'' class='btn-md' data-toggle='modal'><i class='fas fa-edit text-primary'></i></a> </td>";                               
                echo "</tr>";
                include('Modal.php'); 
              }
              ?>           
            </tbody>
          </table>
      </div>
</div>  
</div>   


<?php include("includes/footer.php"); ?>