<?php
require_once('config.php');
if(isset($_POST['daily_record'])){
    $update_id=$_POST['update'];
	$category=$_POST['category'];
	$number=$_POST['number'];
	$date=$_POST['date'];
	$column=strtolower($category);
	
	$qry=$conn->query("SELECT * FROM monthly_chart WHERE created_at='$date'");
	if($qry->num_rows > 0){
	    $check = $conn->query("UPDATE monthly_chart SET $column='$number' WHERE created_at='$date'");
    }else{
	    $check = $conn->query("INSERT INTO monthly_chart($column,created_at)VALUES('$number','$date')");
    }
    if($check){
        echo "Updated";
    }else{
        echo "Error Occured";
    }
}
?>