<!-- Add New General Chair's-->
<div class="modal fade" id="Add_GC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Full Name</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Username</span>
						</div>
						<input type="text" class="form-control" name="username" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Password</span>
						</div>
						<input type="text" class="form-control" name="pswd" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_GC" class="btn btn-success">Add</a>
				</div>
			</form>            
        </div>
    </div>
</div>
<!-- Edit General Chair's-->
<div class="modal fade" id="Edit_GC_<?php echo $row['ID_GC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_GC" value="<?php echo $row['ID_GC']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Username</span>
						</div>
						<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Password</span>
						</div>
						<input type="text" class="form-control" name="pswd" value="<?php echo $row['pswd']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_GC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
			</div>
			</form>            

        </div>
    </div>
</div>
<!-- Delete General Chair's -->
<div class="modal fade" id="Delete_GC_<?php echo $row['ID_GC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_GC=<?php echo $row['ID_GC']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_GC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>
        
    </div>
</div>

<!-- Add New Organization Chair's-->
<div class="modal fade" id="Add_OCH" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Full Name</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_OCH" class="btn btn-success">Add</a>
				</div>
			</form>            
        </div>
    </div>
</div>
<!-- Edit Organization Chair's-->
<div class="modal fade" id="Edit_OCH_<?php echo $row['ID_OCH']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_OCH" value="<?php echo $row['ID_OCH']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_OCH" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
			</div>
			</form>            

        </div>
    </div>
</div>
<!-- Delete Organization Chair's -->
<div class="modal fade" id="Delete_OCH_<?php echo $row['ID_OCH']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_OCH=<?php echo $row['ID_OCH']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_OCH" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>
        
    </div>
</div>

<!-- Add New Organization Committee-->
<div class="modal fade" id="Add_OC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Countryy</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_OC" class="btn btn-success">Add</a>
			</form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Organization Committee -->
<div class="modal fade" id="edit_OC_<?php echo $row['ID_OC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_OC" value="<?php echo $row['ID_OC']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_OC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Delete Organization Committee -->
<div class="modal fade" id="delete_OC_<?php echo $row['ID_OC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_OC=<?php echo $row['ID_OC']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_OC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>
        
    </div>
</div>



<!-- Add New Program Chair's-->
<div class="modal fade" id="Add_PCH" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Full Name</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_PCH" class="btn btn-success">Add</a>
				</div>
			</form>            
        </div>
    </div>
</div>
<!-- Edit Program Chair's-->
<div class="modal fade" id="Edit_PCH_<?php echo $row['ID_PCH']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_PCH" value="<?php echo $row['ID_PCH']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_PCH" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
			</div>
			</form>            

        </div>
    </div>
</div>
<!-- Delete Program Chair's -->
<div class="modal fade" id="Delete_PCH_<?php echo $row['ID_PCH']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_PCH=<?php echo $row['ID_PCH']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_PCH" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>
        
    </div>
</div>

<!-- Add New Programm Committee-->
<div class="modal fade" id="Add_PC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Countryy</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_PC" class="btn btn-success">Add</a>
			</form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Programm Committee -->
<div class="modal fade" id="edit_PC_<?php echo $row['ID_PC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_PC" value="<?php echo $row['ID_PC']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_PC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Delete Programm Committee -->
<div class="modal fade" id="delete_PC_<?php echo $row['ID_PC']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_PC=<?php echo $row['ID_PC']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_PC" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>
        
    </div>
</div>


<!-- Add New Steering Committee-->
<div class="modal fade" id="Add_ST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Countryy</span>
						</div>
						<input type="text" class="form-control" name="Country" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Add_ST" class="btn btn-success">Add</a>
			</form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Steering Committee -->
<div class="modal fade" id="edit_ST_<?php echo $row['ID_ST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_ST" value="<?php echo $row['ID_ST']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Fullname</span>
						</div>
						<input type="text" class="form-control" name="Name" value="<?php echo $row['Name']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">University</span>
						</div>
						<input type="text" class="form-control" name="University" value="<?php echo $row['University']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Country</span>
						</div>
						<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="Edit_ST" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Delete Steering Committee -->
<div class="modal fade" id="delete_ST_<?php echo $row['ID_ST']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<form method="POST" action="Delete.php?ID_ST=<?php echo $row['ID_ST']; ?>">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Name']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Delete_ST" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>					
				</div>
		    </div>
		</form>        
    </div>
</div>

<!-- Edit Important Dates  -->
<div class="modal fade" id="Dates_<?php echo $row['ID_IMP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Important Dates</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_IMP" value="<?php echo $row['ID_IMP']; ?>">
				<div class="input-group mb-3">
					<div class="input-group-prepend w-50">
						<span class="input-group-text w-100" id="basic-addon1">Deadline</span>
					</div>
					<input type="date" class="form-control" name="Deadline" value="<?php echo $row['Deadline']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100" id="basic-addon1">Notification</span>
						</div>
						<input type="date" class="form-control" name="Notification" value="<?php echo $row['Notification']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100" id="basic-addon1">Camera Ready</span>
						</div>
						<input type="date" class="form-control" name="Camera_Ready" value="<?php echo $row['Camera_Ready']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100" id="basic-addon1">Conferance From</span>
						</div>
						<input type="date" class="form-control" name="ConferenceFr" value="<?php echo $row['ConferenceFr']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>

					<div class="input-group mb-3">
						<div class="input-group-prepend w-50">
							<span class="input-group-text w-100" id="basic-addon1">Conferance To</span>
						</div>
						<input type="date" class="form-control" name="ConferenceTo" value="<?php echo $row['ConferenceTo']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="changeImD" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Edit Conference Name  -->
<div class="modal fade" id="Edit_Cnf_<?php echo $row['ID_CNF']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Change Conference</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_CNF" value="<?php echo $row['ID_CNF']; ?>">
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100" id="basic-addon1">Title</span>
					</div>
					<input type="text" class="form-control" name="Titre" value="<?php echo $row['Titre']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100" id="basic-addon1">Name of Title</span>
					</div>
					<input type="text" class="form-control" name="Nom_Cnf" value="<?php echo $row['Nom_Cnf']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100" id="basic-addon1">City</span>
					</div>
					<input type="text" class="form-control" name="Ville" value="<?php echo $row['Ville']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100" id="basic-addon1">Country</span>
					</div>
					<input type="text" class="form-control" name="Country" value="<?php echo $row['Country']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="change_Cnf" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Edit Submission URL  -->
<div class="modal fade" id="Edit_Sub_<?php echo $row['ID_SB']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit URL </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_SB" value="<?php echo $row['ID_SB']; ?>">
				<div class="input-group mb-3">
					<div class="input-group-prepend w-25">
						<span class="input-group-text w-100" id="basic-addon1">URL</span>
					</div>
					<input type="text" class="form-control" name="URL" value="<?php echo $row['URL']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
				</div>

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
				<button type="submit" name="change_Sub" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>



<!-- Add New Topics  -->
<div class="modal fade" id="add_title" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Add New Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Add.php">
				
				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Title</span>
						</div>
						<input type="text" class="form-control" name="Title" required onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>
				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="add_title_" class="btn btn-success">Add</a>
			</form>
            </div>
        </div>
    </div>
</div>

<!-- Edite Topics -->
<div class="modal fade" id="edit_topics_<?php echo $row['ID_TP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="Edit.php">
				<input type="hidden" class="form-control" name="ID_TP" value="<?php echo $row['ID_TP']; ?>">

				<div class="row form-group">
					<div class="input-group">
						<div class="input-group-prepend w-25">
							<span class="input-group-text w-100" id="basic-addon1">Title</span>
						</div>
						<input type="text" class="form-control" name="Title" value="<?php echo $row['Title']; ?>" onKeypress=" if (event.keyCode==60 || event.keyCode==62) event.returnValue = false; if (event.which==60 || event.which==62) return false;">
					</div>
				</div>

				</div> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
					<button type="submit" name="Edit_Topics" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Edit</a>
				
			</form>
            </div>

        </div>
    </div>
</div>
<!-- Delete Topics -->
<div class="modal fade" id="delete_topics_<?php echo $row['ID_TP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="Delete.php?ID_TP=<?php echo $row['ID_TP']; ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-center" id="myModalLabel">Delete title</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<p class="text-center">Are you sure you want to Delete</p>
					<h2 class="text-center"><?php echo $row['Title']; ?></h2>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>					
					<button type="submit" name="Delete_Topics" class="btn text-light"style="background: linear-gradient(to right, rgb(0,121,213), rgb(0,156,228));">Yes</a>
				</div>
			</div>
		</form>
        
    </div>
</div>