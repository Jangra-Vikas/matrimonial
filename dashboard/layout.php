<?php require_once('header.php'); ?>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

    <div class="main-content">
	    <div class="card">
			<ul class="nav nav-tabs nav-tabs-danger nav-justified" role="tablist">
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#top" role="tab">Top Layout</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#bottom" role="tab">Bottom Layout</a>
				</li>
			</ul>
			<div class="row">
			  <div class="col-md-12" style="padding-bottom: 30px;">
			    <div class="card-body tab-content">
					<div class="row tab-pane fade active show" id="top">
						<form action="common/actions.php" method="POST" enctype="multipart/form-data">
			        		<div class="col-md-12 text-center">
			        			<h1>Top Layout</h1>
								<textarea class="form-control" name="top_section"><?php echo $layout['top_section']; ?></textarea>
								<script>CKEDITOR.replace('top_section');</script>
								<button type="submit" name="layout_top" class="btn btn-primary" style="margin: 10px;">
			        				Update Information
			        			</button>
			        		</div>
			    		</form>
					</div>	
					<div class="row tab-pane fade" id="bottom">
						<form action="common/actions.php" method="POST" enctype="multipart/form-data">
			        		<div class="col-md-12 text-center">
			        			<h1>Bottom Layout</h1>
								<textarea class="form-control" name="bottom_section"><?php echo $layout['bottom_section']; ?></textarea>
								<script>CKEDITOR.replace('bottom_section');</script>
								<button type="submit" name="layout_bottom" class="btn btn-primary" style="margin: 10px;">
			        				Update Information
			        			</button>
			        		</div>
			    		</form>
					</div>	
			    </div>
			  </div><br>
			</div>
      	</div>
    </div>
<?php require_once('footer.php'); ?>