<?php require_once('config.php');

	$query=$conn->query("SELECT id,name,title,image,discription FROM sliders");
	$rows=array();
	while($row=$query->fetch_assoc()){
		$rows[]=$row;
	}
	echo json_encode($rows);
?>