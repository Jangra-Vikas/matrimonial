<?php require_once('header.php'); $edit=$_GET['edit']; 
$row=$conn->query("SELECT * FROM posts WHERE id='$edit'")->fetch_assoc(); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
		      <div class="col-md-4">
		        <div class="card-body">
		        	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
		                <div class="form-group">
		                  	<label>Post Title</label>
		                  	<input class="form-control" value="<?php echo $row['title']; ?>" name="title" required placeholder="Post Title">
		                  	<input class="form-control" type="hidden" name="update" value="<?php echo $row['id']; ?>">
		                </div>
						<div class="form-group">
		                  	<label>Post Numbers</label>
		                  	<input class="form-control" value="<?php echo $row['numbers']; ?>" name="numbers" required placeholder="Post Numbers">
		                  	<input class="form-control" type="hidden" name="update" value="<?php echo $row['id']; ?>">
		                </div>

		                <div class="form-group">
							<label>Post Description</label>
							<textarea name="description" required class="form-control" placeholder="Post Description"><?php echo $row['description']; ?></textarea>
		                </div>
		                <button type="submit" class="btn btn-block btn-bold btn-primary" name="add_post"><?php if($edit){ echo 'Update'; }else{ echo 'Add'; } ?> Post</button>
		            </form>
		        </div>
		      </div>
	       	<div class="col-md-8">
	       		<h4 class="card-title">Posts List</h4>
		        <div class="card-body">
		       		<table class="table table-bordered" id="postsList">
		       			<thead>
		       				<tr>
								<td>ID</td>
								<td>Title</td>
								<td>Numbers</td>
								<td>Description</td>
								<?php if($logged_user_type=='Administrator'){ echo "<td>Action</td>"; } ?>
		       				</tr>
		       			</thead>
		       			<tbody></tbody>
		       		</table>
	       		</div>
	       	</div>
	      </div>
      </div>
    </div>
<script type="text/javascript">
	$(document).ready(function() {
     $('#postsList').DataTable({
        "ajax":{
            "url" :"common/actions.php?posts_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"title"},
        {"data":"numbers"},
        {"data":"description"},
        ],
        <?php if($logged_user_type=='Administrator') { ?>
        "columnDefs": [{
	    "targets": 4,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<a href="posts.php?edit='+data+'"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_post='+data+'"><i class="fa fa-trash"></i></a>';
	    }
	  }] <?php } ?>
     });
});
</script>
<?php require_once('footer.php'); ?>