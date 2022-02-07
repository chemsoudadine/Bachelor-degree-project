<?php include("includes/header.php"); ?>

<div class="page-content p-5" id="content">
  
    <!-- Toggle -->
    <button id="sidebarCollapse" type="button" class="btn rounded-pill shadow-sm px-4 mb-5"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <!-- </Toggle -->
    <div class="card card-outline-secondary">
        <div class="card-header">
          <h2 class="display-4">Topics</h2> 
        </div>  
        <div class="row ml-3 mt-3">
          <a href="#add_title" data-toggle="modal" class="btn btn-success">Add New<i class="fas fa-plus-circle ml-2"></i></a>
        </div> 
        <div class="row justify-content-center">
            <?php
              if(isset($_SESSION['error_tp'])){
                echo " 
                <div class='alert alert-danger alert-dismissible fade show animate__animated animate__shakeX' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['error_tp']."             
                </div>
                ";
                unset($_SESSION['error_tp']);
              }
              if(isset($_SESSION['success_tp'])){
                echo " 
                <div class='alert alert-success alert-dismissible fade show animate__animated animate__rubberBand' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button> ".$_SESSION['success_tp']."             
                </div>
                ";
                unset($_SESSION['success_tp']);
              }
            ?>        
          </div>

      <div class="container py-2" >
      <div class="row py-2">
        <div class="col-md-12">
          <div class="card rounded shadow border-0">
            <div class="card-body p-2 bg-white rounded">            
              <table id="topic" class="table table-responsive-md table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>N°</th>
                          <th>Titles</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sql="SELECT * FROM topics";
                      $res=mysqli_query($conn,$sql);                    
                      while( $row= mysqli_fetch_array($res) ) {
                          echo "<tr>";
                          echo "<td></td>"; 
                          echo "<td class='text-capitalize font-weight-bold'>" .$row['Title']. "</td>";
                          echo "<td> <a href='#edit_topics_".$row['ID_TP']."'' class='btn-md' data-toggle='modal'><i class='fas fa-edit text-primary'></i></a> </td>";
                          echo "<td><a href='#delete_topics_".$row['ID_TP']."' class='btn-md' data-toggle='modal'><i class='fas fa-trash-alt text-danger'></i></a> </td>";
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
