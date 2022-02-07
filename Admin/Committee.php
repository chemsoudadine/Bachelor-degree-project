<?php include("includes/header.php"); ?>

<div class="page-content p-5" id="content">
  
    <!-- Toggle -->
    <button id="sidebarCollapse" type="button" class="btn rounded-pill shadow-sm px-4 mb-5"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <!-- </Toggle -->

<!-- General Chairss -->
<div class="card card-outline-secondary mb-4">
        <div class="card-header">
          <h2 class="display-4">General Chairs</h2> 
        </div>  
        <?php 
          $var="SELECT * FROM general_chairs";
          $rslt=mysqli_query($conn,$var);
          if(mysqli_num_rows($rslt)<=1){
            echo "<div class='row ml-3 mt-3'>
                    <a href='#Add_GC' data-toggle='modal' class='btn btn-success'>Add New<i class='fas fa-plus-circle ml-2'></i></a>
                  </div> ";
          }

        ?>
        <div class="row justify-content-center mt-3">
            <?php
              if(isset($_SESSION['error_gc'])){
                echo " 
                <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['error_gc']."             
                </div>
                ";
                unset($_SESSION['error_gc']);
              }
              if(isset($_SESSION['success_gc'])){
                echo " 
                <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['success_gc']."             
                </div>
                ";
                unset($_SESSION['success_gc']);
              }
            ?>        
          </div>

      <div class="container py-2" >
      <div class="row py-2">
        <div class="col-md-12">
          <div class="card rounded shadow border-0">
            <div class="card-body p-2 bg-white rounded">            
              <table  class="table table-responsive-md table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Full Name</th>
                          <th>University</th>
                          <th>Country</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="SELECT * FROM general_chairs";                      
                      $res=mysqli_query($conn,$sql);                    
                      while( $row= mysqli_fetch_array($res) ) {
                          echo "<tr>"; 
                          echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                          echo "<td>" .$row['University']. "</td>";
                          echo "<td>" .$row['Country']. "</td>";
                          echo "<td>" .$row['username']. "</td>";
                          echo "<td>" .$row['pswd']. "</td>";
                          echo "<td> <a href='#Edit_GC_".$row['ID_GC']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                          echo "<td><a href='#Delete_GC_".$row['ID_GC']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                          echo "</tr>";     
                          include('Modal.php');             
                        }?>            
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>

<!-- Organization Chairs -->
<div class="card card-outline-secondary mb-4">
        <div class="card-header">
          <h2 class="display-4">Organization Chairs</h2> 
        </div>  
        <?php 
          $var="SELECT * FROM org_chairs";
          $rslt=mysqli_query($conn,$var);
          if(mysqli_num_rows($rslt)<=1){
            echo "<div class='row ml-3 mt-3'>
                    <a href='#Add_OCH' data-toggle='modal' class='btn btn-success'>Add New<i class='fas fa-plus-circle ml-2'></i></a>
                  </div> ";
          }

        ?>
        <div class="row justify-content-center mt-3">
            <?php
              if(isset($_SESSION['error_och'])){
                echo " 
                <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['error_och']."             
                </div>
                ";
                unset($_SESSION['error_och']);
              }
              if(isset($_SESSION['success_och'])){
                echo " 
                <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['success_och']."             
                </div>
                ";
                unset($_SESSION['success_och']);
              }
            ?>        
          </div>

      <div class="container py-2" >
      <div class="row py-2">
        <div class="col-md-12">
          <div class="card rounded shadow border-0">
            <div class="card-body p-2 bg-white rounded">            
              <table  class="table table-responsive-md table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Full Name</th>
                          <th>University</th>
                          <th>Country</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="SELECT * FROM org_chairs";                      
                      $res=mysqli_query($conn,$sql);                    
                      while( $row= mysqli_fetch_array($res) ) {
                          echo "<tr>"; 
                          echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                          echo "<td>" .$row['University']. "</td>";
                          echo "<td>" .$row['Country']. "</td>";
                          echo "<td> <a href='#Edit_OCH_".$row['ID_OCH']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                          echo "<td><a href='#Delete_OCH_".$row['ID_OCH']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                          echo "</tr>";     
                          include('Modal.php');             
                        }?>            
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>

<!-- Organization Committee -->
<div class="card card-outline-secondary mb-4">
    <div class="card-header">
      <h2 class="display-4">Organization Committee</h2> 
    </div>  
    <div class="row ml-3 mt-3">
      <a href="#Add_OC" data-toggle="modal" class="btn btn-success">Add New<i class="fas fa-plus-circle ml-2"></i></a>
    </div> 
    <div class="row justify-content-center">
        <?php
          if(isset($_SESSION['error_oc'])){
            echo " 
            <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['error_oc']."             
            </div>
            ";
            unset($_SESSION['error_oc']);
          }
          if(isset($_SESSION['success_oc'])){
            echo " 
            <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['success_oc']."             
            </div>
            ";
            unset($_SESSION['success_oc']);
          }
        ?>        
      </div>

  <div class="container py-2" >
  <div class="row py-2">
    <div class="col-md-12">
      <div class="card rounded shadow border-0">
        <div class="card-body p-2 bg-white rounded">            
          <table id="OrgCommitte" class="table table-responsive-md table-striped table-bordered">
              <thead>
                  <tr>
                      <th>N°</th>
                      <th>Full Name</th>
                      <th>University</th>
                      <th>Country</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $sql="SELECT * FROM org_committee";
                  $res=mysqli_query($conn,$sql);                    
                  while( $row= mysqli_fetch_array($res) ) {
                      echo "<tr>";
                      echo "<td></td>"; 
                      echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                      echo "<td>" .$row['University']. "</td>";
                      echo "<td>" .$row['Country']. "</td>";
                      echo "<td> <a href='#edit_OC_".$row['ID_OC']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                      echo "<td><a href='#delete_OC_".$row['ID_OC']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                      echo "</tr>";     
                      include('Modal.php');             
                    }?>            
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  </div> 
</div>

<!-- Program Chairs -->
<div class="card card-outline-secondary mb-4">
        <div class="card-header">
          <h2 class="display-4">Program Chairs</h2> 
        </div>  
        <?php 
          $var="SELECT * FROM pgm_chairs";
          $rslt=mysqli_query($conn,$var);
          if(mysqli_num_rows($rslt)<=1){
            echo "<div class='row ml-3 mt-3'>
                    <a href='#Add_PCH' data-toggle='modal' class='btn btn-success'>Add New<i class='fas fa-plus-circle ml-2'></i></a>
                  </div> ";
          }

        ?>
        <div class="row justify-content-center mt-3">
            <?php
              if(isset($_SESSION['error_pch'])){
                echo " 
                <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['error_pch']."             
                </div>
                ";
                unset($_SESSION['error_pch']);
              }
              if(isset($_SESSION['success_pch'])){
                echo " 
                <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['success_pch']."             
                </div>
                ";
                unset($_SESSION['success_pch']);
              }
            ?>        
          </div>

      <div class="container py-2" >
      <div class="row py-2">
        <div class="col-md-12">
          <div class="card rounded shadow border-0">
            <div class="card-body p-2 bg-white rounded">            
              <table  class="table table-responsive-md table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Full Name</th>
                          <th>University</th>
                          <th>Country</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="SELECT * FROM pgm_chairs";                      
                      $res=mysqli_query($conn,$sql);                    
                      while( $row= mysqli_fetch_array($res) ) {
                          echo "<tr>"; 
                          echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                          echo "<td>" .$row['University']. "</td>";
                          echo "<td>" .$row['Country']. "</td>";
                          echo "<td> <a href='#Edit_PCH_".$row['ID_PCH']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                          echo "<td><a href='#Delete_PCH_".$row['ID_PCH']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                          echo "</tr>";     
                          include('Modal.php');             
                        }?>            
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div> 
</div>

<!-- Pgrogram Committee -->
<div class="card card-outline-secondary mb-4">
    <div class="card-header">
      <h2 class="display-4">Program Committee</h2> 
    </div>  
    <div class="row ml-3 mt-3">
      <a href="#Add_PC" data-toggle="modal" class="btn btn-success">Add New<i class="fas fa-plus-circle ml-2"></i></a>
    </div> 
    <div class="row justify-content-center">
        <?php
          if(isset($_SESSION['error_pc'])){
            echo " 
            <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['error_pc']."             
            </div>
            ";
            unset($_SESSION['error_pc']);
          }
          if(isset($_SESSION['success_pc'])){
            echo " 
            <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['success_pc']."             
            </div>
            ";
            unset($_SESSION['success_pc']);
          }
        ?>        
      </div>

  <div class="container py-2" >
  <div class="row py-2">
    <div class="col-md-12">
      <div class="card rounded shadow border-0">
        <div class="card-body p-2 bg-white rounded">            
          <table id="example" class="table table-responsive-md table-striped table-bordered">
              <thead>
                  <tr>
                      <th>N°</th>
                      <th>Full Name</th>
                      <th>University</th>
                      <th>Country</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $sql="SELECT * FROM pgm_committee";
                  $res=mysqli_query($conn,$sql);                    
                  while( $row= mysqli_fetch_array($res) ) {
                      echo "<tr>";
                      echo "<td></td>"; 
                      echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                      echo "<td>" .$row['University']. "</td>";
                      echo "<td>" .$row['Country']. "</td>";
                      echo "<td> <a href='#edit_PC_".$row['ID_PC']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                      echo "<td><a href='#delete_PC_".$row['ID_PC']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                      echo "</tr>";     
                      include('Modal.php');             
                    }?>            
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  </div> 
</div>

<!-- Steering Committee -->
<div class="card card-outline-secondary mb-4">
    <div class="card-header">
      <h2 class="display-4">Steering Committee</h2> 
    </div>  
    <div class="row ml-3 mt-3">
      <a href="#Add_ST" data-toggle="modal" class="btn btn-success">Add New<i class="fas fa-plus-circle ml-2"></i></a>
    </div> 
    <div class="row justify-content-center">
        <?php
          if(isset($_SESSION['error_st'])){
            echo " 
            <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['error_st']."             
            </div>
            ";
            unset($_SESSION['error_st']);
          }
          if(isset($_SESSION['success_st'])){
            echo " 
            <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button> ".$_SESSION['success_st']."             
            </div>
            ";
            unset($_SESSION['success_st']);
          }
        ?>        
      </div>

  <div class="container py-2" >
  <div class="row py-2">
    <div class="col-md-12">
      <div class="card rounded shadow border-0">
        <div class="card-body p-2 bg-white rounded">            
          <table id="SteCommitte" class="table table-responsive-md table-striped table-bordered">
              <thead>
                  <tr>
                      <th>N°</th>
                      <th>Full Name</th>
                      <th>University</th>
                      <th>Country</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                  $sql="SELECT * FROM stee_committee";
                  $res=mysqli_query($conn,$sql);                    
                  while( $row= mysqli_fetch_array($res) ) {
                      echo "<tr>";
                      echo "<td></td>"; 
                      echo "<td class='text-capitalize font-weight-bold'>" .$row['Name']. "</td>";
                      echo "<td>" .$row['University']. "</td>";
                      echo "<td>" .$row['Country']. "</td>";
                      echo "<td> <a href='#edit_ST_".$row['ID_ST']."'' class='btn-md' data-toggle='modal'><i class='fas fa-user-edit text-primary'></i></a> </td>";
                      echo "<td><a href='#delete_ST_".$row['ID_ST']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
                      echo "</tr>";     
                      include('Modal.php');             
                    }?>            
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
  </div> 
</div>


</div>


<?php include("includes/footer.php"); ?>
<!-- End content -->