<?php require_once('header.php'); ?> 

<div class="grid_3">
    <div class="container">
		<div class="breadcrumb1">
			<ul style="text-align: center;font-size: 25px;font-weight: bold;">
				<a href="index.php"><i class="fa fa-home home_1"></i></a>
				<span class="divider">&nbsp;|&nbsp;</span>
				<li class="current-page">Login</li>
			</ul>
	    </div>
	    <div class="services">
			<div class="col-md-4"></div>
			<div class="col-sm-4 login_left">
				<form action="dashboard/common/actions.php" method="post">
					<div class="form-item form-type-textfield form-item-name">
						<label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
						<input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
					</div>
					<div class="form-item form-type-password form-item-pass">
						<label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
						<input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
					</div>
					<div class="form-actions">
						<input type="submit" id="edit-submit" name="login" value="Log in" class="btn_1 submit">
					</div>
				</form>
			</div>
		    <div class="col-md-4"></div>
			<div class="clearfix"></div>
		</div>
    </div>
</div>
<?php require_once('footer.php'); ?>