<?php require_once('header.php'); ?>
  <main>
    <div class="main-content">
      <div class="card">
        <h4 class="card-title">Welcome</h4>
        <div class="card-body1 row">
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="users.php">
                        <i class="fa fa-5x fa-users"></i><br>
                        <h5>Total user</h5>
                        <h2><?php
                            $users = $conn->query('SELECT count(id) as totalUsers FROM users WHERE id > 1')->fetch_assoc();
                            echo $users['totalUsers'];
                            ?></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="users.php">
                        <i class="fa fa-5x fa-user"></i><br>
                        <h5>Total Male user</h5>
                        <h2><?php
                            $users = $conn->query('SELECT count(id) as maleUsers FROM users WHERE gender="Male" && id > 1')->fetch_assoc();
                            echo $users['maleUsers'];
                            ?></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="users.php">
                        <i class="fa fa-5x fa-female"></i><br>
                        <h5>Total Female user</h5>
                        <h2><?php
                            $users = $conn->query('SELECT count(id) as femaleUsers FROM users WHERE gender="Female" && id > 1')->fetch_assoc();
                            echo $users['femaleUsers'];
                            ?></h2>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="payment.php">
                        <i class="fa fa-5x fa-money"></i><br>
                        <h5>Total earning</h5>
                        <h2><?php
                            /*$earning = $conn->query('SELECT SUM(amount) as totalEarning FROM payments')->fetch_assoc();
                            echo '&#8377; '.!empty($earning) ? $earning['totalEarning'] : '0.00';*/
                            ?>&#8377; 0.00</h2>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php require_once('footer.php'); ?>