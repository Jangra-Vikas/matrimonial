<?php require_once('header.php'); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
	       	<div class="col-md-12">
	       		<h4 class="card-title">Users List <a href="add_user.php" class="btn btn-primary pull-right">Add New User<a></h4>
		        <div class="card-body table-responsive">
		       		<table class="table table-bordered" id="products">
		       			<thead>
		       				<tr>
								<th>ID</th>
								<th>Image</th>
								<th>Username</th>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Role</th>
								<th>Status</th>
								<th>Action</th>
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
     $('#products').DataTable({
        "ajax":{
            "url" :"common/actions.php?users_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"image"},
        {"data":"username"},
        {"data":"full_name"},
        {"data":"email"},
        {"data":"mobile"},
        {"data":"user_type"},
        {"data":"status"},
        ],
        "columnDefs": [{
	    "targets": 8,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<a href="common/actions.php?confirm_account='+data+'" title="Confirm User"><i class="fa fa-check"></i></a> &nbsp; <a href="add_user.php?edit='+data+'" title="Edit User"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_user='+data+'" title="Delete User"><i class="fa fa-trash"></i></a>';
	    }
	  },{
	    "targets": 1,
	    "data": "image",
	    "render": function ( data, type, row, meta ) {
	      return '<img src="../images/Users/'+data+'" height="50" class="avatar">';
	    }
	  }
	  ]
     });
});
</script>
<?php require_once('footer.php'); ?>