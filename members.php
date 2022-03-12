<?php require_once('header.php'); ?> 
<div class="grid_3">
  <div class="container">
    <div class="breadcrumb1">
      <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Profile</li>
      </ul>
    </div>
    <div class="col-md-8 profile_left1">
  	<h1>Recently Viewed Profile</h1>
	<?php
		$sql=$conn->query('SELECT * FROM users WHERE status="Confirmed" && user_type!="Administrator"');
		while ($user=$sql->fetch_assoc()) {
            $spiritual_social_background = json_decode($user['spiritual_social_background']);
		    $age = date('Y') - ((explode('-',$user['dob']))[0]).' Years';
    ?>
    <div class="profile_top"><a href="view_profile.php">
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
						<td class="day_value"><?php echo $user['marital_status']; ?> </td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons text-center">
			   <div class="vertical">View Contact Information</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
    <?php } ?>
</div>
    <div class="col-md-4 match_right">
	<form>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1" for="sex">Gender : </label>
			<div class="col-sm-8 form_radios">
				<input  type="radio" name="Male"/> Male
				<input  type="radio" name="Female"/> Female
			</div>
            <br>
		</div>
		<div class="clearfix"></div>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1" for="sex">Marital Status : </label>
			<div class="col-sm-8 form_radios">
				<select class="form-control" id="sex" name="marital_status">
					<option value="Single">Single</option>
					<option value="Divorced">Divorced</option>
					<option value="Widowed">Widowed</option>
					<option value="Separated">Separated</option>
					<option value="Any">Any</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1" for="sex">Date of birth : </label>
			<div class="col-sm-8 form_radios">
				<div class="form-group">
					<!--<input class="form-control has-dark-background" name="20" id="slider-name" placeholder="20" type="text" required="">-->
					<input type="date" id="birth" placeholder="dd-mm-yyyy" name="dob" class="form-control">
				</div>
			  	<div class="clearfix"> </div>
			</div>
		</div>
		<br>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select class="select" data-type="state">
					<option value="">Country</option>
					<?php $countries = $conn->query('SELECT * FROM countries');
						while($x = $countries->fetch_assoc()){
							echo '<option value="'.$x["id"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select class="select" data-type="city" id="state">
					<option value="">Choose country first</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select id="city">
					<option value="">Choose state first</option>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select>
					<option value="">Religion</option>
					<?php $religions = $conn->query('SELECT * FROM religions WHERE is_active="Yes"');
						while($x = $religions->fetch_assoc()){
							echo '<option value="'.$x["id"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<div class="form_radios">
			<div class="select-block1">
				<select>
					<option value="">Mother Tongue</option>
					<?php $mother_tongue = $conn->query('SELECT * FROM mother_tongue WHERE is_active="Yes"');
						while($x = $mother_tongue->fetch_assoc()){
							echo '<option value="'.$x["id"].'">'.$x["name"].'</option>';
						}
					?>
				</select>
			</div>
		</div>
		<br>
		<br>
		<button type="sabmit" class="btn_1 submit" style="width:120px">Search</button>

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
	$('#search').click(function() {
		var id = $(this).val();
		var type = $(this).data('type');
		$.ajax({
		  url: "dashboard/common/actions.php?filter=members",
		  type: "POST",
		  data: {type : type, id: id},
		  dataType: "html",
		  success : function(response){
	  		$('#'+type).html(response);
		  }
		});
	});
});
</script>

<?php require_once('footer.php'); ?>
