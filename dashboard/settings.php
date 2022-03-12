<?php require_once('header.php'); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
		      <div class="col-md-6">
		      	<h4 class="card-header">Header Setting</h4>
		        <div class="card-body">
		        	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
		        		<div class="row">
			        		<div class="col-md-4" style="float:left;">
			        			<label>Logo</label>
			        			<input type="file" name="logo" id="imgupload" onchange="document.getElementById('Upload').src=window.URL.createObjectURL(this.files[0])">
			        		</div>
			        		<div class="col-md-8" style="float:left;">
			        			<img src="../images/<?php echo $header['logo']; ?>" width="80" id="Upload">
			        		</div>
		        		</div>
		        		<div class="row">
			        		<div class="col-md-6" style="float:left;">
			        			<label>Phone Number</label>
			        			<input value="<?php echo $header['phone']; ?>" name="phone" class="form-control">
			        		</div>
			        		<div class="col-md-6" style="float:left;">
			        			<label>Email</label>
			        			<input value="<?php echo $header['email']; ?>" name="email" class="form-control">
			        		</div>
		        		</div>
		        		<div class="row">
			        		<div class="col-md-6" style="float:left;">
			        			<label>Facebook</label>
			        			<input value="<?php echo $header['facebook']; ?>" name="facebook" class="form-control">
			        		</div>
			        		<div class="col-md-6" style="float:left;">
			        			<label>Twitter</label>
			        			<input value="<?php echo $header['twitter']; ?>" name="twitter" class="form-control">
			        		</div>
		        		</div>
		        		<div class="row">
			        		<div class="col-md-6" style="float:left;">
			        			<label>Instagram</label>
			        			<input value="<?php echo $header['instagram']; ?>" name="instagram" class="form-control">
			        		</div>
			        		<div class="col-md-6" style="float:left;">
			        			<label>Linkedin</label>
			        			<input value="<?php echo $header['linkedin']; ?>" name="linkedin" class="form-control">
			        		</div>
		        		</div></br>
		                <button type="submit" class="btn btn-block btn-bold btn-primary" name="header">Update Header</button>
		            </form>
		        </div>
		      </div>
		      <div class="col-md-6">
		      	<h4 class="card-header">Footer Setting</h4>
		        <div class="card-body">
		        	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
		        		<div class="row">
			        		<div class="col-md-3" style="float:left;">
			        			<img src="../images/<?php echo $footer['logo']; ?>" width="80" id="Upload1">	
			        			<input type="file" name="logo" id="imgupload1" onchange="document.getElementById('Upload1').src=window.URL.createObjectURL(this.files[0])">
			        		</div>
			        		<div class="col-md-9" style="float:left;">
			        			<input type="text" class="form-control" name="copyright_text" value="<?php echo $footer['copyright_text']; ?>" placeholder="&copy; Site Name">
			        		</div><br><br><br><br>
							<div class="col-md-12">
			        			<textarea class="form-control" name="content" placeholder="Footer Text..."><?php echo $footer['content']; ?></textarea>
			        		</div>
		        		</div></br>
		                <button type="submit" class="btn btn-block btn-bold btn-primary" name="footer">Update Footer</button>
		            </form>
		        </div>
		      </div>
	      </div>
      </div>
    </div>
<?php require_once('footer.php'); ?>