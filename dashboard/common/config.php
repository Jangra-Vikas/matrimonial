<?php session_start();
ini_set('display_errors','off');
$page=basename($_SERVER['PHP_SELF']); require_once("class.phpmailer.php"); 
$back=isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/'; if($page=='posted.php'){ date_default_timezone_set('Europe/London'); }else{ date_default_timezone_set('Asia/Kolkata'); }

$conn = new mysqli("localhost","root","","matrimonial");

function getDataById($table,$column,$filter){
    $conn = new mysqli("localhost","root","","matrimonial");
    $sql = $conn->query("SELECT * FROM $table WHERE id='$filter'")->fetch_assoc();
    return $sql[$column];
}

// check connection
if ($conn->connect_error){ die("Connection failed: " . $conn->connect_error); }else{ /*echo 'Connected';*/ }
$host='https://ipsatta.com';

$header=$conn->query("SELECT * FROM header")->fetch_assoc();
$footer=$conn->query("SELECT * FROM footer")->fetch_assoc();
$layout=$conn->query("SELECT * FROM layout")->fetch_assoc();
$logged_user = $_SESSION['user'];
$forum_cat=$conn->query("SELECT * FROM categories WHERE type='Forum'");

function sendEmail($to, $subject, $bodytext){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = "siddhpurush00@gmail.com";
    $mail->Password = "Admin@123";
    $mail->SetFrom('mlmdairyz@gmail.com', 'AK Satta - सिद्ध पुरुष');
    $mail->addAddress($to, 'AK Satta - सिद्ध पुरुष');
    $mail->AddBCC('vikas.jangra1993@outlook.com', 'AK Satta - Vikas Jangra');
    $mail->Subject = $subject;
    $mail->Body = "<table style='border: 1px #61dbbb solid; padding: 15px; border-radius: 5px;'><tr><td><center><img src='http://aksatta.com/assets/images/favicon.png' height='100px'/><h2>सिद्ध पुरुष</h2></center></td></tr><tr><td></br>$bodytext</br>Thanks & Regards : Ak Satta - सिद्ध पुरुष</br></br>
</td></tr></table>";
    $mail->AddAddress($to);
    $status = $mail->Send();
}

// Time Ago Function

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>