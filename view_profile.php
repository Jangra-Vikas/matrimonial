<?php require_once('header.php'); $userId = $_GET['view'];
$user = $conn->query("SELECT * FROM users WHERE id = $userId")->fetch_assoc();
$physical_attributes = json_decode($user['physical_attributes']);
$language = json_decode($user['language']);
$hobbies_interest = json_decode($user['hobbies_interest']);
$personal_attitude_behavior = json_decode($user['personal_attitude_behavior']);
$spiritual_social_background = json_decode($user['spiritual_social_background']);
$lifestyle = json_decode($user['lifestyle']);
$astronomic_information = json_decode($user['astronomic_information']);
$family_information = json_decode($user['family_information']);
$partner_expectation = json_decode($user['partner_expectation']);?>
    <div class="grid_3">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">View Profile</li>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="profile">
                <div class="col-md-8 profile_left">
                    <div class="col_3">
                        <div class="col-sm-3 row_2">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="dashboard/assets/img/users/<?php echo $user['image']; ?>">
                                        <img src="dashboard/assets/img/users/<?php echo $user['image']; ?>" class="img-responsive"/>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-sm-7 row_1">
                            <table class="table_working_hours">
                                <tbody>
	                                <tr class="opened_1">
	                                    <td class="day_label">Name :</td>
	                                    <td class="day_value"><?php echo $user['full_name']; ?></td>
	                                </tr>
	                                <tr class="opened">
	                                    <td class="day_label">Age :</td>
	                                    <td class="day_value"><?php echo $age; ?></td>
	                                </tr>
	                                <tr class="opened">
	                                    <td class="day_label">Religion :</td>
	                                    <td class="day_value"><?php echo $spiritual_social_background->religion; ?></td>
	                                </tr>
	                                <tr class="opened">
	                                    <td class="day_label">Marital Status :</td>
	                                    <td class="day_value"><?php echo $user['marital_status']; ?></td>
	                                </tr>
	                                <tr class="opened">
	                                	<td class="day_label1">Education :</td>
	                                	<td class="day_value"><?php echo getDataById('education','name',$user['education']);?></td>
	                           		</tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col_4">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"
                                                                          aria-expanded="true">About Myself</a></li>
                                <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                                                           aria-controls="profile">Family Details</a></li>
                                <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1"
                                                           data-toggle="tab" aria-controls="profile1">Partner
                                        Preference</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div class="tab_box">
                                        <h1>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</h1>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                                            roots in a piece of classical Latin literature from 45 BC, making it over
                                            2000 years old. Richard McClintock, a Latin professor</p>
                                    </div>
                                    <div class="basic_1">
                                        <h3>Basic Information </h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
	                                                <tr class="opened_1">
	                                                    <td class="day_label" style="width:200px;">Full Name :</td>
	                                                    <td class="day_value"><?php echo $user['full_name']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Gender :</td>
	                                                    <td class="day_value"><?php echo $user['mobile']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Phone Number :</td>
	                                                    <td class="day_value"><?php echo $user['mobile']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Marital Status :</td>
	                                                    <td class="day_value"><?php echo $user['marital_status']; ?></td>
	                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
	                                                <tr class="opened_1">
	                                                    <td class="day_label" style="width:200px;">Email ID :</td>
	                                                    <td class="day_value"><?php echo $user['email']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Date of Birth :</td>
	                                                    <td class="day_value"><?php echo $user['dob']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">On Behalf :</td>
	                                                    <td class="day_value"><?php echo $user['on_behalf']; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Number Of Children :</td>
	                                                    <td class="day_value"><?php echo $user['children']; ?></td>
	                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
	                                <div class="basic_1">
	                                    <h3>Physical Attributes</h3>
	                                    <div class="col-md-6 basic_1-left">
	                                        <table class="table_working_hours">
	                                            <tbody>
		                                            <tr class="opened">
		                                                <td class="day_label" style="width:200px;">Height (In Feet) :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->height ? $physical_attributes->height : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Eye Color :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->eye_color ? $physical_attributes->eye_color : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Complexion :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->complexion ? $physical_attributes->complexion : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Body Type :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->body_type ? $physical_attributes->body_type : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Disability :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->disability ? $physical_attributes->disability : 'Not Avalible'; ?></td>
		                                            </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                    <div class="col-md-6 basic_1-left">
	                                        <table class="table_working_hours">
	                                            <tbody>
		                                            <tr class="opened_1">
		                                                <td class="day_label" style="width:200px;">Weight (In Kg) :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->weight ? $physical_attributes->weight : 'Not Avalible';?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Hair Color :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->hair_color ? $physical_attributes->hair_color : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Blood Group :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->blood_group ? $physical_attributes->blood_group : 'Not Avalible'; ?></td>
		                                            </tr>
		                                            <tr class="opened">
		                                                <td class="day_label">Body Art :</td>
		                                                <td class="day_value"><?php echo $physical_attributes->body_art ? $physical_attributes->body_art : 'Not Avalible'; ?></td>
		                                            </tr>
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
		                            <div class="clearfix"></div>
		                            <br>
		                            <div class="basic_1">
		                                <h3>Hobbies & Interest</h3>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened">
			                                            <td class="day_label" style="width:200px;">Hobbies :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->hobbies ? $hobbies_interest->hobbies : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Music :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->music? $hobbies_interest->music : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Movies :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->movies? $hobbies_interest->movies : 'Not Avalible';  ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Sports :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->sports? $hobbies_interest->sports : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Cuisines :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->cuisines ? $hobbies_interest->cuisines : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened_1">
			                                            <td class="day_label"style="width:200px;">InterestsBooks :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->interests ? $hobbies_interest->interests : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Books :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->books? $hobbies_interest->books : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">TV Shows :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->shows? $hobbies_interest->shows : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Fitness Activitiess :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->fitness_activitiess ? $hobbies_interest->fitness_activitiess : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Dress Styles :</td>
			                                            <td class="day_value"><?php echo $hobbies_interest->dress_styles ? $hobbies_interest->dress_styles : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
		                            <div class="basic_1">
		                                <h3>Personal Attitude & Behavior</h3>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened">
			                                            <td class="day_label" style="width:200px;">Affection :</td>
			                                            <td class="day_value"><?php echo $personal_attitude_behavior->affection ? $personal_attitude_behavior->affection : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Humor :</td>
			                                            <td class="day_value"><?php echo $personal_attitude_behavior->humor ? $personal_attitude_behavior->humor : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened_1">
			                                            <td class="day_label" style="width:200px;">Political Views :</td>
			                                            <td class="day_value"><?php echo $personal_attitude_behavior->political_views ? $personal_attitude_behavior->political_views : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Religious Service :</td>
			                                            <td class="day_value"><?php echo $personal_attitude_behavior->religious_service ? $personal_attitude_behavior->religious_service : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
		                            <div class="basic_1">
		                                <h3>Spiritual & Social Background</h3>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened">
			                                           <td class="day_label" style="width:200px;">Religion  :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->religion ? $spiritual_social_background->religion : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Sub Caste :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->sub_caste ? $spiritual_social_background->sub_caste : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Personal Value :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->personal_value ? $spiritual_social_background->personal_value : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Community Value :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->community_value ? $spiritual_social_background->community_value : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened_1">
			                                            <td class="day_label" style="width:200px;">Caste :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->caste ? $spiritual_social_background->caste : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Ethnicity :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->ethnicity ? $spiritual_social_background->ethnicity : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Family Value :</td>
			                                            <td class="day_value"><?php echo $spiritual_social_background->family_value ? $spiritual_social_background->family_value : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
		                            <div class="basic_1">
		                                <h3>Lifestyle</h3>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
		                                        <tr class="opened">
		                                            <td class="day_label" style="width:200px;">Diet :</td>
		                                            <td class="day_value"><?php echo $lifestyle->diet ? $lifestyle->diet : 'Not Avalible'; ?></td>
		                                        </tr>
		                                        <tr class="opened">
		                                            <td class="day_label">Smoke :</td>
		                                            <td class="day_value"><?php echo $lifestyle->smoke ? $lifestyle->smoke : 'Not Avalible'; ?></td>
		                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="col-md-6 basic_1-left">
		                                    <table class="table_working_hours">
		                                        <tbody>
			                                        <tr class="opened_1">
			                                            <td class="day_label" style="width:200px;">Drink :</td>
			                                            <td class="day_value"><?php echo $lifestyle->drink ? $lifestyle->drink : 'Not Avalible'; ?></td>
			                                        </tr>
			                                        <tr class="opened">
			                                            <td class="day_label">Living With :</td>
			                                            <td class="day_value"><?php echo $lifestyle->living_with ? $lifestyle->living_with : 'Not Avalible'; ?></td>
			                                        </tr>
		                                        </tbody>
		                                    </table>
		                                </div>
		                                <div class="clearfix"></div>
		                            </div>
                            	</div>
                            	<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                                <div class="basic_3">
                                    <h4>Family Details</h4>
                                    <div class="basic_1 basic_2">
                                        <h3>Basics</h3>
                                        <div class="col-md-6 basic_1-left">
                                            <table class="table_working_hours">
                                                <tbody>
	                                                <tr class="opened">
	                                                    <td class="day_label" style="width:200px;">Father :</td>
	                                                    <td class="day_value"><?php echo $family_information->father ? $family_information->father : 'Not Avalible'; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Mother :</td>
	                                                    <td class="day_value"><?php echo $family_information->mother ? $family_information->mother : 'Not Avalible'; ?></td>
	                                                </tr>
	                                                <tr class="opened">
	                                                    <td class="day_label">Number Of Sibling :</td>
	                                                    <td class="day_value"><?php echo $family_information->sibling ? $family_information->sibling : 'Not Avalible'; ?></td>
	                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                           		</div>
                            	<div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                                <div class="basic_1 basic_2">
                                    <div class="basic_1-left">
                                        <table class="table_working_hours">
                                            <tbody>
	                                            <tr class="opened">
	                                                <td class="day_label" style="width:200px;">General Requirement :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->general_requirement ? $partner_expectation->general_requirement : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Min Height (In Feet) :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->Min_height ? $partner_expectation->Min_height : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Marital Status:</td>
	                                                <td class="day_value"><?php echo $partner_expectation->marital_status1 ? $partner_expectation->marital_status1 : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Religion :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->religion1 ? $partner_expectation->religion1 : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Sub Caste :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->sub_caste1 ? $partner_expectation->sub_caste1 : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Education :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->education ? $partner_expectation->education : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Smoking Acceptable :</td>
	                                                <td class="day_value "><?php echo $partner_expectation->smoking_acceptable ? $partner_expectation->smoking_acceptable : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Dieting Acceptable :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->dieting_acceptable ? $partner_expectation->dieting_acceptable : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Personal Value :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->personal_value ? $partner_expectation->personal_value : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Family Value :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->Family ? $partner_expectation->Family : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened_1">
	                                                <td class="day_label">Residence Country :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->residence_country ? $partner_expectation->residence_country : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Max Weight (In Kg) :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->Max_weight ? $partner_expectation->Max_weight : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Children Acceptable :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->children_acceptable ? $partner_expectation->children_acceptable : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Caste :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->caste1 ? $partner_expectation->caste1 : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened_1">
	                                                <td class="day_label">Language :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->language ? $partner_expectation->language : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Profession :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->profession ? $partner_expectation->profession : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Drinking Acceptable :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->drinking_acceptable ? $partner_expectation->drinking_acceptable : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Body Type :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->body_type1 ? $partner_expectation->body_type1 : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Manglik :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->manglik ? $partner_expectation->manglik : 'Not Avalible'; ?></td>
	                                            </tr>
	                                            <tr class="opened">
	                                                <td class="day_label">Complexion :</td>
	                                                <td class="day_value"><?php echo $partner_expectation->Complexion1 ? $partner_expectation->Complexion1 : 'Not Avalible'; ?></td>
	                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            	</div>
                        	</div>
                    	</div>
                	</div>
            	</div>
            	<div class="clearfix"></div>
        	</div>
        </div>
    </div>
<?php require_once('footer.php'); ?>