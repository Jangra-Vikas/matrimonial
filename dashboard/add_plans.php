<?php require_once('header.php'); $id = $_GET['edit'];
if ($id) {
$plan = $conn->query("SELECT * FROM plans WHERE id = $id")->fetch_assoc();
} else {
	$plan = [];
}

?>
    <div class="grid_3">
        <div class="card">
        	<div class="col-md-12">
        		<div class="col-md-2">
        		</div>
        		<div class="col-md-8">
        			<div class="card-header">
        				<p>Add New Package</p>
        			</div>
        			<div class="card-body">
        				<form action="common/actions.php" enctype="multipart/form-data" method="post">
        					<div class="row">
        						<div class="col-md-4">
				        			<div class="form-group">
				        				<label>Package Image:</label>
				        			</div>
				        		</div>
				        		<div class="col-md-8">
				        			<img id="Upload" src="assets/img/<?php echo $plan['package_image']; ?>" alt="Image" height="100">
			        				<div class="form-group">
			                        	<input accept="image/*" type="file" id="imgupload" id="name" name="package_image" onchange="document.getElementById('Upload').src=window.URL.createObjectURL(this.files[0])" style="display: none;">
			                        </div>
				        		</div>
        						<div class="col-md-4">
				        			<div class="form-group">
				        				<label>Name:</label>
				        			</div>
				        		</div>
				        		<div class="col-md-8">
			        				<div class="form-group">
			                        	<input required id="name" name="name" placeholder="Package Name" class="form-control" value="<?php echo $plan['name']; ?>">
			                        	<input name="id" type="hidden" value="<?php echo $_GET['edit']; ?>">
			                        </div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
				        				<label>Price:</label>
				        			</div>
				        		</div>
				        		<div class="col-md-8">
			        				<div class="form-group">
			                        	<input required id="name" name="price" placeholder="Price" class="form-control" value="<?php echo $plan['price']; ?>">
			                        </div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
				        				<label>Contact View:</label>
				        			</div>
				        		</div>
				        		<div class="col-md-8">
			        				<div class="form-group">
			                        	<input required id="name" name="contact_view" placeholder="Eg.10" class="form-control" value="<?php echo $plan['contact_view']; ?>">
			                        </div>
				        		</div>
				        		<div class="col-md-4">
				        			<div class="form-group">
				        				<label>Validity <small>(In Days)</small> :</label>
				        			</div>
				        		</div>
				        		<div class="col-md-8">
			        				<div class="row">
			        					<div class="col-md-6">
			        						<div class="form-group">
					                        	<input required id="name" name="validity" placeholder="Eg.10" class="form-control" value="<?php echo $plan['validity']; ?>">
					                        </div>
			        					</div>
			        					<div class="col-md-6">
			        						<select class="form-control" name="status">
			        							<option value="Active" <?php echo ($plan['status'] == 'Active') ? 'selected' : ''; ?>>Active</option>
			        							<option value="Inactive" <?php echo ($plan['status'] == 'Inactive') ? 'selected' : ''; ?>>Inactive</option>
			        						</select>
			        					</div>
			        				</div>
					                    <button type="sabmit" name="add_plan" class="btn btn-primary pull-right"><?php echo (!empty($plan)) ? 'Update Package' : 'Add New Package'; ?>
										</button>
				        		</div>
		        			</div>
	        			</form>
	        		</div>
        		</div>
        		<div class="col-md-2">
        		</div>
        	</div>
        </div>
    </div>
<?php require_once('footer.php'); ?>