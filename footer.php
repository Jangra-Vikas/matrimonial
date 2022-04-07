 <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
	<form action="dashboard/common/actions.php" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Create your account
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label>Full Name<span class="text-danger">*</span></label><br>
									<input required name="full_name" autocomplete=off placeholder="Full Name" class="form-control">
								</div>
								<div class="form-group">
									<label>Email ID<span class="text-danger">*</span></label><br>
									<input required name="email" autocomplete=off placeholder="Email ID" class="form-control">
								</div>
								<div class="form-group">
									<label>Password<span class="text-danger">*</span></label><br>
									<input type="password" required name="password" autocomplete=off placeholder="Password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mobile Number<span class="text-danger">*</span></label><br>
									<input class="form-control" placeholder="Please enter your mobile number" name="number" type="number" minlength="10" maxlength="10" />
								</div>
								<div class="form-group">
                                    <label>Date of Birth <span class="text-danger">*</span></label><br>
                                    <input required type="date" placeholder="dd-mm-yyyy" name="dob" class="form-control">
                                </div>
								<div class="form-group">
									<label>Gender<span class="text-danger">*</span></label><br>
									<select class="form-control" name="gender">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Transegender">Transegender</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success pull-left" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login</button>
					<button type="submit" name="register" class="btn btn-primary">Continue</button>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="welcomeModal" tabindex="1" role="dialog" aria-hidden="true">
	<form action="dashboard/common/actions.php" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Welcome to NeoVivah
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" placeholder="Please enter your mobile number" name="number" type="number" minlength="10" maxlength="10" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
					<button type="submit" name="welcomeForm" class="btn btn-primary">Continue</button>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="forgotModal" tabindex="1" role="dialog" aria-hidden="true">
	<form action="dashboard/common/actions.php" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Forgot your password
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" placeholder="Please enter your email" name="email" type="email" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success pull-left" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login</button>
					<button type="submit" name="forgot" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
	<form action="dashboard/common/actions.php" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Welcome back!
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</h5>
				</div>
				<div class="modal-body">
                        <div class="form-item form-type-textfield form-item-name">
                            <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                            <input type="text" id="edit-name" name="username" value="" size="60" maxlength="60" class="form-text required">
                        </div>
                        <div class="form-item form-type-password form-item-pass">
                            <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
                            <input type="password" id="edit-pass" name="password" size="60" maxlength="128" class="form-text required">
                        </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success pull-left" data-dismiss="modal" data-toggle="modal" data-target="#registerModal">Register</button>
					<button type="button" class="btn btn-warning pull-left" data-dismiss="modal" data-toggle="modal" data-target="#forgotModal">Forgot Password</button>
					<button type="submit" name="login" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</form>
</div>

    <div class="footer">
    	<div class="container">
    		<div class="copy">
		      <p>Copyright © 2022 NeoVivah . All Rights Reserved <a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms & Conditions</a> | <a href="FAQ.php">FAQ</a> | <a href="promotional_pop_up.php">Promotional Pop Up</a> | Design by <a href="#">Ayush Chauhan</a></p>
	        </div>
    	</div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
