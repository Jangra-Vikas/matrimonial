<?php require_once('config.php');
$userId = $logged_user['id'];
if(isset($_GET['filter']) AND $_GET['filter'] == 'members'){
    $where = '';
    if (!empty($_POST['gender'])){
        $where .= "gender='".$_POST["gender"]."' AND ";
    }
    if (!empty($_POST['marital_status']) && $_POST['marital_status'] !='Any'){
        $where .= "marital_status='".$_POST["marital_status"]."' AND ";
    }
    if (!empty($_POST['country'])){
        $where .= "language='%".$_POST["country"]."%' AND ";
    }
    if (!empty($_POST['state'])){
        $where .= "language LIKE '%".$_POST["state"]."%' AND ";
    }
    if (!empty($_POST['city'])){
        $where .= "language LIKE '%".$_POST["city"]."%' AND ";
    }
    if (!empty($_POST['religion'])){
        $where .= "spiritual_social_background LIKE '%".$_POST["religion"]."%' AND ";
    }
    if (!empty($_POST['mother_tongue'])){
        $where .= "language LIKE '%".$_POST["mother_tongue"]."%' AND ";
    }
    if (!empty($_POST['education'])){
        $where .= "education='".$_POST["education"]."' AND ";
    }
    if (count($_POST['age']) > 0 && !empty($_POST['age'][0]) && !empty($_POST['age'][1])){
        $from = date('Y-01-01', strtotime('-'.$_POST['age'][0].' year'));
        $to = date('Y-01-01', strtotime('-'.$_POST['age'][1].' year'));
        $where .= "dob BETWEEN '$to' AND '$from' AND ";
    }
    //$where =  rtrim($where,' AND');
    //echo $where;

    $sql = $conn->query("SELECT id,image,full_name,education,dob,spiritual_social_background,language,marital_status FROM users WHERE $where id!=$userId");
    $rows ='';
    while ($user = $sql->fetch_assoc()) {
        $age = date('Y') - ((explode('-',$user['dob']))[0]).' Years';
        $spiritual_social_background = json_decode($user['spiritual_social_background']);
        $rows .= '<div class="profile_top">
        <a href="view_profile.php?view='.$user['id'].'">
            <div class="col-sm-3 profile_left-top">
                <img src="dashboard/assets/img/users/'.$user['image'].'" class="img-responsive" alt=""/>
            </div>
            <div class="col-sm-9">
                <table class="table_working_hours">
                    <tbody>
                        <tr class="opened_1">
                            <td class="day_label1">Name :</td>
                            <td class="day_value">'.$user['full_name'].'</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label1">Age :</td>
                            <td class="day_value">'.$age.'</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label1">Religion :</td>
                            <td class="day_value">'.$spiritual_social_background->religion.'</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label1">Marital Status :</td>
                            <td class="day_value">'.$user['marital_status'].'</td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label1">Education :</td>
                            <td class="day_value">'.getDataById('education','name',$user['education']).'</td>
                        </tr>
                    </tbody>
               </table>
               <div class="buttons text-center">
                   <div class="vertical">View Contact Information</div>
               </div>
            </div>
	    <div class="clearfix"> </div>
        </a>
    </div>';
    }
    echo $rows;
}

