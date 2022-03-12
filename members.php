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
		$sql=$conn->query('SELECT * FROM users WHERE status="Confirmed"');
		while ($user=$sql->fetch_assoc()) {
		
    ?>
    <div class="profile_top"><a href="view_profile.php">
      <h2>254879</h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="images/p13.jpg" class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">name</td>
						<td class="day_value"><?php echo $user['full_name']; ?> </td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value">Sikh</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value">Single</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value"><?php echo $plan['marital_status']; ?></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span>Self</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
    <?php } ?>
      <h2>254879</h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="images/p15.jpg" class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value">Sikh</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value">Single</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span>Self</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
   
    <div class="profile_top"><a href="view_profile.php">
      <h2>254879</h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="images/p16.jpg" class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value">Sikh</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value">Single</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span>Self</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
    <div class="profile_top"><a href="view_profile.php">
      <h2>254879</h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="images/p17.jpg" class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value">Sikh</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value">Single</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span>Self</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
    <div class="profile_top profile_top1"><a href="view_profile.php">
      <h2>254879</h2>
	    <div class="col-sm-3 profile_left-top">
	    	<img src="images/s1.jpg" class="img-responsive" alt=""/>
	    </div>
	    <div class="col-sm-3">
	      <ul class="login_details1">
			 <li>Last Login : 5 days ago</li>
			 <li><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor." More....</p></li>
		  </ul>
	    </div>
	    <div class="col-sm-6">
	    	<table class="table_working_hours">
	        	<tbody>
	        		<tr class="opened_1">
						<td class="day_label1">Age / Height :</td>
						<td class="day_value">28, 5ft 5in / 163cm</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Last Login :</td>
						<td class="day_value">4 hours ago</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Religion :</td>
						<td class="day_value">Sikh</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Marital Status :</td>
						<td class="day_value">Single</td>
					</tr>
				    <tr class="opened">
						<td class="day_label1">Location :</td>
						<td class="day_value">India</td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Profile Created by :</td>
						<td class="day_value closed"><span>Self</span></td>
					</tr>
				    <tr class="closed">
						<td class="day_label1">Education :</td>
						<td class="day_value closed"><span>Engineering</span></td>
					</tr>
			    </tbody>
		   </table>
		   <div class="buttons">
			   <div class="vertical">Send Mail</div>
			   <div class="vertical">Shortlisted</div>
			   <div class="vertical">Send Interest</div>
		   </div>
	    </div>
	    <div class="clearfix"> </div>
    </a></div>
</div>
<div class="col-md-4 match_right">
	<div class="profile_search1">
	    <form>
		   <input type="text" class="m_1" name="ne" size="30" required="" placeholder="Enter Profile ID :">
		   <input type="submit" value="Go">
	    </form>
	</div>
	<form>
		<!--<input type="text" id="name" name="name" placeholder="firstname" autocomplete="off" class="form-text required">
		<br>
		<input type="text" id="name" name="name" placeholder="lastname" autocomplete="off" class="form-text required">
		<br>
		<input type="password"  name="password" id="password" for="pwd"  autocomplete="off" placeholder="password" class="form-text required">
		<br>
		<input type="email"  id="Email" name="Email" placeholder="email"  autocomplete="off"class="form-text required">-->
		<br>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1" for="sex">Gender : </label>
			<div class="col-sm-8 form_radios">
				<input  type="radio" name="Male"/> Male
				<input  type="radio" name="Female"/> Female
			</div>
		</div>
		<br>
		<div class="form_but1">
			<label class="col-sm-4 control-lable1" for="sex">Marital Status : </label>
			<div class="col-sm-8 form_radios">
				<select class="form-control" name="Marital_Status">
					<option value="Single">Single</option>
					<option value="Divorced">Divorced</option>
					<option value="Widowed">Widowed</option>
					<option value="Separated">Separated</option>
					<option value="Any">Any</option>
				</select>
			</div>
			<div class="clearfix"> </div>
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
		<div class="form_but1">
				<label class="col-md-4 control-lable1" for="sex">Show Profile : </label>
			<div class="col-md-8 form_radios">
				<input type="checkbox" class="radio_1"/> with Photo &nbsp;&nbsp;
				<input type="checkbox" class="radio_1" value="Cheese"/> with Horoscope
			</div>
			<div class="clearfix"> </div>
		</div>
		<br>
		<br>
		<button type="sabmit" class="btn_1 submit" style="width:120px">Search</button> 
	    <!--<section class="slider">
		<h3>Happy Marriage</h3>
		<div class="flexslider">
			<ul class="slides">
			<li>
				<img src="images/s2.jpg" alt=""/>
				<h4>Lorem & Ipsum</h4>
				<p>It is a long established fact that a reader will be distracted by the readable</p>
			</li>
			<li>
				<img src="images/s1.jpg" alt=""/>
				<h4>Lorem & Ipsum</h4>
				<p>It is a long established fact that a reader will be distracted by the readable</p>
			</li>
			<li>
				<img src="images/s3.jpg" alt=""/>
				<h4>Lorem & Ipsum</h4>
				<p>It is a long established fact that a reader will be distracted by the readable</p>
			</li>
			</ul>
		</div>
	</section>-->
	    <!--<div class="view_profile view_profile2">
				<h3>View Similar Profiles</h3>
				<ul class="profile_item">
				<a href="#">
				<li class="profile_item-img">
					<img src="images/p5.jpg" class="img-responsive" alt=""/>
				</li>
				<li class="profile_item-desc">
					<h4>2458741</h4>
					<p>29 Yrs, 5Ft 5in Christian</p>
					<h5>View Full Profile</h5>
				</li>
				<div class="clearfix"> </div>
				</a>
			</ul>
			<ul class="profile_item">
				<a href="#">
				<li class="profile_item-img">
					<img src="images/p6.jpg" class="img-responsive" alt=""/>
				</li>
				<li class="profile_item-desc">
					<h4>2458741</h4>
					<p>29 Yrs, 5Ft 5in Christian</p>
					<h5>View Full Profile</h5>
				</li>
				<div class="clearfix"> </div>
				</a>
			</ul>
			<ul class="profile_item">
				<a href="#">
				<li class="profile_item-img">
					<img src="images/p7.jpg" class="img-responsive" alt=""/>
				</li>
				<li class="profile_item-desc">
					<h4>2458741</h4>
					<p>29 Yrs, 5Ft 5in Christian</p>
					<h5>View Full Profile</h5>
				</li>
				<div class="clearfix"> </div>
				</a>
			</ul>
			<ul class="profile_item">
				<a href="#">
				<li class="profile_item-img">
					<img src="images/p8.jpg" class="img-responsive" alt=""/>
				</li>
				<li class="profile_item-desc">
					<h4>2458741</h4>
					<p>29 Yrs, 5Ft 5in Christian</p>
					<h5>View Full Profile</h5>
				</li>
				<div class="clearfix"> </div>
				</a>
			</ul>
		</div>-->
		<div class="clearfix"> </div>
	</div>
	</div>
    </form>
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
});
</script>

<?php require_once('footer.php'); ?>
