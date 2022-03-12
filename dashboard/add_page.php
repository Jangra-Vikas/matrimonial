<?php require_once('header.php'); $edit=$_GET['edit']; 
$page=$conn->query("SELECT * FROM pages WHERE id='$edit'")->fetch_assoc(); ?>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
<div class="main-content">
  <div class="card">
    <div class="row">
      <div class="col-md-12" style="padding-bottom: 30px;">
	    <div class="card-body">
			<div class="row">
				<form action="common/actions.php" method="POST" enctype="multipart/form-data">
	        		<div class="col-md-8" style="float:left;">
	        		  <input type="text" name="name" class="form-control" value="<?php echo $page['name']; ?>" placeholder="Page Title ..">
	        		  <input type="hidden" name="update" class="form-control" value="<?php echo $page['id']; ?>">
	        		</div>
	        		<div class="col-md-4" style="float:left;">
	        		   <button name="add_page" class="btn btn-primary btn-block"><?php if($edit){ echo 'Update'; }else{ echo 'Add'; } ?> Page</button>
	        		</div><br><br>
	        		<div class="col-md-5" style="float:left;">
	        		   <img src="../images/Pages/<?php echo $page['left_img'] ? $page['left_img'] : 'Placeholder.jpg'; ?>" id="Upload">
	        		   <input type="file" name="left_img" id="imgupload" onchange="document.getElementById('Upload').src=window.URL.createObjectURL(this.files[0])"><br><br>
	        		</div>
	        		<div class="col-md-7" style="float:left;">
					   <textarea class="form-control" name="content"><?php echo $page['content']; ?></textarea>
					   <script>CKEDITOR.replace('content');</script>
	        		</div>
	    		</form>
			</div>	
	    </div>
	  </div><br>
    </div>
  </div>
</div>
<?php require_once('footer.php'); ?>