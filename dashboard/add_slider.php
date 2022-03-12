<?php require_once('header.php'); $edit=$_GET['edit']; 
$sql=$conn->query("SELECT * FROM sliders WHERE id='$edit'");
$row=$sql->fetch_assoc();
?>
<script src="assets/vendor/Jcrop/js/jquery.Jcrop.min.js"></script>
<link rel="stylesheet" href="assets/vendor/Jcrop/css/jquery.Jcrop.css" type="text/css" />
<script>
	function readImage(input) {
	  if (input.files && input.files[0]) {
	    var reader = new FileReader();
	    reader.onload = function(e) {
	      $('#imgInput').attr('src', e.target.result);
	    }

	    reader.readAsDataURL(input.files[0]);
	  }
	}
	$("document").ready(function(){
	    $("#image").change(function() {
	        $('#modal-large').modal('show');
	        readImage(this);
	    });
	});
/*	var $j = jQuery.noConflict();
	$j(function(){ 
		$('#imgInput').Jcrop(); 
	});*/
</script>
    <div class="main-content">
      <div class="card">
	      <div class="row">
		      <div class="col-md-4">
		        <div class="card-body">
		        	<form action="common/actions.php" method="POST" enctype="multipart/form-data">
		        		<img src="../images/Sliders/<?php echo $row['image']; ?>">
		                <div class="form-group">
		                  <label>Select Slider</label>
		                  <select class="form-control" name="name">
		                  	<option value="">-- Select One --</option>
		                  	<option value="Home" <?php if($row['name']=='Home'){echo'selected';} ?>>Home</option>
		                  </select>
		                </div>

		                <div class="form-group">
		                  <label>Slider Title</label>
		                  <input class="form-control" value="<?php echo $row['title']; ?>" name="title" placeholder="Slider Title">
		                  <input class="form-control" type="hidden" name="slider_id" value="<?php echo $row['id']; ?>">
		                </div>

		                <div class="form-group">
		                  <label>Slider Description</label>
		                  <textarea name="description" class="form-control" placeholder="Slider Description"><?php echo $row['discription']; ?></textarea>
		                </div>
		                <input type="file" name="image" id="image" class="form-control"><br>
		                <button type="submit" class="btn btn-block btn-bold btn-primary" name="add_slider">Add Slider</button>
		            </form>
		        </div>
		      </div>
	       	<div class="col-md-8">
	       		<h4 class="card-title">Slider List</h4>
		        <div class="card-body">
		       		<table class="table table-bordered" id="slider">
		       			<thead>
		       				<tr>
								<td>ID</td>
								<td>Name</td>
								<td>Title</td>
								<td>Image</td>
								<td>Description</td>
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
<div class="modal fade" id="modal-large">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
       	<div class="col-md-12">
       		<img src="#" id="imgInput">
       	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-bold btn-pure btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-bold btn-pure btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
 	$('#slider').DataTable({
        "ajax":{
            "url" :"common/actions.php?slider_list=all",
            "dataSrc": "",
        },
        "columns" : [
        {"data":"id"},
        {"data":"name"},
        {"data":"title"},
        {"data":"image"},
        {"data":"discription"},
        ],
        "columnDefs": [{
	    "targets": 5,
	    "data": "id",
		    "render": function ( data, type, row, meta ) {
		      return '<a href="add_slider.php?edit='+data+'"><i class="fa fa-pencil"></i></a> &nbsp; <a href="common/actions.php?delete_slider='+data+'"><i class="fa fa-trash"></i></a>';
		    }
	  	},
	  	{
	    "targets": 3,
	    "data": "id",
		    "render": function ( data, type, row, meta ) {
		      	return "<img src='../images/Sliders/"+data+"' width='100px'>";
		    }
	  	}]
     });
});
</script>
<?php require_once('footer.php'); ?>