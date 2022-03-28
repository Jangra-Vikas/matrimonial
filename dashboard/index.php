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
                        <h5>Total user
                            <?php 
                            $users = $conn->query('SELECT count(id) FROM users WHERE gender="Male or Female"')->fetch_assoc();
                            ?>
                        </h5>
                        
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="users.php">
                        <i class="fa fa-5x fa-user"></i><br>
                        <h5>Total Male user</h5>
                        <h2>2</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="users.php">
                        <i class="fa fa-5x fa-female"></i><br>
                        <h5>Total Female user</h5>
                        <h2>2</h2>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-body box">
                    <a href="#">
                        <i class="fa fa-5x fa-money"></i><br>
                        <h5>Total earning</h5>
                        <h2>2</h2>
                    </a>
                </div>
            </div>
        </div>
      </div>
    </div>
<?php require_once('footer.php'); ?>