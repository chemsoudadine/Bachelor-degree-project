<?php include("includes/header.php"); ?>
<style>
    #upload {
    opacity: 0;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(255, 255, 255, 0.7);
    padding: 1rem;
    position: relative;
}
</style>
 <!-- Page content holder -->
<div class="page-content p-5" id="content">
  
    <!-- Toggle -->
    <button id="sidebarCollapse" type="button" class="btn rounded-pill shadow-sm px-4 mb-5"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
    <!-- </Toggle -->

    <div class="row justify-content-center">
  <?php
    if(isset($_SESSION['error_spn'])){
      echo " 
      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['error_spn']."             
      </div>
      ";
      unset($_SESSION['error_spn']);
    }
    if(isset($_SESSION['success_spn'])){
      echo " 
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
        </button> ".$_SESSION['success_spn']."             
      </div>
      ";
      unset($_SESSION['success_spn']);
    }
  ?>        
</div>
<div class="row">
  <div class="col-md">
    <!-- form card change password -->
      <div class="card card-outline-secondary w-50 mb-4" style="border: 1.5px solid rgb(0,121,213);">
        <div class="card-header">
            <h3 class="mb-0 text-center text-light">Sponsors</h3>
        </div>
        <div class="card-body">

            <form method="POST" action="Add.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleFormControlFile1">Add Image Sponsor</label>
                <input type="file" name="Img" class="form-control-file">
              </div>
              <button type="submit" name="AddSpo" class="btn bg-grad text-light mb-2 float-right">Add</button>
            </form>

        </div>
    </div> 

    <div class="row mt-2">
      <?php 
      $sql="SELECT * FROM sponsors";
      $rest=mysqli_query($conn,$sql);
      while($rowimg=mysqli_fetch_array($rest)){ 
        echo "
        <div class='sponsors-img col-6 col-md-4 col-lg-2'><img  src='data:image/jpg;charset=utf8;base64,".base64_encode($rowimg['Img'])."'/></div>
        ";
      }

      ?>
    </div><!--//row-->

    

  </div>   
</div>


  
</div>


<?php include("includes/footer.php"); ?>
  