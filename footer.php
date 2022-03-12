 
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
	<form action="dashboard/common/actions.php" method="POST">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Ragistration 
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
					<button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
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
					<h5 class="modal-title">Modal title
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

    <div class="footer">
    	<div class="container">
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="#">Ayush Chauhan</a></p>
	        </div>
    	</div>
    </div>

</body>
</html>