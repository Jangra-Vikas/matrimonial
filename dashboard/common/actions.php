<?php require_once('config.php');

if(isset($_POST['register'])){
	$full_name 	= $_POST['full_name'];
	$usernam 	= explode(' ', $full_name);
	$email 		= mysqli_real_escape_string($conn,$_POST['email']);
	$mobile		= $_POST['mobile'];
	$password 	= mysqli_real_escape_string($conn,$_POST['password']);
	$token 		= md5(rand());
	$fetch = $conn->query("SELECT id FROM users ORDER BY id DESC")->fetch_assoc();
	$check = $conn->query("SELECT * FROM users WHERE email='$email' || mobile='$mobile'");
	$username = strtolower(implode('.',$usernam)).$fetch['id'];
	if($check->num_rows == 0){
		$_POST['id'] = $fetch['id']+1;
		$_SESSION['user'] = $_POST;
		$sql="INSERT INTO users (full_name, username, mobile, email, password, user_type, token, status)VALUES('$full_name', '$username', '$mobile', '$email', '$password', 'User', '$token', 'Confirmed')";
		if($conn->query($sql) === TRUE){
			header('Location:../../profile_setup.php?response=true&msg=Complete your registration');
		}else{
			header('Location:../../index.php?response=false&msg=Oopsss..! Somthing went wrong please try again');
		}
	}else{
		header('Location:../../index.php?response=false&msg=Email already registered with us.');
	}
}

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$check=$conn->query("SELECT * FROM users WHERE (username='$username' || email='$username' || mobile='$username') AND password='$password' AND status='Confirmed'");
	
	if($check->num_rows > 0){
		$fetch=$check->fetch_assoc();
		$_SESSION['user'] = $fetch;
		$logged_user = $_SESSION['user'];
		if ($fetch['user_type']=='Administrator') {
			header('Location:../index.php?response=true&msg=Login Success');
		}else{
			header('Location:../../members.php?response=true&msg=Login Success');
		}
	}else{
		header('Location:../../index.php?response=false&msg=Your Account Not Confirmed Yet.');
	}
}

if(isset($_POST['forgot'])){
	$email = $_POST['email'];
	$fetch=$conn->query("SELECT * FROM users WHERE email='$email'")->fetch_assoc();
	$full_name=$fetch['full_name'];
	$email=$fetch['email'];
	$username=$fetch['username'];
	$password=$fetch['password'];
	if(!empty($email)){
		$conn->query("UPDATE users SET status='Active' WHERE email='$email'");
		$sub = 'NeoVivah - Password recovery';
			$msg = "Hi <b>$full_name</b>, <br>Your password has been recovered successfully.<br>Please find the credientials to login into account<br><br>
				<b>Username:</b> $username<br>
				<b>Email:</b> $email </br>
				<b>Password:</b> $password<br>";
			$to = $email;
			sendEmail($to, $sub, $msg);
		header('Location:../../index.php?response=true&msg=Your Email Is Confirmed Successfully');
	}else{
		header('Location:../../index.php?response=false&msg=Oopsss..! Invailed Token');
	}
}

if(isset($_GET['confirm_account'])){
	$id = $_GET['confirm_account'];
	$fetch=$conn->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
	$full_name=$fetch['full_name'];
	$email=$fetch['email'];
	$username=$fetch['username'];
	$password=$fetch['password'];
	if(!empty($email)){
		$conn->query("UPDATE users SET status='Confirmed' WHERE email='$email'");
		$sub = 'AK Satta - Account Confirmation';
			$msg = "Hi <b>$full_name</b>, <br>Your Account Confirmd Successfully <br>Please find the credientials to login into account<br><br>
				<b>Username:</b> $username<br>
				<b>Email:</b> $email <br>
				<b>Password:</b> $password<br>";
			$to = $email;
			sendEmail($to, $sub, $msg);
		header('Location:../users.php?response=true&msg=Account Confirmed Successfully');
	}else{
		header('Location:../users.php?response=false&msg=Oopsss..! Invailed Action');
	}
}

if(isset($_POST['add_user'])){
	$full_name 	= $_POST['full_name'];
	$usernam 	= explode(' ', $full_name);
	$email 		= mysqli_real_escape_string($conn,$_POST['email']);
	$mobile		= $_POST['mobile'];
	$user_type	= $_POST['user_type'];
	$update		= $_POST['update'];
	$dob		= $_POST['dob'];
	$status		= $_POST['status'];
	$password 	= mysqli_real_escape_string($conn,$_POST['password']);
	$address 	= mysqli_real_escape_string($conn,$_POST['address']);
	$token 		= md5(rand());
	$image = $_FILES['image']['name'];
	$_FILES['image']['type'];
	$_FILES['image']['size'];
	$_FILES['image']['tmp_name'];
	$img_name = time().$image;
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/Users/" .$_FILES['image']['name']);
	$check = $conn->query("SELECT * FROM users WHERE id='$update'");
	$fetch = $check->fetch_assoc();
	echo $fetch['id'];
	$username = strtolower(implode('.',$usernam)).$fetch['id'];
	if($check->num_rows > 0){
		if(empty($update)){
		$sql=$conn->query("INSERT INTO users (full_name,username,dob,mobile,email,password,user_type,token,image,address)
		VALUES ('$full_name','$username','$dob','$mobile','$email','$password','$user_type','$token','$img_name','$address')");
		header('Location:../add_user.php?response=true&msg=Account Created Successfully');
		}else{
			if(empty($image)){
			$sql=$conn->query("UPDATE users SET full_name='$full_name',mobile='$mobile',password='$password',address='$address',user_type='$user_type',dob='$dob',status='$status' WHERE id='$update'");
			}else{
			$sql=$conn->query("UPDATE users SET full_name='$full_name',mobile='$mobile',password='$password',address='$address',user_type='$user_type',dob='$dob',image='$image',status='$status' WHERE id='$update'");
			}
			if($sql){
				header('Location:../add_user.php?edit='.$update.'&response=true&msg=Account Updated Successfully');
			}else{
				header('Location:../add_user.php?edit='.$update.'&response=false&msg=Oopsss..! Somthing went wrong please try again');
			}
		}
	}else{
		header('Location:../add_user.php?response=false&msg=Email already registered with us.');
	}
}

if(isset($_POST['update_profile'])){
	$update 	= $_POST['update'];
	$full_name 	= $_POST['full_name'];
	$email 		= mysqli_real_escape_string($conn,$_POST['email']);
	$mobile		= $_POST['mobile'];
	$password 	= mysqli_real_escape_string($conn,$_POST['password']);
	$address 	= mysqli_real_escape_string($conn,$_POST['address']);
	$image = $_FILES['image']['name'];
	$_FILES['image']['type'];
	$_FILES['image']['size'];
	$_FILES['image']['tmp_name'];
	$img_name = time().$image;
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/Users/" .$_FILES['image']['name']);
	
	if(empty($image)){
	$sql=$conn->query("UPDATE users SET full_name='$full_name',mobile='$mobile',password='$password',address='$address' WHERE id='$update'");
	}else{
	$sql=$conn->query("UPDATE users SET full_name='$full_name',mobile='$mobile',password='$password',address='$address' WHERE id='$update'");
	}
	if($sql){
		header('Location:'.$back.'&response=true&msg=Account Updated Successfully');
	}else{
		header('Location:'.$back.'&response=false&msg=Oopsss..! Somthing went wrong please try again');
	}
}

if($_GET['users_list']=='all'){
	$query=$conn->query("SELECT id,username,image,full_name,email,mobile,user_type,status FROM users WHERE id!='1'");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
}

if(isset($_GET['delete_user'])){
	$delete=$_GET['delete_user'];
	$query=$conn->query("DELETE FROM users WHERE id='$delete'");
	if($query){
		header('Location:../users.php?&response=true&msg=User Has Been Deleted');
	}
	else{
		header('Location:../users.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['add_slider'])) { 
	$slider_id=$_POST['slider_id'];
	$name=$_POST['name'];
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$discription=mysqli_real_escape_string($conn,$_POST['description']);
	$image = $_FILES['image']['name'];
		$_FILES['image']['type'];
		$_FILES['image']['size'];
		$_FILES['image']['tmp_name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"../../images/Sliders/" .$_FILES['image']['name']);
	if(empty($slider_id)){
	$result=$conn->query("INSERT INTO sliders(name, title, discription, image) VALUES ('$name', '$title', '$discription', '$image')");
	}else{
		if(empty($image)){
			$result=$conn->query("UPDATE sliders SET name='$name',title='$title',discription='$discription' WHERE id='$slider_id'");		
		}else{
	$result=$conn->query("UPDATE sliders SET name='$name',title='$title',discription='$discription',image='$image' WHERE id='$slider_id'");
	}	
	}
	if($result){
		header('Location:../add_slider.php?response=true&msg=Slider Has Been Added');
	}
	else{
		header('Location:../add_slider.php?response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_GET['delete_slider'])){
	$delete=$_GET['delete_slider'];
	$query=$conn->query("DELETE FROM sliders WHERE id='$delete'");
	if($query){
		header('Location:../add_slider.php?&response=true&msg=Slider Has Been Deleted');
	}
	else{
		header('Location:../add_slider.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if($_GET['slider_list']=='all'){
	$query=$conn->query("SELECT id,name,title,image,discription FROM sliders");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
}

if(isset($_POST['header'])) { 
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$facebook=mysqli_real_escape_string($conn,$_POST['facebook']);
	$twitter=mysqli_real_escape_string($conn,$_POST['twitter']);
	$instagram=mysqli_real_escape_string($conn,$_POST['instagram']);
	$linkedin=mysqli_real_escape_string($conn,$_POST['linkedin']);
	$logo = $_FILES['logo']['name'];
	$_FILES['logo']['type'];
	$_FILES['logo']['size'];
	$_FILES['logo']['tmp_name'];
	move_uploaded_file($_FILES['logo']['tmp_name'],"../../images/Logo/" .$_FILES['logo']['name']);
	if(empty($logo)){
		$result=$conn->query("UPDATE header SET phone='$phone', email='$email', facebook='$facebook', twitter='$twitter', instagram='$instagram', linkedin='$linkedin'");		
	}else{
		$result=$conn->query("UPDATE header SET logo='$logo', phone='$phone', email='$email', facebook='$facebook', twitter='$twitter', instagram='$instagram', linkedin='$linkedin'");
	}
	if($result){
		header('Location:../settings.php?&response=true&msg=Header Information Updated');
	}else{
		header('Location:../settings.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['footer'])){
	$copyright_text=$conn->real_escape_string($_POST['copyright_text']);
	$content=$conn->real_escape_string($_POST['content']);
	$image  		= 	$_FILES['logo']['name'];
	$image_tmp  	= 	$_FILES['logo']['tmp_name'];
	$img_name=time().$image;
	move_uploaded_file($image_tmp, "../../images/".$img_name);
	if(!empty($image)){
		$sql=$conn->query("UPDATE footer SET content='$content',copyright_text='$copyright_text',logo='$img_name'");
	}else{
		$sql=$conn->query("UPDATE footer SET copyright_text='$copyright_text',content='$content'");
	}
		if($sql){
			header('Location:../settings.php?response=true&msg=Information Updated Successfully');
		}else{
			header('Location:../settings.php?response=false&msg=Ooopsss..! Somethig went wrong');
		}
}

if(isset($_POST['add_post'])){ 
	$update_id=$_POST['update'];
	$numbers=$_POST['numbers'];
	$title=mysqli_real_escape_string($conn,$_POST['title']);
	$description=mysqli_real_escape_string($conn,$_POST['description']);
	
	if(empty($update_id)){
		$result=$conn->query("INSERT INTO posts (title,numbers,description,created_by) VALUES ('$title','$numbers','$description','$logged_user_id')");
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://aksatta.com/dashboard/common/firebase_notifications.php");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        header('Location:../posts.php?response=true&msg=Post Has Been Added');
	}else{
		$result=$conn->query("UPDATE posts SET title='$title',numbers='$numbers',description='$description' WHERE id='$update_id'");
	}
	if($result){
		header('Location:../posts.php?response=true&msg=Post Has Been Added');
	}
	else{	
		header('Location:../posts.php?response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if($_GET['posts_list']=='all'){
	$query=$conn->query("SELECT id,title,numbers,description FROM posts");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
}

if(isset($_GET['delete_post'])){
	$delete=$_GET['delete_post'];
	$query=$conn->query("DELETE FROM posts WHERE id='$delete'");
	if($query){
		header('Location:../posts.php?&response=true&msg=Post Has Been Deleted');
	}
	else{
		header('Location:../posts.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['layout_top'])){
	$top_section=$conn->real_escape_string($_POST['top_section']);
	$sql=$conn->query("UPDATE layout SET top_section='$top_section'");
	if($sql){
		header('Location:../layout.php?response=true&msg=Information Updated Successfully');
	}else{
		header('Location:../layout.php?response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['layout_bottom'])){
	$bottom_section=$conn->real_escape_string($_POST['bottom_section']);
	$sql=$conn->query("UPDATE layout SET bottom_section='$bottom_section'");
	
	if($sql){
		header('Location:../layout.php?response=true&msg=Information Updated Successfully');
	}else{
		header('Location:../layout.php?response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['add_page'])){
	$update=$_POST['update'];
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$content=mysqli_real_escape_string($conn,$_POST['content']);

	if(empty($update)){
		$sql=$conn->query("INSERT INTO  pages (name,content)VALUES('$name','$content')");
	}else{
		$sql=$conn->query("UPDATE pages SET name='$name',content='$content'");
	}
	if($sql){
		header('Location:../pages.php?response=true&msg=Information Updated Successfully');
	}else{
		header('Location:../pages.php?response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if($_GET['pages_list']=='all'){
	$query=$conn->query("SELECT id,name,content,left_img FROM pages");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
}

if(isset($_GET['delete_page'])){
	$delete=$_GET['delete_page'];
	$query=$conn->query("DELETE FROM pages WHERE id='$delete'");
	if($query){
		header('Location:../pages.php?&response=true&msg=Page Has Been Deleted');
	}
	else{
		header('Location:../pages.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}

if(isset($_POST['newsletters'])){
	$email = $conn->real_escape_string($_POST['email']);

	$check=$conn->query("SELECT * FROM newsletters WHERE email='$email'");
	if($check->num_rows > 0){
		header('Location:../../index.php?response=false&msg=You Have Already Subscribed For Newsletters');
	}else{
		$conn->query("INSERT INTO newsletters (email) VALUES ('$email')");
		header('Location:../../index.php?response=true&msg=You Have Successfully Subscribed For Newsletters');
	}
}

if(isset($_POST['contact_us'])){
	$name 		= $conn->real_escape_string($_POST['name']);
	$email 		= $conn->real_escape_string($_POST['email']);
	$mobile		= $conn->real_escape_string($_POST['mobile']);
	$message 	= $conn->real_escape_string($_POST['message']);

	$sql=$conn->query("INSERT INTO inquiry (name,email,mobile,message)VALUES('$name','$email','$mobile','$message')");
	if($sql){
		$sub = "AK Satta - Inquiry From $name";
		$msg = "New user want to showing intrest <br> Name: $name<br>Email: $email<br>Mobile: $mobile<br>Message: $message";
		$to = 'vjangra856@gmail.com';
		sendEmail($to, $sub, $msg);
		header('Location:../../index.php?response=true&msg=We have recieve your request. We will write back you soon.');
	}else{
		header('Location:../../index.php?response=false&msg=Ooopsss...! Somthing going wrong.');
	}
}

if(isset($_POST['type'])){
	$table 		= ($_POST['type'] == 'state') ? 'states' : 'cities';
	$column 	= ($_POST['type'] == 'state') ? 'country_id' : 'state_id';
	$id 		= $_POST['id'];

	//echo "SELECT * FROM `$type` WHERE `$where` = $id";

	$sql=$conn->query("SELECT * FROM `$table` WHERE `$column` = $id");
	if($sql){
		$rows = '<option value="">Choose one</option>';
		while ($row = $sql->fetch_assoc()) {
			$rows .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
		}

		echo $rows;

	}else{
		echo "Faild";
	}
}

if(isset($_POST['welcomeForm'])){
	$number = $_POST['number'];
	$check=$conn->query("SELECT mobile FROM guests WHERE mobile = '$number'");
	if ($check->num_rows > 0) {
		$_SESSION['guest'] = $number;
		header('Location:../../members.php?response=true&msg=Session Re-Initated Successfully');
	} else {
		$sql=$conn->query("INSERT INTO guests (mobile) VALUES ($number)");
		if($sql){
			$_SESSION['guest'] = $number;
			header('Location:../../members.php?response=true&msg=Session Initated Successfully');
		}else{
			header('Location:../../index.php?response=false&msg=Unable to initate you session');
		}
	}
}

if(isset($_GET['update'])){
	$column = $_GET['update'];
	$userId = (!empty($_POST['userId']) && $logged_user['id'] == 1) ? $_POST['userId'] : $logged_user['id'];
	$jsonData = json_encode($_POST);
	if ($column == 'basic_info') {
		$name = $_POST['full_name'];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$marital_status = $_POST['marital_status'];
		$dob = $_POST['dob'];
		$on_behalf = $_POST['on_behalf'];
		$children = $_POST['children'];
		$education = $_POST['education'];
		$address = $_POST['address'];

        $img = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $image = time().$img;

        if (!empty($userId) && $logged_user['id'] > 1) {
            $sql = $conn->query("UPDATE users SET full_name='$name',mobile='$mobile',email='$email',address='$address',dob='$dob',gender='$gender',marital_status='$marital_status',on_behalf='$on_behalf',children='$children',education='$education' WHERE id = $userId");

            if (!empty($_FILES['image']['name']) && $userId > 1){
                move_uploaded_file($tmp,'../assets/img/users/'.$image);
                $conn->query("UPDATE users SET image='$image' WHERE id = $userId");
            }
        } else if(empty($_POST['userId']) && $logged_user['id'] == 1) {
            $usernam 	= explode(' ', $name);
            $password 	= mysqli_real_escape_string($conn,$_POST['password']);
            $token 		= md5(rand());
            $fetch = $conn->query("SELECT id FROM users ORDER BY id DESC")->fetch_assoc();
            $check = $conn->query("SELECT * FROM users WHERE email='$email' || mobile='$mobile'");
            $username = strtolower(implode('.',$usernam)).$fetch['id'];
            if ($check->num_rows > 0) {
                header('Location:../add_user.php?response=false&msg=Email or mobile already registered with us');
                die;
            }
            $sql=$conn->query("INSERT INTO users (full_name, username, mobile, email, password, address, dob, gender, marital_status, on_behalf, children, education, user_type, token, status)VALUES('$name', '$username', '$mobile', '$email', '$password', '$address', '$dob', '$gender', '$marital_status', '$on_behalf', '$children', '$education', 'User', '$token', 'Confirmed')");

            $userId = $conn->insert_id;
            if (!empty($_FILES['image']['name'])){
                move_uploaded_file($tmp,'../assets/img/users/'.$image);
                $conn->query("UPDATE users SET image='$image' WHERE id = $userId");
            }

        } else {
            $sql = $conn->query("UPDATE users SET full_name='$name',mobile='$mobile',email='$email',address='$address',dob='$dob',gender='$gender',marital_status='$marital_status',on_behalf='$on_behalf',children='$children',education='$education' WHERE id = $userId");
        }
	} else {
		$sql = $conn->query("UPDATE users SET $column='$jsonData' WHERE id = $userId");
	}

    if ($sql) {
        if ($logged_user['id'] == 1) {
            header("Location:../add_user.php?edit=$userId&response=true&msg=User Modified Successfully");
        } else {
            $_SESSION['user'] = $conn->query("SELECT * FROM users WHERE id = $userId")->fetch_assoc();
            header('Location:../../profile_setup.php?response=true&msg=Data Updated Successfully');
        }
	} else {
        if ($logged_user['id'] == 1) {
            header("Location:../add_user.php?edit=$userId&response=true&msg=Unable to Update Data");
        } else {
            header('Location:../../profile_setup.php?response=false&msg=Unable to Update Data');
        }
	}
}

if (isset($_POST['add_plan'])) {
	$id			    = $_POST['id'];
	$name			= $_POST['name'];
	$price			= $_POST['price'];
	$contact_view	= $_POST['contact_view'];
	$validity       =  $_POST['validity'];
    $status			=   $_POST['status'];
	$image = $_FILES['package_image']['name'];
	$_FILES['package_image']['type'];
	$_FILES['package_image']['size'];
	$_FILES['package_image']['tmp_name'];
	$img_name = time().$image;
    if (!empty($id)) {
    	if (!empty($_FILES['package_image']['name'])) {
    		$sql=$conn->query("UPDATE plans SET package_image='$img_name' WHERE id=$id");
    	}
    	$sql=$conn->query("UPDATE plans SET name='$name',price='$price',contact_view='$contact_view',validity='$validity',status='$status' WHERE id = $id");
    } else {
	$sql=$conn->query("INSERT INTO plans (package_image,name,price,contact_view,validity,status)
	VALUES ('$img_name','$name','$price','$contact_view','$validity','$status')");
    }

	if ($sql) {
		move_uploaded_file($_FILES['package_image']['tmp_name'], '../assets/img/'.$img_name);
		header('Location:../plans.php?response=true&msg=Plan Created Successfully');
	} else {
		header('Location:../add_plans.php?response=false&msg=Unable to add plan');
	}
}


if($_GET['plans_list']=='all'){
	$query=$conn->query("SELECT id,name,package_image,price,contact_view,validity,status FROM plans");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
}

if(isset($_GET['delete_plan'])){
	$delete=$_GET['delete_user'];
	$query=$conn->query("DELETE FROM plans WHERE id='$delete'");
	if($query){
		header('Location:../plans.php?&response=true&msg=Plan Has Been Deleted');
	}
	else{
		header('Location:../plans.php?&response=false&msg=Ooopsss..! Somethig went wrong');
	}
}
?>