<?php require_once('common/config.php'); if(!isset($_SESSION['user'])){ header('Location:login.php'); } ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title><?php echo ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME));  ?> - Neo Vivah</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/logo2.png">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/custom.js"></script>
    <style type="text/css">
      .bordered{
        text-align: center;
        border: 1px #ddd solid;
      }
  .card-header{background-color:#9790901c;
  height:auto;
  width:100%;
  box-shadow:0 0 2px #807979c7;
  border-radius:5px 5px 0 0;
  padding:10px 15px;
  font-size:20px;
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
    <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div>

    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <!-- <a class="logo-icon" href="../"><img src="../images/logo.png" alt="logo icon"></a> -->
        <span class="logo text-center">
          <a href="../"><img src="../images/logo.svg" alt="logo" width="80"></a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">General Links</li>

          <li class="menu-item <?php if($page=='index.php'){ echo 'active'; }?>">
            <a class="menu-link" href="index.php">
              <span class="icon fa fa-home"></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <?php if($logged_user['user_type']=='Administrator'){ ?>
          <li class="menu-item <?php if($page=='users.php'){ echo 'active'; }?>">
            <a class="menu-link" href="users.php">
              <span class="icon fa fa-user"></span>
              <span class="title">Users</span>
            </a>
          </li>
          <li class="menu-item <?php if($page=='plans.php' || $page=='add_plans.php'){ echo 'active'; }?>">
            <a class="menu-link" href="plans.php">
              <span class="icon fa fa-user"></span>
              <span class="title">Plans</span>
            </a>
          </li>
          <li class="menu-category">Settings</li>		
          <li class="menu-item <?php if($page=='wa_text.php' || $page=='add_slider.php' || $page=='settings.php' || $page=='layout.php' || $page=='pages.php'){ echo 'active'; }?>">
            <a class="menu-link" href="#">
              <span class="icon ti-layout"></span>
              <span class="title">Settings</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php if($page=='wa_text.php' || $page=='add_slider.php' || $page=='settings.php' || $page=='layout.php' || $page=='pages.php'){ echo 'style="display:block"'; }?>>
              <li class="menu-item">
                <a class="menu-link" href="settings.php">
                  <span class="dot"></span>
                  <span class="title">Header & Footer</span>
                </a>
              </li>
              <li class="menu-item <?php if($page=='add_slider.php'){ echo 'active'; }?>">
                <a class="menu-link" href="add_slider.php">
                  <span class="dot"></span>
                  <span class="title">Slider</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="pages.php">
                  <span class="dot"></span>
                  <span class="title">Pages</span>
                </a>
              </li>
            </ul>
          </li>
		<?php } ?>
        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->

    <header class="topbar">
      <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>☰</i></span>
          <div class="dropdown d-none d-md-block">
            <span class="topbar-btn" data-toggle="dropdown"><i class="ti-layout-grid3-alt"></i></span>
          </div>
      </div>
      <?php if($_GET['response'] == 'true' && !empty($_GET['msg'])){ ?>
          <button data-provide="toast" data-text="<?php echo $_GET['msg']; ?>" data-duration="5000" id="toster" style="display: none;" data-action-color="purple"></button>
		<?php } ?>
		<?php if($_GET['response'] == 'false' && !empty($_GET['msg'])){ ?>
			<button data-provide="toast" data-text="<?php echo $_GET['msg']; ?>" data-duration="5000" id="toster" style="display: none;" data-color="red"></button>
	  <?php } ?>
      <div class="topbar-right">
        <ul class="topbar-btns">
          <li class="dropdown">
            <span class="topbar-btn"><img class="avatar" src="../images/Users/<?php echo $logged_image; ?>" alt="..."></span>
            <a href="common/logout.php"><i class="fa fa-3x fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </header>
    <main>