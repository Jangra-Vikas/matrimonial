<?php require_once('dashboard/common/config.php');
if (!$_SESSION['guest'] && !$_GET['welcome']) {
	header('Location:index.php?welcome=true');
} ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));  ?> - Neo Vivah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
    <?php if ($_GET['welcome'] == 'true' && !empty($_SESSION)) { ?>
		$('#welcomeModal').modal('show');
	<?php } ?>
});
</script>
<style>
	.card-header{background-color:#fff(88, 37, 37);
    height:auto;
    width:100%;
    box-shadow:0 0 2px #807979c7;
    border-radius:5px 5px 0 0;
	padding:10px 20px;
	font-size:22px;
	font-weight:bold;
	margin-top: 25px;
	}
	.card-body{background-color:#fff(88, 37, 37);
    height:auto;
    width:100%;
    box-shadow:0 0 2px #807979c7;
    border-radius:0 0 5px 5px;
	padding:20px 20px;
	}
</style>
</head>
<body onLoad="document.getElementById('toster').click();">
<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
        <div class="navbar-inner">
           <div class="container">
           
                <a class="brand" href="index.php"><img src="images/logo2.png" alt="logo" width="180"></a>
            	<div class="pull-right">
          			<nav class="navbar nav_bottom" role="navigation">
            			<!-- Brand and toggle get grouped for better mobile display -->
		  				<div class="navbar-header nav_2">
		     				<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        				<span class="sr-only">Toggle navigation</span>
		       					<span class="icon-bar"></span>
		       					<span class="icon-bar"></span>
		       					<span class="icon-bar"></span>
		      				</button>
		     				 <a class="navbar-brand" href="#"></a>
		  				</div> 
		   				<!-- Collect the nav links, forms, and other content for toggling -->
		    			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			        		<ul class="nav navbar-nav nav_1">
					            <li><a href="index.php">Home</a></li>
					            <li><a href="about.php">About</a></li>
								<li><a href="members.php">Search</a></li>
					            <li class="last"><a href="contact.php">Contacts</a></li>
					            <?php if (!$logged_user){ ?>
									<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
							    	<li><a href="register.php"><i class="fa fa-user"></i> Register</a></li>
								<?php } else { ?>
							    	<li><a href="profile_setup.php"><i class="fa fa-user"></i> Profile</a></li>
							    	<li><a href="dashboard/common/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
								<?php } ?>
			        		</ul>
		     			</div><!-- /.navbar-collapse -->
		    		</nav>
       
		   		</div> <!-- end pull-right -->
          	<div class="clearfix"> </div>
        	</div> <!-- end container -->
        </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<?php if($_GET['response'] == 'true' && !empty($_GET['msg'])){ ?>
  <button data-provide="toast" data-text="<?php echo $_GET['msg']; ?>" data-duration="5000" id="toster" style="display: none;" data-action-color="purple"></button>
<?php } ?>
<?php if($_GET['response'] == 'false' && !empty($_GET['msg'])){ ?>
	<button data-provide="toast" data-text="<?php echo $_GET['msg']; ?>" data-duration="5000" id="toster" style="display: none;" data-color="red"></button>
<?php } ?>