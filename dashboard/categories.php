<?php require_once('header.php'); $edit=$_GET['edit']; 
$row=$conn->query("SELECT * FROM categories WHERE id='$edit'")->fetch_assoc(); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
		      <div class="col-md-4">
		        <div class="card-body">
		        	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
		        		<!-- <img src="../images/Categories/<?php echo $row['image']; ?>"> 
		                <div class="form-group">
		                  <label>Select Parent Category</label>
		                  <select class="form-control" name="cat_id">
		                  	<option value="" selected>-- Select One --</option>
		                  	<?php $sql=$conn->query("SELECT cat_id,title FROM categories"); 
		                  	while($rows=$sql->fetch_assoc()){ ?>
		                  	<option value="<?php echo $rows['cat_id']; ?>" <?php if($rows['cat_id']==$row['cat_id']){echo'selected';} ?>>
		                  		<?php echo $rows['title']; ?>
	                  		</option>
		                  	<?php } ?>
		                  </select>
		                </div>-->

		                <div class="form-group">
		                  <label>Select Game Type</label>
		                  	<select class="form-control" name="type">
			                  	<option value="" disabled>-- Select One --</option>
		                  		<option value="Satta" selected>Satta</option>
		                  	</select>
		                </div>

		                <div class="form-group">
		                  	<label>Game Title</label>
		                  	<input class="form-control" required value="<?php echo $row['title']; ?>" name="title" placeholder="Game Title">
		                  	<input type="hidden" name="update" value="<?php echo $row['id']; ?>">
		                  	<input type="hidden" name="cat_id" value="<?php echo $logged_user_id; ?>">
		                </div>

		                <div class="form-group">
		                  	<label>Game Time <small>(Must Mentioon AM/PM)</small></label>
		                  	<input class="form-control" required placeholder="e.g. 06:15 PM" value="<?php echo $row['timeing'];?>" name="timeing">
		                </div>

		                <div class="form-group">
		                <label>Game Description</label>
	                  	<textarea name="description" class="form-control" placeholder="Game Description"><?php echo $row['description']; ?>
	                  	</textarea>
		                </div>
		                <button type="submit" class="btn btn-block btn-bold btn-primary" name="add_category"><?php if($edit){ echo 'Update'; }else{ echo 'Add'; } ?> Game</button>
		            </form>
		        </div>
		      </div>
	       	<div class="col-md-8">
	       		<h4 class="card-title">Games List</h4>
		        <div class="card-body">
		       		<table class="table table-bordered" id="categories">
		       			<thead>
		       				<tr>
								<td>ID</td>
								<td>Type</td>
								<td>Title</td>
								<td>Time</td>
								<td>Description</td>
								<?php if($logged_user_type=='Administrator'){ ?><td>Action</td><?php } ?>
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
     $('#categories').DataTable({
        "ajax":{
            "url" :"common/actions.php?categories_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"type"},
        {"data":"title"},
        {"data":"timeing"},
        {"data":"description"},
        ],
        <?php if($logged_user_type=='Administrator'){ ?>
        "columnDefs": [{
	    "targets": 5,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<a href="categories.php?edit='+data+'"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_category='+data+'"><i class="fa fa-trash"></i></a>';
	    }
	  }
	  ] <?php } ?>
     });
});
</script>
<?php require_once('footer.php'); ?>