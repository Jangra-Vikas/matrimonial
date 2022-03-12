<?php require_once('header.php'); ?>
    <div class="main-content">
      <div class="card">
	      <div class="row">
	       	<div class="col-md-12">
	       		<h4 class="card-title">Pages List <a href="add_page.php" class="btn btn-primary pull-right">Add New Page<a></h4>
		        <div class="card-body">
		       		<table class="table table-bordered" id="pages">
		       			<thead>
		       				<tr>
								<td>Page ID</td>
								<td>Image</td>
								<td>Name</td>
								<td>Content</td>
								<td>Action</td>
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
     $('#pages').DataTable({
        "ajax":{
            "url" :"common/actions.php?pages_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"left_img"},
        {"data":"name"},
        {"data":"content"},
        ],
        "columnDefs": [{
	    "targets": 4,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<a href="add_page.php?edit='+data+'"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_page='+data+'"><i class="fa fa-trash"></i></a>';
	    }
	  },{
	    "targets": 1,
	    "data": "id",
	    "render": function ( data, type, row, meta ) {
	      return '<img src="../images/Pages/'+data+'" height="50">';
	    }
	  },{
        "targets": 3,
        render: function ( data, type, row ) {
            return data.substr(0,50)+'...';
        }
    }
	  ]
     });
});
</script>
<?php require_once('footer.php'); ?>