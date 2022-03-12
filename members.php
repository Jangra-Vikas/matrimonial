<?php require_once('header.php'); $userId = $logged_user["id"]; $gender = $logged_user["gender"]; ?>
<div class="grid_3">
  <div class="container">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Members</li>
      </ul>
    </div>
    <div class="col-md-8 profile_left1">
        <?php
        $sql=$conn->query("SELECT * FROM users WHERE user_type!='Administrator' && gender!='$gender'");
        while ($user=$sql->fetch_assoc()) {
            $spiritual_social_background = json_decode($user['spiritual_social_background']);
            $age = date('Y') - ((explode('-',$user['dob']))[0]).' Years';
            ?>
            <div class="profile_top">
                <a href="view_profile.php?view=<?php echo $user['id']; ?>">
                    <div class="col-sm-3 profile_left-top">
                        <img src="dashboard/assets/img/users/<?php echo $user['image']; ?>" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-sm-9">
                        <table class="table_working_hours">
                            <tbody>
                            <tr class="opened_1">
                                <td class="day_label1">Name</td>
                                <td class="day_value"><?php echo $user['full_name']; ?> </td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Age :</td>
                                <td class="day_value"><?php echo $age; ?></td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Religion :</td>
                                <td class="day_value"><?php echo $spiritual_social_background->religion; ?></td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Marital Status :</td>
                                <td class="day_value"><?php echo $user['marital_status']; ?> </td>
                            </tr>
                            <tr class="opened">
                                <td class="day_label1">Education :</td>
                                <td class="day_value"><?php echo getDataById('education','name',$user['education']);?></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="buttons text-center">
                            <div class="vertical">View Contact Information</div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-4 match_right">
	<form id="searchMembers" method="post">
		<div class="form_but1">
			<label class="col-sm-4 control-lable1">Gender : </label>
			<div class="col-sm-8 form_radios">
				<input type="radio" value="Male" name="gender" <?php echo $gender=='Male' ? '' : 'checked' ?>/> Male
				<input type="radio" value="Female" name="gender" <?php echo $gender=='Female' ? '' : 'checked' ?>/> Female
			</div>
            <br>
		</div>
		<div class="clearfix"></div>
        <div class="form_but1">
            <label class="col-sm-4 control-lable1">Age : </label>
            <div class="col-sm-8 form_radios">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <input type="number" placeholder="From" name="age[]" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="form-group">
                                <input type="number" placeholder="To" name="age[]" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <br>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1">Marital Status : </label>
			<div class="col-sm-8 form_radios">
				<div class="row">
                    <select class="form-control" name="marital_status">
                        <option value="Single">Single</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Any">Any</option>
                    </select>
                </div>
			</div>
            <div class="clearfix"> </div>
		</div>
		<div class="form_radios">
			<div class="select-block1">
				<select name="education">
					<option value="">Education</option>
					<?php $education = $conn->query('SELECT id,name FROM education WHERE status="Yes"');
						while($x = $education->fetch_assoc()){
							echo '<option value="'.$x["id"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select class="select" name="country" data-type="state">
					<option value="">Country</option>
					<?php $countries = $conn->query('SELECT name FROM countries');
						while($x = $countries->fetch_assoc()){
							echo '<option value="'.$x["name"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select class="select" name="state" data-type="city" id="state">
					<option value="">Choose country first</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select id="city" name="city">
					<option value="">Choose state first</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select name="religion">
					<option value="">Religion</option>
					<?php $religions = $conn->query('SELECT name FROM religions WHERE is_active="Yes"');
						while($x = $religions->fetch_assoc()){
							echo '<option value="'.$x["name"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select name="mother_tongue">
					<option value="">Mother Tongue</option>
					<?php $mother_tongue = $conn->query('SELECT name FROM mother_tongue WHERE is_active="Yes"');
						while($x = $mother_tongue->fetch_assoc()){
							echo '<option value="'.$x["name"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<br>
		<button type="button" class="btn_1 submit filterMembers" style="width:120px">Search</button>

		<div class="clearfix"></div>
    </form>
</div>
  </div>
</div>
<script>	
$(document).ready(function() {
	$('.select').change(function() {
		var id = $(this).val();
		var type = $(this).data('type');
		$.ajax({
		  url: "dashboard/common/actions.php",
		  type: "POST",
		  data: {type : type, id: id},
		  dataType: "html",
		  success : function(response){
	  		$('#'+type).html(response);
		  }
		});
	});
	$('.filterMembers').click(function() {
		$.ajax({
		  url: "dashboard/common/filter.php?filter=members",
		  type: "POST",
		  data: $("#searchMembers").serialize(),
		  dataType: "html",
		  success : function(response){
	  		$('.profile_left1').html(response);
		  }
		});
	});
});
</script>

<?php require_once('footer.php'); ?>
