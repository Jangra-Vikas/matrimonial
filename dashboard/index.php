<?php require_once('header.php'); ?>
  <main>
    <div class="main-content">
      <div class="card">
        <h4 class="card-title">Welcome <b><?php echo $logged_name; ?></b></h4>
        <div class="card-body row">
            <div class="col-md-2 bordered">
                <div class="card-body">
                    <a href="categories.php">
                        <i class="fa fa-5x fa-calendar"></i><br>
                        <h5>Register Game</h5>
                    </a>
                </div>
            </div>
        	<div class="col-md-2 bordered">
        		<div class="card-body">
                    <a href="posts.php">
            			<i class="fa fa-5x fa-calendar-plus-o"></i><br>
            			<h5>Add Post</h5>
                    </a>
        		</div>
        	</div>
            <div class="col-md-2 bordered">
                <div class="card-body">
                    <a href="chart.php">
                        <i class="fa fa-5x fa-calendar-check-o"></i><br>
                        <h5>Daily Update</h5>
                    </a>
                </div>
            </div>
        <?php if($logged_user_type=='Administrator'){ ?>
        	<div class="col-md-2 bordered">
        		<div class="card-body">
                    <a href="users.php">
            			<i class="fa fa-5x fa-user"></i><br>
            			<h5>Users</h5>
                    </a>
        		</div>
        	</div>
        	<div class="col-md-2 bordered">
        		<div class="card-body">
                    <a href="settings.php">
            			<i class="fa fa-5x fa-upload"></i><br>
            			<h5>Header</h5>
                    </a>
        		</div>
        	</div>
        	<div class="col-md-2 bordered">
        		<div class="card-body">
                    <a href="settings.php">
            			<i class="fa fa-5x fa-download"></i><br>
            			<h5>Footer</h5>
                    </a>
        		</div>
        	</div>
        <?php }?>
        </div>
      </div>
    </div>
<?php require_once('footer.php'); ?>