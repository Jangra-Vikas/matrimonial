<?php require_once('header.php'); $edit=$_GET['edit']; 
$row=$conn->query("SELECT * FROM users WHERE id='$edit'")->fetch_assoc(); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
	      	<div class="col-md-12">
	      		<h4 class="card-title">Add New User <a href="users.php" class="btn btn-primary pull-right">All Users</a></h4>
	      	</div>
	      	<div class="col-md-12">
	      	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
	      	<div class="row">
			    <div class="col-md-4 text-center">
			      	<div class="card-body">
					    <img id="Upload" src="../images/Users/<?php echo $row['image'] ? $row['image'] : 'user.png'; ?>" class="profile-img">
						<input type="file" name="image" id="imgupload" onchange="document.getElementById('Upload').src = window.URL.createObjectURL(this.files[0])"><br>
						<input type="hidden" name="update" value="<?php echo $row['id']; ?>">
					<?php if($edit){ ?>
						<h3><?php echo $row['full_name']; ?></h3>
						<h6><i class="fa fa-envelope"></i> <?php echo $row['email']; ?></h6>
						<h6><i class="fa fa-user"></i> <?php echo $row['username']; ?></h6>
						<h6><i class="fa fa-tasks"></i> <?php echo $row['user_type']; ?></h6>
					<?php } ?>
			      	</div>
		     	</div>
		      <div class="col-md-8">
		        <div class="card-body">
	        		<div class="row">
		        		<div class="col-md-6" style="float:left;">
		        			<label>Full Name</label>
		        			<input value="<?php echo $row['full_name']; ?>" name="full_name" class="form-control" placeholder="Full Name">
		        		</div>
		        		<div class="col-md-6" style="float:left;">
		        			<label>Email</label>
		        			<input value="<?php echo $row['email']; ?>" name="email" class="form-control" placeholder="Email ID">
		        		</div>
	        		</div>
	        		<div class="row">
		        		<div class="col-md-4" style="float:left;">
		        			<label>Password</label>
		        			<input value="<?php echo $row['password']; ?>" name="password" class="form-control" placeholder="Password">
		        				
		        		</div>
		        		<div class="col-md-4" style="float:left;">
		        			<label>Mobile</label>
		        			<input value="<?php echo $row['mobile']; ?>" name="mobile" class="form-control" placeholder="Mobile">
		        				
		        		</div>
		        		<div class="col-md-4" style="float:left;">
		        			<label>Date Of Birth</label>
		        			<input value="<?php echo $row['dob']; ?>" name="dob" class="form-control datepicker" placeholder="Date Of Birth">
		        		</div>
	        		</div>
	        		<div class="row">
		        		<div class="col-md-6" style="float:left;">
		        			<label>User Type</label>
		        			<select name="user_type" class="form-control">
		        				<option value="Administrator" <?php if($row['user_type']=='Administrator'){ echo 'selected'; } ?>>Administrator</option>
		        				<option value="Editor" <?php if($row['user_type']=='Editor'){ echo 'selected'; } ?>>Editor</option>
		        				<option value="Customer" <?php if($row['user_type']=='Customer'){ echo 'selected'; } ?>>Customer</option>
		        			</select>
		        		</div>
		        		<div class="col-md-6" style="float:left;">
		        			<label>Status</label>
		        			<select name="status" class="form-control">
		        				<option value="Inactive" <?php if($row['status']=='Inactive'){ echo 'selected'; } ?>>Inactive</option>
		        				<option value="Active" <?php if($row['status']=='Active'){ echo 'selected'; } ?>>Active</option>
		        			</select>
		        		</div>
	        		</div>
	        		<label>Full Address</label>
	        		<textarea class="form-control" name="address" placeholder="Full Address"><?php echo $row['address']; ?></textarea></br>
	                <button type="submit" class="btn btn-block btn-bold btn-primary" name="add_user">
	                	<?php if($edit){ echo 'Update'; }else{ echo 'Add'; } ?> User
	                </button>
		        </div>
		      </div>
	      </div>
	  </form>
      	</div>
    </div>
</div>
<?php require_once('footer.php'); ?>