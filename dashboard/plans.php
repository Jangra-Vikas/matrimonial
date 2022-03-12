<?php require_once('header.php'); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
	       	<div class="col-md-12">
	       		<h4 class="card-title">Users List <a href="add_plans.php" class="btn btn-primary pull-right">Add New Plan<a></h4>
		        <div class="card-body table-responsive">
		       		<table class="table table-bordered" id="plans">
		       			<thead>
		       				<tr>
								<th>ID</th>
								<th>Image</th>
								<th>Name</th>
								<th>Contact View</th>
								<th>Validity</th>
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
     $('#plans').DataTable({
        "ajax":{
            "url" :"common/actions.php?plans_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"package_image"},
        {"data":"name"},
        {"data":"price"},
        {"data":"contact_view"},
        {"data":"status"},
        ],
        "columnDefs": [{
	    "targets": 6,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<a href="add_plans.php?edit='+data+'" title="Edit User"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_plan='+data+'" title="Delete User"><i class="fa fa-trash"></i></a>';
	    }
	  },{
	    "targets": 4,
	    "data": "contact_view",
	    "render": function ( data, type, row, meta ) {
	      return data+' Days';
	    }
	  },{
	    "targets": 1,
	    "data": "package_image",
	    "render": function ( data, type, row, meta ) {
	      return '<img src="assets/img/'+data+'" height="50" class="avatar">';
	    }
	  }
	  ]
     });
});
</script>
<?php require_once('footer.php'); ?>