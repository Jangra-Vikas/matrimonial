<?php require_once('header.php'); 
$physical_attributes = json_decode($logged_user['physical_attributes']);
$language = json_decode($logged_user['language']);
$hobbies_interest = json_decode($logged_user['hobbies_interest']);
$personal_attitude_behavior = json_decode($logged_user['personal_attitude_behavior']);
$spiritual_social_background = json_decode($logged_user['spiritual_social_background']);
$lifestyle = json_decode($logged_user['lifestyle']);
$astronomic_information = json_decode($logged_user['astronomic_information']);
$family_information = json_decode($logged_user['family_information']);
$partner_expectation = json_decode($logged_user['partner_expectation']);
?>
    <div class="main-content">
      	<div class="card">
	     	<div class="myrow">
		      	<div class="col-md-12">
		      		<h4 class="card-title">Add New User <a href="users.php" class="btn btn-primary pull-right">All Users</a></h4>
		      	</div>
		      	<div class="col-md-12">
		      		<div class="card-header" data-toggle="collapse" data-target="#basic_info">
		      			<p>Basic Information<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
		      		</div>
		      		<div class="card-body collapse in" id="basic_info">
		      			<form action="common/actions.php?update=basic_info" method="post" enctype="multipart/form-data">
		      				<input name="image" class="dropify" data-default-file="dashboard/assets/img/users/<?php echo $logged_user['image']; ?>" type="file" />
		      				<div class="row">
		      					<div class="col-md-6" style="margin-top:20px;">
		      						<div class="myRow">
		      							<div class="form-group">
		      								<label>Full Name<span class="text-danger">*</span></label>
		      								<input required name="full_name" placeholder="Full Name" class="form-control" value="<?php echo $logged_user['full_name']; ?>">
		      							</div>
		      							<div class="form-group">
		      								<label>Gender<span class="text-danger">*</span></label>
		      								<select class="form-control" name="gender">
		      									<option value="">Gender</option>
		      									<option value="Male" <?php echo ($logged_user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
		      									<option value="Female" <?php echo ($logged_user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
		      									<option value="Transgender" <?php echo ($logged_user['gender'] == 'Transgender') ? 'selected' : ''; ?>>Transgender</option>
		      									<option value="Other" <?php echo ($logged_user['gender'] == 'Other') ? 'selected' : ''; ?>>Other</option>
		      								</select>
		      							</div>
		      							<div class="form-group">
                                            <label>Phone Number<span class="text-danger">*</span></label>
                                            <input required value="<?php echo $logged_user['mobile']; ?>" type="number" name="mobile" placeholder="Mobile Number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        	<label>Marital Status<span class="text-danger">*</span></label>
                                         	<select class="form-control" name="marital_status">
                                                <option value="Never Married" <?php echo ($logged_user['marital_status'] == 'Never Married') ? 'selected' : ''; ?>>Never Married</option>
                                                <option value="Married" <?php echo ($logged_user['marital_status'] == 'Married') ? 'selected' : ''; ?>>Married</option>
                                                <option value="Divorced" <?php echo ($logged_user['marital_status'] == 'Divorced') ? 'selected' : ''; ?>>Divorced</option>
                                                <option value="Separated" <?php echo ($logged_user['marital_status'] == 'Widowed') ? 'selected' : ''; ?>>Widowed</option>
                                               
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        	<label>Education<span class="text-danger">*</span></label>
                                        	<select class="form-control" name="education">
                                                <option value="">Select One</option>
                                                    <?php $qualification = $conn->query('SELECT * FROM education');
                                                    while($x = $qualification->fetch_assoc()){
                                                        echo '<option value="'.$x["id"].'" '.(($x['id'] == $logged_user['education']) ? 'selected' : '').'>'.$x["name"].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
		      						</div>
		      					</div>
		      					<div class="col-md-6" style="margin-top:20px;">
		      						<div class="myRow">
			      						<div class="form-group">
			      							<label>Email ID <span class="text-danger">*</span></label>
			      							<input required value="<?php echo $logged_user['email']; ?>" type="email" placeholder="Email ID" name="email" class="form-control">
			      						</div>
			      						<div class="form-group">
		      								<label>Date of Birth <span class="text-danger">*</span></label>
		      								<input required type="date" placeholder="dd-mm-yyyy" name="dob" class="form-control" value="<?php echo $logged_user['dob']; ?>">
		      							</div>
		      							<div class="form-group">
                                            <label>On Behalf <span class="text-danger">*</span></label>
                                            <select class="form-control" name="on_behalf">
                                                <option value="Self" <?php echo ($logged_user['on_behalf'] == 'Self') ? 'selected' : ''; ?>>Self</option>
                                                <option value="Friend" <?php echo ($logged_user['on_behalf'] == 'Friend') ? 'selected' : ''; ?>>Friend</option>
                                                <option value="Brother" <?php echo ($logged_user['on_behalf'] == 'Brother') ? 'selected' : ''; ?>>Brother</option>
                                                <option value="Daughter/Son" <?php echo ($logged_user['on_behalf'] == 'Daughter/Son') ? 'selected' : ''; ?>>Daughter/Son</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Number Of Children<span class="text-danger">*</span></label><br>
                                            <input required type="number" value="<?php echo $logged_user['children']; ?>" placeholder="Number Of Children" class="form-control" name="children">
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right ">Update</button>
			      					</div>
		      					</div>
		      				</div>
		      			</form>
		      		</div>
	      		</div>
	      		<div class="col-md-12">
	      			<div class="card-header" data-toggle="collapse" data-target="#physical_attributes">
	      				<p>Physical Attributes<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
	      			</div>
	      			<div class="card-body collapse" id="physical_attributes">
	      				<form action="common/actions.php?update=physical_attributes" method="post">
	      					<div class="row">
	      						<div class="col-md-6" style="margin-top:20px;">
	      							<div class="myRow">
	      								<div class="form-group">
                                            <label>Height (In Feet)</label><br>
                                            <input required value="<?php echo $physical_attributes->height; ?>" type="number" placeholder="Height" name="height" class="form-control" step=".01">
                                        </div>
                                        <div class="form-group">
                                            <label>Eye Color</label><br>
                                            <input required value="<?php echo $physical_attributes->eye_color; ?>" name="eye_color" placeholder="Eye Color" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Complexion</label><br>
                                            <input required value="<?php echo $physical_attributes->complexion; ?>" name="complexion" placeholder="Complexion" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label><br>
                                            <input required value="<?php echo $physical_attributes->body_type; ?>" name="body_type" placeholder="Body Type" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Disability</label><br>
                                            <input required value="<?php echo $physical_attributes->disability; ?>" name="disability" placeholder="Disability" class="form-control">
                                        </div>
	      							</div>
	      						</div>
	      						<div class="col-md-6" style="margin-top:20px;">
	      							<div class="myRow">
                                        <div class="form-group">
                                            <label>Weight (In Kg)</label><br>
                                            <input required value="<?php echo $physical_attributes->weight; ?>" name="weight" placeholder="Weight" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hair Color</label><br>
                                            <input required value="<?php echo $physical_attributes->hair_color; ?>" name="hair_color" placeholder="Hair Color" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Blood Group</label><br>
                                            <input required value="<?php echo $physical_attributes->blood_group; ?>" name="blood_group" placeholder="Blood Group" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Body Art</label><br>
                                            <input required value="<?php echo $physical_attributes->body_art; ?>" name="body_art" placeholder="Body Art" class="form-control">
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button>
                                    </div>
	      						</div>
	      					</div>
	      				</form>
	      			</div>
	      		</div>
	            <div class="col-md-12">
	            	<div class="card-header" data-toggle="collapse" data-target="#Residence">
	            		<p>Residence & Language<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
	            	</div>
	            	<div class="card-body collapse" id="Residence">
	            		<form action="common/actions.php?update=language" method="post">
	            			<div class="row">
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
	            						<div class="form-group">
                                            <label>Mother Tongue</label><br>
                                            <select class="form-control" name="mother_tongue">
                                                <option value="English" <?php echo ($language->mother_tongue == 'English') ? 'selected' : ''; ?>> English </option>
                                                <option value="German" <?php echo ($language->mother_tongue == 'German') ? 'selected' : ''; ?>> German </option>
                                                <option value="Hindi" <?php echo ($language->mother_tongue == 'Hindi') ? 'selected' : ''; ?>> Hindi </option>
                                                <option value="Urdu" <?php echo ($language->mother_tongue == 'Urdu') ? 'selected' : ''; ?>> Urdu </option>
                                                <option value="Arabic" <?php echo ($language->mother_tongue == 'Arabic') ? 'selected' : ''; ?>> Arabic </option>
                                                <option value="Tamil" <?php echo ($language->mother_tongue == 'Tamil') ? 'selected' : ''; ?>> Tamil </option>
                                                <option value="Chainese" <?php echo ($language->mother_tongue == 'Chainese') ? 'selected' : ''; ?>> Chainese </option>
                                                <option value="Japanese" <?php echo ($language->mother_tongue == 'Japanese') ? 'selected' : ''; ?>> Japanese </option>
                                                <option value="Datch" <?php echo ($language->mother_tongue == 'Datch') ? 'selected' : ''; ?> > Datch </option>
                                                <option value="Spanish" <?php echo ($language->mother_tongue == 'Spanish') ? 'selected' : ''; ?>> Spanish </option>
                                                <option value="Telugu" <?php echo ($language->mother_tongue == 'Telugu') ? 'selected' : ''; ?>> Telugu </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label><br>
                                            <div class="select-block1">
                                                <select class="form-control select" name="country" data-type="state">
                                                    <option value="">Select</option>
                                                    <?php $countries = $conn->query('SELECT * FROM countries');
                                                    while($x = $countries->fetch_assoc()){
                                                    echo '<option value="'.$x["name"].'">'.$x["name"].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <div class="select-block1">
                                                <label>City</label>
                                                <select id="city" name="cites">
                                                    <option value="">Choose state first</option>
                                                </select>
                                            </div>
                                        </div>
	            					</div>
	            				</div>
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
	            						<div class="form-group">
                                            <label>Known Languages</label><br>
                                            <select class="form-control" name="Languages">
                                                <option value="">Select</option>
                                                <?php $languages = $conn->query('SELECT * FROM language WHERE is_active="Yes"');
                                                    while($x = $languages->fetch_assoc()){
                                                        echo '<option value="'.$x["id"].'" '.(($x['id'] == $language->Languages) ? 'selected' : '').'>'.$x["name"].'</option>';
                                                    }
                                                ?> 
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>State</label>
                                            <div class="select-block1">
                                                <select class="select" data-type="city" name="states" id="state">
                                                    <option value="">Choose country first</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button>
	            					</div>
	            				</div>
	            			</div>
	            		</form>
	            	</div>
	            </div>
	            <div class="col-md-12">
	            	<div class="card-header" data-toggle="collapse" data-target="#Hobbies">
	            		<p>Hobbies & Interest<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
	            	</div>
	            	<div class="card-body collapse" id="Hobbies">
	            		<form action="common/actions.php?update=hobbies_interest" method="post">
	            			<div class="row">
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
                                        <div class="form-group">
                                            <label>Hobbies</label><br>
                                            <input required value="<?php echo $hobbies_interest->hobbies; ?>" name="hobbies" placeholder="Hobbies" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Music</label><br>
                                            <input required value="<?php echo $hobbies_interest->music; ?>" name="music"placeholder="Music" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Movies</label><br>
                                            <input required value="<?php echo $hobbies_interest->movies; ?>" name="movies" placeholder="Movies" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Sports</label><br>
                                            <input required value="<?php echo $hobbies_interest->sports; ?>" name="sports" placeholder="Sports" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Cuisines</label><br>
                                            <input required value="<?php echo $hobbies_interest->cuisines; ?>" name="cuisines" placeholder="Cuisines" class="form-control">
                                        </div>
                                    </div>
	            				</div>
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
	            						<div class="form-group">
                                            <label>Interests</label><br>
                                            <input required value="<?php echo $hobbies_interest->interests; ?>" name="interests" placeholder="Interests" class="form-control">
                                        </div> 
                                        <div class="form-group">                           
                                            <label>Books</label><br>
                                            <input required value="<?php echo $hobbies_interest->books; ?>" name="books" placeholder="Books" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>TV Shows</label><br>
                                            <input required value="<?php echo $hobbies_interest->shows; ?>" name="shows" placeholder="TV Shows" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fitness Activitiess</label><br>
                                            <input required value="<?php echo $hobbies_interest->fitness_activitiess; ?>" name="fitness_activitiess" placeholder="Fitness Activitiess" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Dress Styles</label><br>
                                            <input required value="<?php echo $hobbies_interest->dress_styles; ?>" name="dress_styles" placeholder="Dress Styles" class="form-control">
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button>
	            					</div>
	            				</div>
	            			</div>
	            		</form>
	            	</div>
	            </div>
	            <div class="col-md-12">
	            	<div class="card-header" data-toggle="collapse" data-target="#personal">
	            		<p>Personal Attitude & Behavior<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
	            	</div>
	            	<div class="card-body collapse" id="personal">
	            		<form action="common/actions.php?update=personal_attitude_behavior" method="post">
	            			<div class="row">
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
                                        <div class="form-group">
                                            <label>Affection</label><br>
                                            <input required value="<?php echo $personal_attitude_behavior->affection; ?>" name="affection" placeholder="Affection" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Humor</label><br>
                                            <input required value="<?php echo $personal_attitude_behavior->humor; ?>" name="humor" placeholder="Humor" class="form-control">
                                        </div>
                                    </div>
	            				</div>
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
	            						<div class="form-group">
                                            <label>Political Views</label><br>
                                            <input required value="<?php echo $personal_attitude_behavior->political_views; ?>" name="political_views" placeholder="Political Views" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Religious Service</label><br>
                                            <input required value="<?php echo $personal_attitude_behavior->religious_service; ?>" name="religious_service" placeholder="Religious Service" class="form-control">
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button> 
	            					</div>
	            				</div>
	            			</div>
	            		</form>
	            	</div>
	            </div>
	           	<div class="col-md-12">
	            	<div class="card-header" data-toggle="collapse" data-target="#Spiritual">
	            		<p>Spiritual & Social Background<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
	            	</div>
	            	<div class="card-body collapse" id="Spiritual">
	            		<form action="common/actions.php?update=spiritual_social_background" method="post">
	            			<div class="row">
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
	            						<div class="form-group">
                                            <label>Religion</label><br>
                                            <select class="form-control" name="religion">
                                                    <option value="">Select One</option>
                                                    <option value="Islam" <?php echo ($spiritual_social_background->religion == 'Islam') ? 'selected' : ''; ?>selected> Islam </option>
                                                    <option value="Hinduism" <?php echo ($spiritual_social_background->religion == 'Hinduism') ? 'selected' : ''; ?>> Hinduism </option>
                                                    <option value="Christianity" <?php echo ($spiritual_social_background->religion == 'Christianity') ? 'selected' : ''; ?>> Christianity </option>
                                                    <option value="Buddhism" <?php echo ($spiritual_social_background->religion == 'Buddhism') ? 'selected' : ''; ?>> Buddhism </option>
                                                    <option value="Jainism" <?php echo ($spiritual_social_background->religion == 'Jainism') ? 'selected' : ''; ?>> Jainism </option>
                                                    <option value="Baha&#039" <?php echo ($spiritual_social_background->religion == 'Baha&#039') ? 'selected' : ''; ?>> Baha&#039;i </option>
                                                    <option value="Sikhism" <?php echo ($spiritual_social_background->religion == 'Sikhism') ? 'selected' : ''; ?>> Sikhism </option>
                                                    <option value="Confucianism" <?php echo ($spiritual_social_background->religion == 'Confucianism') ? 'selected' : ''; ?>> Confucianism </option>
                                                    <option value="Atheism" <?php echo ($spiritual_social_background->religion == 'Atheism') ? 'selected' : ''; ?>> Atheism </option>
                                                    <option value="ertt" <?php echo ($spiritual_social_background->religion == 'ertt') ? 'selected' : ''; ?>> ertt </option>
                                                    <option value="SILVER" ><?php echo ($spiritual_social_background->religion == 'SILVER') ? 'selected' : ''; ?> SILVER </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Caste</label><br>
                                            <input required value="<?php echo $spiritual_social_background->sub_caste; ?>" name="sub_caste" placeholder="Sub Caste" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Personal Value</label><br>
                                            <input required value="<?php echo $spiritual_social_background->personal_value; ?>" name="personal_value" placeholder="Personal Value" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Community Value</label><br>
                                            <input required value="<?php echo $spiritual_social_background->community_value; ?>" name="community_value" placeholder="Community Value" class="form-control">
                                        </div>
	            					</div>
	            				</div>
	            				<div class="col-md-6" style="margin-top:20px;">
	            					<div class="myRow">
                                        <div class="form-group">
                                            <label>Caste</label><br>
                                            <input required value="<?php echo $spiritual_social_background->caste; ?>" name="caste" placeholder="Caste" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Manglik</label><br>
                                            <select class="form-control" name="manglik">
                                                <option value="Yes"<?php echo ($spiritual_social_background->manglik == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No"<?php echo ($spiritual_social_background->manglik == 'No') ? 'selected' : ''; ?> selected>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($spiritual_social_background->manglik == 'Dose_Not_Matter') ? 'selected' : ''; ?>>Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ethnicity</label><br>
                                            <input required value="<?php echo $spiritual_social_background->ethnicity; ?>" name="ethnicity" placeholder="Ethnicity" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Family Value </label><br>
                                            <select class="form-control" name="family_value">
                                                <option value="">Select One</option>
                                                <option value="Liberall"<?php echo ($spiritual_social_background->family_value == 'Liberall') ? 'selected' : ''; ?>> Liberall</option>
                                                <option value="Moderate"<?php echo ($spiritual_social_background->family_value == 'Moderate') ? 'selected' : ''; ?>> Moderate</option>
                                                <option value="Traditional"<?php echo ($spiritual_social_background->family_value == 'Traditional') ? 'selected' : ''; ?>> Traditional</option>
                                                <option value="Xanthus" <?php echo ($spiritual_social_background->family_value == 'Xanthus') ? 'selected' : ''; ?>> Xanthus Collins</option>
                                            </select>
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button> 
                                    </div>
	            				</div>
	            			</div>
	            		</form>
	            	</div>
	            </div>
	            <div class="col-md-12">
                    <div class="card-header" data-toggle="collapse" data-target="#lifes">
                        <p>Lifestyle<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-body collapse" id="lifes">
                        <form action="common/actions.php?update=lifestyle" method="post">
                            <div class="row">
	                            <div class="col-md-6" style="margin-top:20px;">
	                                <div class="myRow">
	                                    <div class="form-group">
	                                        <label>Diet</label><br>
	                                        <select class="form-control" name="diet">
	                                            <option value="">Select</option>
	                                            <option value="Yes" <?php echo ($lifestyle->diet == 'Yes') ? 'selected' : ''; ?> selected  >Yes</option>
	                                            <option value="No" <?php echo ($lifestyle->diet == 'No') ? 'selected' : ''; ?>>No</option>
	                                        </select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Smoke</label><br>
	                                        <select class="form-control" name="smoke">
	                                            <option value="">Select</option>
	                                            <option value="Yes" <?php echo ($lifestyle->smoke == 'Yes') ? 'selected' : ''; ?>>Yes</option>
	                                            <option value="No" <?php echo ($lifestyle->smoke == 'No') ? 'selected' : ''; ?>>No</option>
	                                        </select>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-md-6"style="margin-top:20px;">
	                                <div class="myRow">
	                                    <div class="form-group">
	                                        <label>Drink</label><br>
	                                        <select class="form-control" name="drink">
	                                            <option value="">Select</option>
	                                            <option value="Yes" <?php echo ($lifestyle->drink == 'Yes') ? 'selected' : ''; ?>>Yes</option>
	                                            <option value="No" <?php echo ($lifestyle->drink == 'No') ? 'selected' : ''; ?>>No</option>
	                                        </select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Living With</label><br>
	                                        <input required value="<?php echo $lifestyle->living_with; ?>" name="living_with" placeholder="Living With" class="form-control">
	                                    </div>
	                                    <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button>
	                                </div> 
	                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-header" data-toggle="collapse" data-target="#Astronomic">
                        <p>Astronomic Information<i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-body collapse" id="Astronomic">
                        <form action="common/actions.php?update=astronomic_information" method="post">
                            <div class="row">
                                <div class="col-md-6" style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>Sun Sign</label><br>
                                            <input required value="<?php echo $astronomic_information->sun_sign; ?>" name="sun_sign" placeholder="Sun Sign" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Time Of Birth</label><br>
                                            <input required value="<?php echo $astronomic_information->tob; ?>" type="birth" name="tob" placeholder="Time Of Birth" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>Moon Sign</label><br>
                                            <input required value="<?php echo $astronomic_information->moon_sign; ?>" name="moon_sign" placeholder="Moon Sign" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>City Of Birth</label><br>
                                            <input required value="<?php echo $astronomic_information->cob; ?>" type="birth" name="cob" placeholder="City Of Birth" class="form-control">
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button>
                                    </div>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-header" data-toggle="collapse" data-target="#Family">
                        <p>Family Information <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-body collapse" id="Family">
                        <form action="common/actions.php?update=family_information" method="post">
                            <div class="row">
                                <div class="col-md-6" style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>Father</label><br>
                                            <select class="form-control" name="father">
                                                <option value="">Select</option>
                                                <option value="Yes" <?php echo ($family_information->father == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($family_information->father == 'No') ? 'selected' : ''; ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Number Of Sibling</label><br>
                                            <input required type="number" value="<?php echo $family_information->sibling; ?>" name="sibling" placeholder="Sibling" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>Mother</label><br>
                                            <select class="form-control" name="mother">
                                                <option value="">Select</option>
                                                <option value="Yes" <?php echo ($family_information->mother == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($family_information->mother == 'No') ? 'selected' : ''; ?>>No</option>
                                            </select>
                                        </div>
                                        <button type="sabmit" class="btn_1 btn-primary submit  pull-right">Update</button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card-header" data-toggle="collapse" data-target="#Partner">
                        <p>Partner Expectation <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i></p>
                    </div>
                    <div class="card-body collapse" id="Partner">
                        <form action="common/actions.php?update=partner_expectation" method="post">
                            <div class="row">
                                <div class="col-md-6" style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>General Requirement</label><br>
                                            <input required value="<?php echo $partner_expectation->general_requirement; ?>" name="general_requirement" placeholder="General" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Min Height (In Feet)</label><br>
                                            <input required type="number" step=".01" value="<?php echo $partner_expectation->Min_height; ?>" name="Min_height" placeholder="Height" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Marital Status</label><br>
                                            <select class="form-control" name="marital_status1">
                                                <option value="">Choose One</option>
                                                <option value="Never_Married" <?php echo ($partner_expectation->marital_status1 == 'Never_Married') ? 'selected' : ''; ?> selected >Never Married</option>
                                                <option value="Married" <?php echo ($partner_expectation->marital_status1 == 'Married') ? 'selected' : ''; ?>>Married</option>
                                                <option value="Divorced" <?php echo ($partner_expectation->marital_status1 == 'Divorced') ? 'selected' : ''; ?>>Divorced </option>
                                                <option value="Separated" <?php echo ($partner_expectation->marital_status1 == 'Separated') ? 'selected' : ''; ?>>Separated </option>
                                                <option value="Widowed" <?php echo ($partner_expectation->marital_status1 == 'Widowed') ? 'selected' : ''; ?>>Widowed</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Religion</label><br>
                                                <select class="form-control" name="religion1">
                                                    <option value="">Select One</option>
                                                    <?php $religions = $conn->query('SELECT * FROM religions WHERE is_active="Yes"');
                                                        while($x = $religions->fetch_assoc()){
                                                            echo '<option value="'.$x["id"].'" '.(($x['id'] == $partner_expectation->religion1) ? 'selected' : '').'>'.$x["name"].'</option>';

                                                        }
                                                    ?>

                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Caste </label><br>
                                            <input required value="<?php echo $partner_expectation->sub_caste1; ?>" name="sub_caste1" placeholder="Sub Caste" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Education</label><br>
                                            <input required value="<?php echo $partner_expectation->education; ?>" name="education" placeholder="Education" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smoking Acceptable</label><br>
                                            <select class="form-control" name="smoking_acceptable">
                                                <option value="Yes"<?php echo ($partner_expectation->smoking_acceptable == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($partner_expectation->smoking_acceptable == 'No') ? 'selected' : ''; ?>>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($partner_expectation->smoking_acceptable == 'Dose_Not_Matter') ? 'selected' : ''; ?>>Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dieting Acceptable </label><br>
                                            <select class="form-control" name="dieting_acceptable">
                                                <option value="Yes" <?php echo ($partner_expectation->dieting_acceptable == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($partner_expectation->dieting_acceptable == 'No') ? 'selected' : ''; ?>>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($partner_expectation->dieting_acceptable == 'Dose_Not_Matter') ? 'selected' : ''; ?>>Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Personal Value</label><br>
                                            <input required value="<?php echo $partner_expectation->personal_value; ?>" name="personal_value" placeholder="Personal Value" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Family Value </label><br>
                                            <select class="form-control" name="Family">
                                                <option value="">Select One</option>
                                                <option value="Liberall"  <?php echo ($partner_expectation->Family == 'Liberall') ? 'selected' : ''; ?>> Liberall </option>
                                                <option value="Moderate" <?php echo ($partner_expectation->Family == 'Moderate') ? 'selected' : ''; ?>> Moderate </option>
                                                <option value="Traditional"  <?php echo ($partner_expectation->Family == 'Traditional') ? 'selected' : ''; ?>> Traditional </option>
                                                <option value="Xanthus_Collins" <?php echo ($partner_expectation->Family == 'Xanthus_Collins') ? 'selected' : ''; ?>> Xanthus Collins </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"style="margin-top:20px;">
                                    <div class="myRow">
                                        <div class="form-group">
                                            <label>Residence Country </label>
                                                <select class="form-control" name="residence_country">
                                                    <option value="">Select One</option>
                                                    <?php $residence_country = $conn->query('SELECT * FROM countries');
                                                        while($x = $residence_country->fetch_assoc()){
                                                            echo '<option value="'.$x["id"].'" '.(($x['id'] == $partner_expectation->residence_country) ? 'selected' : '').'>'.$x["name"].'</option>';
                                                        }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Max Weight (In Kg)</label><br>
                                            <input required value="<?php echo $partner_expectation->Max_weight; ?>" name="Max_weight" placeholder="Weight" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Children Acceptable </label><br>
                                            <select class="form-control" name="children_acceptable">
                                                <option value="">Choose One</option>
                                                <option value="Yes" <?php echo ($partner_expectation->children_acceptable == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($partner_expectation->children_acceptable == 'No') ? 'selected' : ''; ?>>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($partner_expectation->children_acceptable == 'Dose_Not_Matter') ? 'selected' : ''; ?> >Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Caste</label><br>
                                            <input required value="<?php echo $partner_expectation->caste1; ?>" name="caste1" placeholder="Caste" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Language</label><br>
                                            <select class="form-control" name="language">
                                                <option value="">Select One</option>
                                                <?php $language = $conn->query('SELECT * FROM language WHERE is_active="Yes"');
                                                    while($x = $language->fetch_assoc()){
                                                        echo '<option value="'.$x["id"].'" '.(($x['id'] == $partner_expectation->language) ? 'selected' : '').'>'.$x["name"].'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Profession</label><br>
                                            <input required value="<?php echo $partner_expectation->profession; ?>" name="profession" placeholder="Profession" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Drinking Acceptable</label><br>
                                            <select class="form-control" name="drinking_acceptable">
                                                <option value="Yes"<?php echo ($partner_expectation->drinking_acceptable == 'No') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No" <?php echo ($partner_expectation->drinking_acceptable == 'No') ? 'selected' : ''; ?>selected>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($partner_expectation->drinking_acceptable == 'Dose_Not_Matter') ? 'selected' : ''; ?>>Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Body Type</label><br>
                                            <input required value="<?php echo $partner_expectation->body_type1; ?>" name="body_type1" placeholder="Body Type" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Manglik</label><br>
                                            <select class="form-control" name="manglik">
                                                <option value="Yes"<?php echo ($partner_expectation->manglik == 'Yes') ? 'selected' : ''; ?>>Yes</option>
                                                <option value="No"<?php echo ($partner_expectation->manglik == 'No') ? 'selected' : ''; ?> selected>No</option>
                                                <option value="Dose_Not_Matter" <?php echo ($partner_expectation->manglik == 'Dose_Not_Matter') ? 'selected' : ''; ?>>Dose not matter</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Complexion</label><br>
                                            <input required value="<?php echo $partner_expectation->Complexion1; ?>" name="Complexion1" placeholder="Complexion" class="form-control">
                                        </div>
                                        <button type="sabmit" class="btn btn-primary submit  pull-right pull-right">Update</button> 
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
	      	</div>
    	</div>
	</div>
<?php require_once('footer.php'); ?>